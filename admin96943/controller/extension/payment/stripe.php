<?php
//==============================================================================
// Stripe Payment Gateway v2022-2-22
// 
// Author: Clear Thinking, LLC
// E-mail: johnathan@getclearthinking.com
// Website: http://www.getclearthinking.com
// 
// All code within this file is copyright Clear Thinking, LLC.
// You may not copy or reuse code within this file without written permission.
//==============================================================================

//namespace Opencart\Admin\Controller\Extension\Stripe\Payment;
//class Stripe extends \Opencart\System\Engine\Controller {

class ControllerExtensionPaymentStripe extends Controller {
	
	private $type = 'payment';
	private $name = 'stripe';
	
	//==============================================================================
	// index()
	//==============================================================================
	public function index() {
		$data = array(
			'type'			=> $this->type,
			'name'			=> $this->name,
			'autobackup'	=> false,
			'save_type'		=> 'keepediting',
			'permission'	=> $this->hasPermission('modify'),
		);
		
		$this->loadSettings($data);
		
		// extension-specific
		if (!empty($this->request->get['error'])) {
			echo '<h3 class="alert alert-danger text-center" style="padding: 25px; margin: 0;">' . $this->request->get['error'] . '</h3>';
		} elseif (!empty($this->session->data['connect_success'])) {
			echo '<h3 class="alert alert-success text-center" style="padding: 25px; margin: 0;">' . $this->session->data['connect_success'] . '</h3>';
			unset($this->session->data['connect_success']);
		}
		
		if (empty($data['saved'])) {
			$data['save_type'] = 'reload';
		}
		
		$this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . $this->name . "_customer` (
				`customer_id` int(11) NOT NULL,
				`stripe_customer_id` varchar(18) NOT NULL,
				`transaction_mode` varchar(4) NOT NULL DEFAULT 'live',
				PRIMARY KEY (`customer_id`, `stripe_customer_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
		");
		
		$this->db->query("DELETE FROM " . DB_PREFIX . $this->name . "_customer WHERE customer_id = 0");
		
		$transaction_mode_column = false;
		$database_table_query = $this->db->query("DESCRIBE " . DB_PREFIX . $this->name . "_customer");
		foreach ($database_table_query->rows as $column) {
			if ($column['Field'] == 'transaction_mode') {
				$transaction_mode_column = true;
			}
		}
		if (!$transaction_mode_column) {
			$this->db->query("ALTER TABLE " . DB_PREFIX . $this->name . "_customer ADD transaction_mode varchar(4) NOT NULL DEFAULT 'live'");
		}
		
		//------------------------------------------------------------------------------
		// Data Arrays
		//------------------------------------------------------------------------------
		$data['language_array'] = array($this->config->get('config_language') => '');
		$data['language_flags'] = array();
		$this->load->model('localisation/language');
		foreach ($this->model_localisation_language->getLanguages() as $language) {
			$data['language_array'][$language['code']] = $language['name'];
			$data['language_flags'][$language['code']] = (version_compare(VERSION, '2.2', '<')) ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png';
		}
		
		$data['order_status_array'] = array(0 => $data['text_ignore']);
		$this->load->model('localisation/order_status');
		foreach ($this->model_localisation_order_status->getOrderStatuses() as $order_status) {
			$data['order_status_array'][$order_status['order_status_id']] = $order_status['name'];
		}
		
		$data['customer_group_array'] = array(0 => $data['text_guests']);
		$this->load->model((version_compare(VERSION, '2.1', '<') ? 'sale' : 'customer') . '/customer_group');
		foreach ($this->{'model_' . (version_compare(VERSION, '2.1', '<') ? 'sale' : 'customer') . '_customer_group'}->getCustomerGroups() as $customer_group) {
			$data['customer_group_array'][$customer_group['customer_group_id']] = $customer_group['name'];
		}
		
		$data['geo_zone_array'] = array(0 => $data['text_everywhere_else']);
		$this->load->model('localisation/geo_zone');
		foreach ($this->model_localisation_geo_zone->getGeoZones() as $geo_zone) {
			$data['geo_zone_array'][$geo_zone['geo_zone_id']] = $geo_zone['name'];
		}
		
		$data['store_array'] = array(0 => $this->config->get('config_name'));
		$store_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store ORDER BY name");
		foreach ($store_query->rows as $store) {
			$data['store_array'][$store['store_id']] = $store['name'];
		}
		
		$data['currency_array'] = array($this->config->get('config_currency') => '');
		$this->load->model('localisation/currency');
		foreach ($this->model_localisation_currency->getCurrencies() as $currency) {
			$data['currency_array'][$currency['code']] = $currency['code'];
		}
		
		// Get subscription products
		$data['subscription_products'] = array();
		
		if (!empty($data['saved']['subscriptions']) &&
			!empty($data['saved']['transaction_mode']) &&
			!empty($data['saved'][$data['saved']['transaction_mode'] . '_access_token'])
		) {
			$plan_response = $this->curlRequest('GET', 'plans', array('count' => 100));
			
			if (!empty($plan_response['error'])) {
				$this->log->write('STRIPE ERROR: ' . $plan_response['error']['message']);
			} else {
				$plans = $plan_response['data'];
				
				while (!empty($plan_response['has_more'])) {
					$plan_response = $this->curlRequest('GET', 'plans', array('count' => 100, 'starting_after' => $plans[count($plans) - 1]['id']));
					if (empty($plan_response['error'])) {
						$plans = array_merge($plans, $plan_response['data']);
					}
				}
				
				foreach ($plans as $plan) {
					$decimal_factor = (in_array(strtoupper($plan['currency']), array('BIF','CLP','DJF','GNF','JPY','KMF','KRW','MGA','PYG','RWF','UGX','VND','VUV','XAF','XOF','XPF'))) ? 1 : 100;
					$decimal_factor = (in_array(strtoupper($plan['currency']), array('BHD','JOD','KWD','OMR','TND'))) ? 1000 : $decimal_factor;
					
					$product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id AND pd.language_id = " . (int)$this->config->get('config_language_id') . ") WHERE p.location = '" . $this->db->escape($plan['id']) . "'");
					
					foreach ($product_query->rows as $product) {
						$data['subscription_products'][] = array(
							'product_id'	=> $product['product_id'],
							'name'			=> $product['name'],
							'price'			=> $this->currency->format($product['price'], $this->config->get('config_currency')),
							'location'		=> $product['location'],
							'plan'			=> $plan['nickname'],
							'interval'		=> $plan['interval_count'] . ' ' . $plan['interval'] . ($plan['interval_count'] > 1 ? 's' : ''),
							'charge'		=> $this->currency->format($plan['amount'] / $decimal_factor, strtoupper($plan['currency']), 1, strtoupper($plan['currency'])),
						);
					}
				}
			}
		}
		
		//------------------------------------------------------------------------------
		// Extensions Settings
		//------------------------------------------------------------------------------
		$data['settings'] = array();
		
		$data['settings'][] = array(
			'type'		=> 'tabs',
			'tabs'		=> array('extension_settings', 'order_statuses', 'restrictions', 'stripe_settings', 'subscription_products'),
		);
		$data['settings'][] = array(
			'key'		=> 'extension_settings',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'status',
			'type'		=> 'select',
			'options'	=> array(1 => $data['text_enabled'], 0 => $data['text_disabled']),
			'default'	=> 1,
		);
		$data['settings'][] = array(
			'key'		=> 'sort_order',
			'type'		=> 'text',
			'default'	=> 1,
			'class'		=> 'short',
		);
		$data['settings'][] = array(
			'key'		=> 'title',
			'type'		=> 'multilingual_text',
			'default'	=> 'Credit / Debit Card',
		);
		$data['settings'][] = array(
			'key'		=> 'terms',
			'type'		=> 'multilingual_text',
		);
		$data['settings'][] = array(
			'key'		=> 'card_input_format',
			'type'		=> 'select',
			'options'	=> array('combined' => $data['text_combined'], 'individual' => $data['text_individual']),
			'default'	=> 'combined',
		);
		$data['settings'][] = array(
			'key'		=> 'button_text',
			'type'		=> 'multilingual_text',
			'default'	=> 'Confirm Order',
		);
		$data['settings'][] = array(
			'key'		=> 'button_class',
			'type'		=> 'text',
			'default'	=> 'btn btn-primary',
		);
		$data['settings'][] = array(
			'key'		=> 'button_styling',
			'type'		=> 'text',
		);
		$data['settings'][] = array(
			'key'		=> 'additional_css',
			'type'		=> 'textarea',
		);
		
		// Payment Page Text
		$data['settings'][] = array(
			'key'		=> 'payment_page_text',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'text_use_a_new_card',
			'type'		=> 'multilingual_text',
			'default'	=> 'Use a New Card',
		);
		$data['settings'][] = array(
			'key'		=> 'new_card_image',
			'type'		=> 'text',
			'default'	=> str_replace('"', '&quot;', $data['new_card_image']),
		);
		$data['settings'][] = array(
			'key'		=> 'text_card_number',
			'type'		=> 'multilingual_text',
			'default'	=> 'Card Number:',
		);
		$data['settings'][] = array(
			'key'		=> 'text_card_expiry',
			'type'		=> 'multilingual_text',
			'default'	=> 'Expiration Date:',
		);
		$data['settings'][] = array(
			'key'		=> 'text_card_cvc',
			'type'		=> 'multilingual_text',
			'default'	=> 'Security Code:',
		);
		$data['settings'][] = array(
			'key'		=> 'text_store_card',
			'type'		=> 'multilingual_text',
			'default'	=> 'Store Card for Future Use:',
		);
		$data['settings'][] = array(
			'key'		=> 'text_use_a_stored_card',
			'type'		=> 'multilingual_text',
			'default'	=> 'Use a Stored Card',
		);
		$data['settings'][] = array(
			'key'		=> 'stored_card_image',
			'type'		=> 'text',
			'default'	=> str_replace('"', '&quot;', $data['stored_card_image']),
		);
		$data['settings'][] = array(
			'key'		=> 'text_ending_in',
			'type'		=> 'multilingual_text',
			'default'	=> 'ending in',
		);
		$data['settings'][] = array(
			'key'		=> 'text_set_card_as_default',
			'type'		=> 'multilingual_text',
			'default'	=> 'Set Card as Default:',
		);
		$data['settings'][] = array(
			'key'		=> 'text_delete_this_card',
			'type'		=> 'multilingual_text',
			'default'	=> 'Delete This Card:',
		);
		
		// Please Wait Messages
		$data['settings'][] = array(
			'key'		=> 'please_wait_messages',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'text_please_wait',
			'type'		=> 'multilingual_text',
			'default'	=> 'Please wait...',
		);
		$data['settings'][] = array(
			'key'		=> 'text_validating_payment_info',
			'type'		=> 'multilingual_text',
			'default'	=> 'Validating payment info...',
		);
		$data['settings'][] = array(
			'key'		=> 'text_processing_payment',
			'type'		=> 'multilingual_text',
			'default'	=> 'Processing payment...',
		);
		$data['settings'][] = array(
			'key'		=> 'text_finalizing_order',
			'type'		=> 'multilingual_text',
			'default'	=> 'Finalizing order...',
		);
		
		// Stripe Error Codes
		$data['settings'][] = array(
			'key'		=> 'stripe_error_codes',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> '<div class="text-info text-center pad-bottom-lg">' . $data['help_stripe_error_codes'] . '</div>',
		);
		$stripe_errors = array(
			'card_declined',
			'expired_card',
			'incorrect_cvc',
			'incorrect_number',
			'incorrect_zip',
			'invalid_cvc',
			'invalid_expiry_month',
			'invalid_expiry_year',
			'invalid_number',
			'missing',
			'processing_error',
		);
		foreach ($stripe_errors as $stripe_error) {
			$data['settings'][] = array(
				'key'		=> 'error_' . $stripe_error,
				'type'		=> 'multilingual_text',
				'class'		=> 'long',
			);
		}
		
		//------------------------------------------------------------------------------
		// Order Statuses
		//------------------------------------------------------------------------------
		$data['settings'][] = array(
			'key'		=> 'order_statuses',
			'type'		=> 'tab',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> '<div class="text-info text-center pad-bottom-sm">' . $data['help_order_statuses'] . '</div>',
		);
		$data['settings'][] = array(
			'key'		=> 'order_statuses',
			'type'		=> 'heading',
		);
		
		$processing_status_id = $this->config->get('config_processing_status');
		$processing_status_id = $processing_status_id[0];
		
		foreach (array('success', 'authorize', 'error', 'street', 'zip', 'cvc', 'refund', 'partial') as $order_status) {
			if ($order_status == 'success') {
				$default_status = ($processing_status_id) ? $processing_status_id : $this->config->get('config_order_status_id');
			} elseif ($order_status == 'authorize') {
				$default_status = 1;
			} elseif ($order_status == 'error') {
				$default_status = 10;
			} else {
				$default_status = 0;
			}
			
			$data['settings'][] = array(
				'key'		=> $order_status . '_status_id',
				'type'		=> 'select',
				'options'	=> $data['order_status_array'],
				'default'	=> $default_status,
			);
		}
		
		//------------------------------------------------------------------------------
		// Restrictions
		//------------------------------------------------------------------------------
		$data['settings'][] = array(
			'key'		=> 'restrictions',
			'type'		=> 'tab',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> '<div class="text-info text-center pad-bottom-sm">' . $data['help_restrictions'] . '</div>',
		);
		$data['settings'][] = array(
			'key'		=> 'restrictions',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'min_total',
			'type'		=> 'text',
			'attributes'=> array('style' => 'width: 50px !important'),
			'default'	=> '0.50',
		);
		$data['settings'][] = array(
			'key'		=> 'max_total',
			'type'		=> 'text',
			'attributes'=> array('style' => 'width: 50px !important'),
		);
		$data['settings'][] = array(
			'key'		=> 'stores',
			'type'		=> 'checkboxes',
			'options'	=> $data['store_array'],
			'default'	=> array_keys($data['store_array']),
		);
		$data['settings'][] = array(
			'key'		=> 'geo_zones',
			'type'		=> 'checkboxes',
			'options'	=> $data['geo_zone_array'],
			'default'	=> array_keys($data['geo_zone_array']),
		);
		$data['settings'][] = array(
			'key'		=> 'customer_groups',
			'type'		=> 'checkboxes',
			'options'	=> $data['customer_group_array'],
			'default'	=> array_keys($data['customer_group_array']),
		);
		
		// Currency Settings
		$data['settings'][] = array(
			'key'		=> 'currency_settings',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> '<div class="text-info text-center pad-bottom">' . $data['help_currency_settings'] . '</div>',
		);
		foreach ($data['currency_array'] as $code => $title) {
			$data['settings'][] = array(
				'key'		=> 'currencies_' . $code,
				'title'		=> str_replace('[currency]', $code, $data['entry_currencies']),
				'type'		=> 'select',
				'options'	=> array_merge(array(0 => $data['text_currency_disabled']), $data['currency_array']),
				'default'	=> $this->config->get('config_currency'),
			);
		}
		
		//------------------------------------------------------------------------------
		// Stripe Settings
		//------------------------------------------------------------------------------
		$data['settings'][] = array(
			'key'		=> 'stripe_settings',
			'type'		=> 'tab',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> '<div class="text-info text-center pad-bottom-sm">' . $data['help_stripe_settings'] . '</div>',
		);
		
		// Connect with Stripe
		$data['settings'][] = array(
			'key'		=> 'connect_with_stripe',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'title'		=> '',
			'content'	=> '<a href="index.php?route=' . $data['extension_route'] . '/launch&token=' . $data['token'] . '">' . $data['connect_with_stripe_image'] . '</a><br><br>',
		);
		
		if (!empty($data['saved']['account_id'])) {
			$data['settings'][] = array(
				'key'		=> 'connection_status',
				'type'		=> 'html',
				'content'	=> '
					<div style="color: #080; margin-top: 7px;">' . $data['text_connected'] . ' &nbsp; (' . $data['saved']['account_id'] . ')</div>
					<input type="hidden" class="form-control" name="account_id" value="' . (!empty($data['saved']['account_id']) ? $data['saved']['account_id'] : '') . '" />
					<input type="hidden" class="form-control" name="refresh_token" value="' . (!empty($data['saved']['refresh_token']) ? $data['saved']['refresh_token'] : '') . '" />
					<input type="hidden" class="form-control" name="live_publishable_key" value="' . (!empty($data['saved']['live_publishable_key']) ? $data['saved']['live_publishable_key'] : '') . '" />
					<input type="hidden" class="form-control" name="live_access_token" value="' . (!empty($data['saved']['live_access_token']) ? $data['saved']['live_access_token'] : '') . '" />
					<input type="hidden" class="form-control" name="test_publishable_key" value="' . (!empty($data['saved']['test_publishable_key']) ? $data['saved']['test_publishable_key'] : '') . '" />
					<input type="hidden" class="form-control" name="test_access_token" value="' . (!empty($data['saved']['test_access_token']) ? $data['saved']['test_access_token'] : '') . '" />
				',
			);
		} else {
			$data['settings'][] = array(
				'key'		=> 'connection_status',
				'type'		=> 'html',
				'content'	=> '
					<div style="color: #C00; margin-top: 7px;">' . $data['text_not_connected'] . '</div><br>
					<div>If you are having trouble using the "Connect with Stripe" button, you can try <a onclick="connectManually()">connecting manually</a>.</div>
					<div id="manual-connection-modal" class="modal fade" style="float: none">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Connect Manually</h4>
									<button type="button" class="close btn-close" data-dismiss="modal" data-bs-dismiss="modal"></button>
								</div>
								<div class="modal-body">
									First, you will need to <a target="_blank" href="index.php?route=' . $data['extension_route'] . '/launch&mode=manual&token=' . $data['token'] . '">click here</a> to open the Stripe connection page in a separate window. Once you have logged into your Stripe account on that page, you will be shown the OAuth info needed for the extension. Copy and paste that info into the appropriate fields below.
									<br><br>
									<div id="manual-connection-fields" style="text-align: right">
										<p>Account ID: <input type="text" class="form-control" name="account_id" style="width: 380px !important" value="' . (!empty($data['saved']['account_id']) ? $data['saved']['account_id'] : '') . '" /></p>
										<p>Refresh Token: <input type="text" class="form-control" name="refresh_token" style="width: 380px !important" value="' . (!empty($data['saved']['refresh_token']) ? $data['saved']['refresh_token'] : '') . '" /></p>
										<p>Live Publishable Key: <input type="text" class="form-control" name="live_publishable_key" style="width: 380px !important" value="' . (!empty($data['saved']['live_publishable_key']) ? $data['saved']['live_publishable_key'] : '') . '" /></p>
										<p>Live Access Token: <input type="text" class="form-control" name="live_access_token" style="width: 380px !important" value="' . (!empty($data['saved']['live_access_token']) ? $data['saved']['live_access_token'] : '') . '" /></p>
										<p>Test Publishable Key: <input type="text" class="form-control" name="test_publishable_key" style="width: 380px !important" value="' . (!empty($data['saved']['test_publishable_key']) ? $data['saved']['test_publishable_key'] : '') . '" /></p>
										<p>Test Access Token: <input type="text" class="form-control" name="test_access_token" style="width: 380px !important" value="' . (!empty($data['saved']['test_access_token']) ? $data['saved']['test_access_token'] : '') . '" /></p>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-light" data-dismiss="modal" data-bs-dismiss="modal"><i class="fa fa-times pad-right-sm"></i> ' . $data['button_close'] . '</button>
									<button type="button" class="btn btn-primary" onclick="saveSettings($(this)); setTimeout(function(){ location.reload(); }, 1000);"><i class="fa fa-save pad-right-sm"></i> ' . $data['button_save'] . '</button>
								</div>
							</div>
						</div>
					</div>
					<script>
						function connectManually() {
							$("#manual-connection-modal").modal("show");
						}
					</script>
				',
			);
		}
		
		$webhook_url = str_replace('http:', 'https:', HTTP_CATALOG) . 'index.php?route=' . $data['extension_route'] . '/webhook&key=' . md5($this->config->get('config_encryption'));
		$data['settings'][] = array(
			'key'		=> 'webhook_url',
			'type'		=> 'html',
			'content'	=> '<input type="text" class="form-control" readonly="readonly" onclick="this.select()" style="background: #F5F5F5; cursor: pointer; font-family: monospace; width: 100% !important;" value="' . $webhook_url . '" />',
			'after'		=> '<br><br><div class="text-info">' . $data['help_webhook_url'] . '</div>',
		);
		
		// Stripe Settings
		$data['settings'][] = array(
			'key'		=> 'stripe_settings',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'transaction_mode',
			'type'		=> 'select',
			'options'	=> array('test' => $data['text_test'], 'live' => $data['text_live']),
		);
		$data['settings'][] = array(
			'key'		=> 'charge_mode',
			'type'		=> 'select',
			'options'	=> array('authorize' => $data['text_authorize'], 'capture' => $data['text_capture'], 'fraud' => $data['text_fraud_authorize']),
			'default'	=> 'capture',
		);
		$data['settings'][] = array(
			'key'		=> 'attempts',
			'type'		=> 'text',
			'default'	=> '5',
			'class'		=> 'short',
		);
		$data['settings'][] = array(
			'key'		=> 'attempts_exceeded',
			'type'		=> 'multilingual_text',
			'default'	=> 'Your card has been declined.',
		);
		$data['settings'][] = array(
			'key'		=> 'transaction_description',
			'type'		=> 'text',
			'default'	=> '[store]: Order #[order_id] ([email])',
		);
		$data['settings'][] = array(
			'key'		=> 'send_customer_data',
			'type'		=> 'select',
			'options'	=> array('never' => $data['text_never'], 'choice' => $data['text_customers_choice'], 'always' => $data['text_always']),
		);
		$data['settings'][] = array(
			'key'		=> 'allow_stored_cards',
			'type'		=> 'select',
			'options'	=> array(1 => $data['text_yes'], 0 => $data['text_no']),
			'default'	=> 0,
		);
		$data['settings'][] = array(
			'key'		=> 'advanced_error_handling',
			'type'		=> 'select',
			'options'	=> array(1 => $data['text_enabled'], 0 => $data['text_disabled']),
			'default'	=> 1,
		);
		
		// Notification Settings
		$data['settings'][] = array(
			'key'		=> 'notification_settings',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'always_send_receipts',
			'type'		=> 'select',
			'options'	=> array(1 => $data['text_yes'], 0 => $data['text_no']),
			'default'	=> 0,
		);
		$data['settings'][] = array(
			'key'		=> 'decline_code_emails',
			'type'		=> 'text',
			'default'	=> $this->config->get('config_email'),
		);
		$data['settings'][] = array(
			'key'		=> 'subscription_fail_emails',
			'type'		=> 'text',
			'default'	=> $this->config->get('config_email'),
		);
		$data['settings'][] = array(
			'key'		=> 'uncaptured_emails',
			'type'		=> 'text',
			'default'	=> $this->config->get('config_email'),
		);
		$data['settings'][] = array(
			'key'		=> 'uncaptured_check',
			'type'		=> 'hidden',
		);
		
		//------------------------------------------------------------------------------
		// Subscription Products
		//------------------------------------------------------------------------------
		$data['settings'][] = array(
			'key'		=> 'subscription_products',
			'type'		=> 'tab',
		);
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> '<div class="text-info pad-left pad-bottom-sm">' . $data['help_subscription_products'] . '</div>',
		);
		$data['settings'][] = array(
			'key'		=> 'subscription_products',
			'type'		=> 'heading',
		);
		$data['settings'][] = array(
			'key'		=> 'subscriptions',
			'type'		=> 'select',
			'options'	=> array(1 => $data['text_yes'], 0 => $data['text_no']),
			'default'	=> 0,
		);
		$data['settings'][] = array(
			'key'		=> 'subscription_order_report',
			'type'		=> 'html',
			'content'	=> '<a class="btn btn-primary" href="index.php?route=' . $data['extension_route'] . '/subscriptionOrderReport&token=' . $data['token'] . '">' . $data['button_view_report'] . '</a>',
		);
		$data['settings'][] = array(
			'key'		=> 'text_to_be_charged',
			'type'		=> 'multilingual_text',
			'default'	=> 'To Be Charged Later',
		);
		$data['settings'][] = array(
			'key'		=> 'prevent_guests',
			'type'		=> 'select',
			'options'	=> array(1 => $data['text_yes'], 0 => $data['text_no']),
			'default'	=> 0,
		);
		$data['settings'][] = array(
			'key'		=> 'text_customer_required',
			'type'		=> 'multilingual_text',
			'default'	=> 'Error: You must create a customer account to purchase a subscription product.',
		);
		$data['settings'][] = array(
			'key'		=> 'order_address',
			'type'		=> 'select',
			'options'	=> array('stripe' => $data['text_stripe_address'], 'opencart' => $data['text_opencart_address'], 'original' => $data['text_original_address']),
			'default'	=> 'original',
		);
		
		// Current Subscription Products
		$data['settings'][] = array(
			'key'		=> 'current_subscriptions',
			'type'		=> 'heading',
		);
		$subscription_products_table = '
			<div class="form-group row">
				<label class="control-label col-sm-3 text-end">' . str_replace('[transaction_mode]', ucwords(isset($data['saved']['transaction_mode']) ? $data['saved']['transaction_mode'] : 'test'), $data['entry_current_subscriptions']) . '</label>
				<div class="col-sm-9">
					<table class="table table-stripe table-bordered">
						<thead>
							<tr>
								<td colspan="3" style="text-align: center">' . $data['text_thead_opencart'] . '</td>
								<td colspan="3" style="text-align: center">' . $data['text_thead_stripe'] . '</td>
							</tr>
							<tr>
								<td class="left">' . $data['text_product_name'] . '</td>
								<td class="left">' . $data['text_product_price'] . '</td>
								<td class="left">' . $data['text_location_plan_id'] . '</td>
								<td class="left">' . $data['text_plan_name'] . '</td>
								<td class="left">' . $data['text_plan_interval'] . '</td>
								<td class="left">' . $data['text_plan_charge'] . '</td>
							</tr>
						</thead>
		';
		if (empty($data['subscription_products'])) {
			$subscription_products_table .= '
				<tr><td class="center" colspan="6">' . $data['text_no_subscription_products'] . '</td></tr>
				<tr><td class="center" colspan="6">' . $data['text_create_one_by_entering'] . '</td></tr>
			';
		}
		foreach ($data['subscription_products'] as $product) {
			$highlight = ($product['price'] == $product['charge']) ? '' : 'style="background: #FDD"';
			$subscription_products_table .= '
				<tr>
					<td class="left"><a target="_blank" href="index.php?route=catalog/product/edit&amp;product_id=' . $product['product_id'] . '&amp;token=' . $data['token'] . '">' . $product['name'] . '</a></td>
					<td class="left" ' . $highlight . '>' . $product['price'] . '</td>
					<td class="left">' . $product['location'] . '</td>
					<td class="left">' . $product['plan'] . '</td>
					<td class="left">' . $product['interval'] . '</td>
					<td class="left" ' . $highlight . '>' . $product['charge'] . '</td>
				</tr>
			';
		}
		$subscription_products_table .= '</table></div></div><br>';
		
		$data['settings'][] = array(
			'type'		=> 'html',
			'content'	=> $subscription_products_table,
		);
		
		//------------------------------------------------------------------------------
		// end settings
		//------------------------------------------------------------------------------
		
		$this->document->setTitle($data['heading_title']);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		if (version_compare(VERSION, '4.0', '<')) {
			$template_file = DIR_TEMPLATE . 'extension/' . $this->type . '/' . $this->name . '.twig';
		} elseif (defined('DIR_EXTENSION')) {
			$template_file = DIR_EXTENSION . $this->name . '/admin/view/template/' . $this->type . '/' . $this->name . '.twig';
		}
		
		if (is_file($template_file)) {
			extract($data);
			
			ob_start();
			if (version_compare(VERSION, '4.0', '<')) {
				require(class_exists('VQMod') ? \VQMod::modCheck(modification($template_file)) : modification($template_file));
			} else {
				require(class_exists('VQMod') ? \VQMod::modCheck($template_file) : $template_file);
			}
			$output = ob_get_clean();
			
			if (version_compare(VERSION, '3.0', '>=')) {
				$output = str_replace(array('&token=', '&amp;token='), '&user_token=', $output);
			}
			
			if (version_compare(VERSION, '4.0', '>=')) {
				$output = str_replace($data['extension_route'] . '/', $data['extension_route'] . '|', $output);
			}
			
			echo $output;
		} else {
			echo 'Error loading template file: ' . $template_file;
		}
	}
	
	//==============================================================================
	// Helper functions
	//==============================================================================
	private function hasPermission($permission) {
		if (version_compare(VERSION, '2.3', '<')) {
			return $this->user->hasPermission($permission, $this->type . '/' . $this->name);
		} elseif (version_compare(VERSION, '4.0', '<')) {
			return $this->user->hasPermission($permission, 'extension/' . $this->type . '/' . $this->name);
		} else {
			return $this->user->hasPermission($permission, 'extension/' . $this->name . '/' . $this->type . '/' . $this->name);
		}
	}
	
	private function loadLanguage($path) {
		$_ = array();
		$language = array();
		if (version_compare(VERSION, '2.2', '<')) {
			$admin_language = $this->db->query("SELECT * FROM " . DB_PREFIX . "language WHERE `code` = '" . $this->db->escape($this->config->get('config_admin_language')) . "'")->row['directory'];
		} elseif (version_compare(VERSION, '4.0', '<')) {
			$admin_language = $this->config->get('config_admin_language');
		} else {
			$admin_language = $this->config->get('config_language_admin');
		}
		foreach (array('english', 'en-gb', $admin_language) as $directory) {
			$file = DIR_LANGUAGE . $directory . '/' . $directory . '.php';
			if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
			$file = DIR_LANGUAGE . $directory . '/default.php';
			if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
			$file = DIR_LANGUAGE . $directory . '/' . $path . '.php';
			if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
			$file = DIR_LANGUAGE . $directory . '/extension/' . $path . '.php';
			if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
			if (defined('DIR_EXTENSION')) {
				$file = DIR_EXTENSION . 'opencart/admin/language/' . $directory . '/' . $path . '.php';
				if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
				$explode = explode('/', $path);
				$file = DIR_EXTENSION . $explode[1] . '/admin/language/' . $directory . '/' . $path . '.php';
				if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
				$file = DIR_EXTENSION . $this->name . '/admin/language/' . $directory . '/' . $path . '.php';
				if (file_exists($file)) require(class_exists('VQMod') ? \VQMod::modCheck($file) : $file);
			}
			$language = array_merge($language, $_);
		}
		return $language;
	}
	
	private function getTableRowNumbers(&$data, $table, $sorting) {
		$groups = array();
		$rules = array();
		
		foreach ($data['saved'] as $key => $setting) {
			if (preg_match('/' . $table . '_(\d+)_' . $sorting . '/', $key, $matches)) {
				$groups[$setting][] = $matches[1];
			}
			if (preg_match('/' . $table . '_(\d+)_rule_(\d+)_type/', $key, $matches)) {
				$rules[$matches[1]][] = $matches[2];
			}
		}
		
		if (empty($groups)) $groups = array('' => array('1'));
		ksort($groups, defined('SORT_NATURAL') ? SORT_NATURAL : SORT_REGULAR);
		
		foreach ($rules as $key => $rule) {
			ksort($rules[$key], defined('SORT_NATURAL') ? SORT_NATURAL : SORT_REGULAR);
		}
		
		$data['used_rows'][$table] = array();
		$rows = array();
		foreach ($groups as $group) {
			foreach ($group as $num) {
				$data['used_rows'][preg_replace('/module_(\d+)_/', '', $table)][] = $num;
				$rows[$num] = (empty($rules[$num])) ? array() : $rules[$num];
			}
		}
		sort($data['used_rows'][$table]);
		
		return $rows;
	}
	
	//==============================================================================
	// Setting functions
	//==============================================================================
	private $encryption_key = '';
	
	public function loadSettings(&$data) {
		$backup_type = (empty($data)) ? 'manual' : 'auto';
		if ($backup_type == 'manual' && !$this->hasPermission('modify')) {
			return;
		}
		
		$this->cache->delete($this->name);
		unset($this->session->data[$this->name]);
		$code = (version_compare(VERSION, '3.0', '<') ? '' : $this->type . '_') . $this->name;
		
		// Set URL data
		$data['token'] = $this->session->data[version_compare(VERSION, '3.0', '<') ? 'token' : 'user_token'];
		$data['exit'] = $this->url->link((version_compare(VERSION, '3.0', '<') ? 'extension' : 'marketplace') . '/' . (version_compare(VERSION, '2.3', '<') ? '' : 'extension&type=') . $this->type . '&token=' . $data['token'], '', 'SSL');
		$data['extension_route'] = 'extension/' . (version_compare(VERSION, '4.0', '<') ? '' : $this->name . '/') . $this->type . '/' . $this->name;
		
		// Load saved settings
		$data['saved'] = array();
		$settings_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE `code` = '" . $this->db->escape($code) . "' ORDER BY `key` ASC");
		
		foreach ($settings_query->rows as $setting) {
			$key = str_replace($code . '_', '', $setting['key']);
			$value = $setting['value'];
			if ($setting['serialized']) {
				$value = (version_compare(VERSION, '2.1', '<')) ? unserialize($setting['value']) : json_decode($setting['value'], true);
			}
			
			$data['saved'][$key] = $value;
			
			if (is_array($value)) {
				foreach ($value as $num => $value_array) {
					foreach ($value_array as $k => $v) {
						$data['saved'][$key . '_' . $num . '_' . $k] = $v;
					}
				}
			}
		}
		
		// Load language and run standard checks
		$data = array_merge($data, $this->loadLanguage($this->type . '/' . $this->name));
		
		if (ini_get('max_input_vars') && ((ini_get('max_input_vars') - count($data['saved'])) < 50)) {
			$data['warning'] = $data['standard_max_input_vars'];
		}
		
		// Modify files according to OpenCart version
		if ($this->type == 'total') {
			if (version_compare(VERSION, '2.2', '<')) {
				$filepath = DIR_CATALOG . 'model/' . $this->type . '/' . $this->name . '.php';
				file_put_contents($filepath, str_replace('public function getTotal($total) {', 'public function getTotal(&$total_data, &$order_total, &$taxes) {' . "\n\t\t" . '$total = array("totals" => &$total_data, "total" => &$order_total, "taxes" => &$taxes);', file_get_contents($filepath)));
			} elseif (defined('DIR_EXTENSION')) {
				$filepath = DIR_EXTENSION . $this->name . '/catalog/model/' . $this->type . '/' . $this->name . '.php';
				file_put_contents($filepath, str_replace('public function getTotal($total_input) {', 'public function getTotal(&$total_data, &$taxes, &$order_total) {', file_get_contents($filepath)));
			}
		}
		
		if (version_compare(VERSION, '2.3', '>=')) {
			$filepaths = array(
				DIR_APPLICATION . 'controller/' . $this->type . '/' . $this->name . '.php',
				DIR_CATALOG . 'controller/' . $this->type . '/' . $this->name . '.php',
				DIR_CATALOG . 'model/' . $this->type . '/' . $this->name . '.php',
			);
			foreach ($filepaths as $filepath) {
				if (file_exists($filepath)) {
					rename($filepath, str_replace('.php', '.php-OLD', $filepath));
				}
			}
		}
		
		if (version_compare(VERSION, '4.0', '>=')) {
			$this->db->query("UPDATE " . DB_PREFIX . "extension_install SET version = '" . $this->db->escape($data['version']) . "' WHERE `code` = '" . $this->db->escape($this->name) . "'");
		}
		
		// Set save type and skip auto-backup if not needed
		if (!empty($data['saved']['autosave'])) {
			$data['save_type'] = 'auto';
		}
		
		if ($backup_type == 'auto' && empty($data['autobackup'])) {
			return;
		}
		
		// Create settings auto-backup file
		$manual_filepath = DIR_LOGS . $this->name . $this->encryption_key . '.backup';
		$auto_filepath = DIR_LOGS . $this->name . $this->encryption_key . '.autobackup';
		$filepath = ($backup_type == 'auto') ? $auto_filepath : $manual_filepath;
		if (file_exists($filepath)) unlink($filepath);
		
		file_put_contents($filepath, 'SETTING	NUMBER	SUB-SETTING	SUB-NUMBER	SUB-SUB-SETTING	VALUE' . "\n", FILE_APPEND|LOCK_EX);
		
		foreach ($data['saved'] as $key => $value) {
			if (is_array($value)) continue;
			
			$parts = explode('|', preg_replace(array('/_(\d+)_/', '/_(\d+)/'), array('|$1|', '|$1'), $key));
			
			$line = '';
			for ($i = 0; $i < 5; $i++) {
				$line .= (isset($parts[$i]) ? $parts[$i] : '') . "\t";
			}
			$line .= str_replace(array("\t", "\n"), array('    ', '\n'), $value) . "\n";
			
			file_put_contents($filepath, $line, FILE_APPEND|LOCK_EX);
		}
		
		$data['autobackup_time'] = date('Y-M-d @ g:i a');
		$data['backup_time'] = (file_exists($manual_filepath)) ? date('Y-M-d @ g:i a', filemtime($manual_filepath)) : '';
		
		if ($backup_type == 'manual') {
			echo $data['autobackup_time'];
		}
	}
	
	public function saveSettings() {
		if (!$this->hasPermission('modify')) {
			echo 'PermissionError';
			return;
		}
		
		$this->cache->delete($this->name);
		unset($this->session->data[$this->name]);
		$code = (version_compare(VERSION, '3.0', '<') ? '' : $this->type . '_') . $this->name;
		
		if ($this->request->get['saving'] == 'manual') {
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code` = '" . $this->db->escape($code) . "' AND `key` != '" . $this->db->escape($this->name . '_module') . "'");
		}
		
		$module_id = 0;
		$modules = array();
		$module_instance = false;
		
		foreach ($this->request->post as $key => $value) {
			if (strpos($key, 'module_') === 0) {
				$parts = explode('_', $key, 3);
				$module_id = $parts[1];
				$modules[$parts[1]][$parts[2]] = $value;
				if ($parts[2] == 'module_id') $module_instance = true;
			} else {
				$key = (version_compare(VERSION, '3.0', '<') ? '' : $this->type . '_') . $this->name . '_' . $key;
				
				if ($this->request->get['saving'] == 'auto') {
					$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "'");
				}
				
				$this->db->query("
					INSERT INTO " . DB_PREFIX . "setting SET
					`store_id` = 0,
					`code` = '" . $this->db->escape($code) . "',
					`key` = '" . $this->db->escape($key) . "',
					`value` = '" . $this->db->escape(stripslashes(is_array($value) ? implode(';', $value) : $value)) . "',
					`serialized` = 0
				");
			}
		}
		
		foreach ($modules as $module_id => $module) {
			$module_code = (version_compare(VERSION, '4.0', '<')) ? $this->name : $this->name . '.' . $this->name;
			if (!$module_id) {
				$this->db->query("
					INSERT INTO " . DB_PREFIX . "module SET
					`name` = '" . $this->db->escape($module['name']) . "',
					`code` = '" . $this->db->escape($module_code) . "',
					`setting` = ''
				");
				$module_id = $this->db->getLastId();
				$module['module_id'] = $module_id;
			}
			$module_settings = (version_compare(VERSION, '2.1', '<')) ? serialize($module) : json_encode($module);
			$this->db->query("
				UPDATE " . DB_PREFIX . "module SET
				`name` = '" . $this->db->escape($module['name']) . "',
				`code` = '" . $this->db->escape($module_code) . "',
				`setting` = '" . $this->db->escape($module_settings) . "'
				WHERE module_id = " . (int)$module_id . "
			");
		}
	}
	
	public function deleteSetting() {
		if (!$this->hasPermission('modify')) {
			echo 'PermissionError';
			return;
		}
		$prefix = (version_compare(VERSION, '3.0', '<')) ? '' : $this->type . '_';
		$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code` = '" . $this->db->escape($prefix . $this->name) . "' AND `key` = '" . $this->db->escape($prefix . $this->name . '_' . str_replace('[]', '', $this->request->get['setting'])) . "'");
	}
	
	//==============================================================================
	// capture()
	//==============================================================================
	public function capture() {
		if (!$this->hasPermission('modify')) {
			echo 'PermissionError';
			return;
		}
		
		$payment_intent_response = $this->curlRequest('GET', 'payment_intents/' . $this->request->post['payment_intent_id']);
		
		if (!empty($payment_intent_response['error'])) {
			echo 'Error: ' . $payment_intent_response['error']['message'];
			return;
		}
		
		$decimal_factor = (in_array(strtoupper($payment_intent_response['currency']), array('BIF','CLP','DJF','GNF','JPY','KMF','KRW','MGA','PYG','RWF','UGX','VND','VUV','XAF','XOF','XPF'))) ? 1 : 100;
		$three_decimal_factor = (in_array(strtoupper($payment_intent_response['currency']), array('BHD','JOD','KWD','OMR','TND'))) ? 10 : 1;
		
		$capture_response = $this->curlRequest('POST', 'payment_intents/' . $this->request->post['payment_intent_id'] . '/capture', array('amount_to_capture' => round($this->request->post['amount'] * $decimal_factor) * $three_decimal_factor));
		
		if (!empty($capture_response['error'])) {
			echo 'Error: ' . $capture_response['error']['message'];
		}
		
		if (empty($capture_response['error']) || strpos($capture_response['error']['message'], 'has already been captured')) {
			$this->db->query("UPDATE " . DB_PREFIX . "order_history SET `comment` = REPLACE(`comment`, '<span>No &nbsp;</span> <a', 'Yes (" . number_format($this->request->post['amount'], 2, '.', '') . " captured) <a style=\"display: none\"') WHERE `comment` LIKE '%capture($(this), %, \'" . $this->db->escape($this->request->post['payment_intent_id']) . "\')%'");
		}
	}
	
	//==============================================================================
	// refund()
	//==============================================================================
	public function refund() {
		if (!$this->hasPermission('modify')) {
			echo 'PermissionError';
			return;
		}
		
		$charge_response = $this->curlRequest('GET', 'charges/' . $this->request->post['charge_id']);
		
		if (!empty($charge_response['error'])) {
			echo 'Error: ' . $refund_response['error']['message'];
			return;
		}
		
		$decimal_factor = (in_array(strtoupper($charge_response['currency']), array('BIF','CLP','DJF','GNF','JPY','KMF','KRW','MGA','PYG','RWF','UGX','VND','VUV','XAF','XOF','XPF'))) ? 1 : 100;
		$three_decimal_factor = (in_array(strtoupper($charge_response['currency']), array('BHD','JOD','KWD','OMR','TND'))) ? 10 : 1;
		
		$curl_data = array(
			'amount'	=> round($this->request->post['amount'] * $decimal_factor) * $three_decimal_factor,
			'metadata'	=> array(
				'time'		=> time(),
			),
		);
		
		$refund_response = $this->curlRequest('POST', 'charges/' . $this->request->post['charge_id'] . '/refunds', $curl_data);
		
		if (!empty($refund_response['error'])) {
			if (!empty($charge_response['payment_intent'])) {
				$cancel_response = $this->curlRequest('POST', 'payment_intents/' . $charge_response['payment_intent'] . '/cancel');
			} else {
				echo 'Error: ' . $refund_response['error']['message'];
			}
		}
	}
	
	//==============================================================================
	// launch()
	//==============================================================================
	public function launch() {
		$this->session->data['stripe_encryption_key'] = md5(rand());
		$mode = (!empty($this->request->get['mode']) && $this->request->get['mode'] == 'manual') ? '&mode=manual' : '';
		
		if (empty($this->request->server['HTTP_REFERER'])) {
			$s = $this->request->server;
			$slashbar = (version_compare(VERSION, '4.0', '<')) ? '/' : '|';
			$this->request->server['HTTP_REFERER'] = 'http' . (!empty($s['HTTPS']) && $s['HTTPS'] !== 'off' ? 's' : '') . '://' . $s['HTTP_HOST'] . str_replace($slashbar . 'launch', '', $s['REQUEST_URI']);
		}
		
		$this->response->redirect('https://www.getclearthinking.com/index.php?route=stripe_connect&origin=' . base64_encode($this->request->server['HTTP_REFERER']) . '&version=' . VERSION . '&key=' . $this->session->data['stripe_encryption_key'] . $mode);
	}
	
	//==============================================================================
	// connect()
	//==============================================================================
	public function connect() {
		if (!$this->hasPermission('modify')) {
			echo 'PermissionError';
			return;
		}
		
		$prefix = (version_compare(VERSION, '3.0', '<')) ? '' : $this->type . '_';
		$code = $prefix . $this->name;
		
		if (!empty($this->request->get['info']) && !empty($this->session->data['stripe_encryption_key'])) {
			$decrypted_data = openssl_decrypt($this->request->get['info'], 'AES-256-CBC', $this->session->data['stripe_encryption_key']);
			unset($this->session->data['stripe_encryption_key']);
			$api_info = json_decode(base64_decode($decrypted_data), true);
		} else {
			$api_info = $this->request->post;
		}
		
		foreach ($api_info as $key => $value) {
			if (!in_array($key, array('account_id', 'refresh_token', 'live_publishable_key', 'live_access_token', 'test_publishable_key', 'test_access_token'))) {
				continue;
			}
			
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code` = '" . $this->db->escape($prefix . $this->name) . "' AND `key` = '" . $this->db->escape($prefix . $this->name . '_' . $key) . "'");
			$this->db->query("
				INSERT INTO " . DB_PREFIX . "setting SET
				`store_id` = 0,
				`code` = '" . $this->db->escape($code) . "',
				`key` = '" . $this->db->escape($code . '_' . $key) . "',
				`value` = '" . $this->db->escape($value) . "',
				`serialized` = 0
			");
		}
		
		$this->session->data['connect_success'] = 'Connection complete!';
		
		$token = (version_compare(VERSION, '3.0', '<')) ? 'token=' . $this->session->data['token'] : 'user_token=' . $this->session->data['user_token'];
		$extension_route = (version_compare(VERSION, '4.0', '<')) ? 'extension/' . $this->type . '/' . $this->name : 'extension/' . $this->name . '/' . $this->type . '/' . $this->name;
		
		$this->response->redirect(str_replace('&amp;', '&', $this->url->link($extension_route, $token, 'SSL')));
	}
	
	//==============================================================================
	// subscriptionOrderReport()
	//==============================================================================
	public function subscriptionOrderReport() {
		if (!$this->hasPermission('access')) {
			echo 'PermissionError';
			return;
		}
		
		$data = $this->loadLanguage($this->type . '/' . $this->name);
		$output = '
			<div id="content" style="padding: 20px">
				<div class="page-header" style="margin-top: 0">
					<h1>' . $data['heading_subscription_order_report'] . '</h1>
					<a class="btn btn-default btn-light" style="float: right" onclick="history.back()"><i class="fa fa-reply pad-right-sm"></i> ' . $data['button_back'] . '</a>
				</div>
				<table class="table table-bordered" style="background: white">
					<thead>
						<tr>
							<td class="text-right">' . $data['column_order_id'] . '</td>
							<td class="text-left">' . $data['column_customer'] . '</td>
							<td class="text-left">' . $data['column_status'] . '</td>
							<td class="text-right">' . $data['column_total'] . '</td>
							<td class="text-left">' . $data['column_date_added'] . '</td>
							<td class="text-left">' . $data['column_date_modified'] . '</td>
							<td class="text-right">' . $data['column_action'] . '</td>
						</tr>
					</thead>
					<tbody>
		';
		
		$order_history_query = $this->db->query("SELECT *, o.date_added AS date_added, os.name AS order_status FROM `" . DB_PREFIX . "order` o LEFT JOIN " . DB_PREFIX. "order_history oh ON (o.order_id = oh.order_id) LEFT JOIN " . DB_PREFIX . "order_status os ON (os.order_status_id = o.order_status_id) WHERE oh.comment LIKE '%Subscribed to Plan%' AND o.order_status_id > 0 GROUP BY o.order_id ORDER BY o.order_id DESC");
		
		foreach ($order_history_query->rows as $row) {
			if (version_compare(VERSION, '2.0', '<')) {
				$view_link = '<a class="btn btn-primary" href="index.php?route=sale/order/info&token=' . $this->session->data['token'] . '&order_id=' . $row['order_id'] . '">' . $data['text_view'] . '</a>';
			} elseif (version_compare(VERSION, '3.0', '<')) {
				$view_link = '<a class="btn btn-primary" href="index.php?route=sale/order/info&token=' . $this->session->data['token'] . '&order_id=' . $row['order_id'] . '" toggle="tooltip" title="' . $data['button_view'] . '"><i class="fa fa-eye"></i></a>';
			} else {
				$view_link = '<a class="btn btn-primary" href="index.php?route=sale/order/info&user_token=' . $this->session->data['user_token'] . '&order_id=' . $row['order_id'] . '" toggle="tooltip" title="' . $data['button_view'] . '"><i class="fa fa-eye"></i></a>';
			}
			
			$output .= '
				<tr>
						<td class="text-right">' . $row['order_id'] . '</td>
						<td class="text-left">' . $row['firstname'] . ' ' . $row['lastname'] . '</td>
						<td class="text-left">' . $row['order_status'] . '</td>
						<td class="text-right">' . $this->currency->format($row['total'], $row['currency_code']) . '</td>
						<td class="text-left">' . $row['date_added'] . '</td>
						<td class="text-left">' . $row['date_modified'] . '</td>
						<td class="text-right">' . $view_link . '</td>
				</tr>
			';
		}
		
		$output .= '</tbody></table></div>';
		
		echo $this->load->controller('common/header');
		if (version_compare(VERSION, '2.0', '<')) {
			echo '<style type="text/css">td { border: 1px solid #DDD; padding: 10px 20px; }</style>';
		} else {
			echo $this->load->controller('common/column_left');
		}
		echo $output;
		echo $this->load->controller('common/footer');
	}
	
	//==============================================================================
	// curlRequest()
	//==============================================================================
	private function curlRequest($request, $api, $data = array()) {
		if (version_compare(VERSION, '4.0', '<')) {
			$model_file = DIR_CATALOG . 'model/extension/' . $this->type . '/' . $this->name . '.php';
			require_once(class_exists('VQMod') ? \VQMod::modCheck(modification($model_file)) : modification($model_file));
			$frontend_model = new ModelExtensionPaymentStripe($this->registry);
		} elseif (defined('DIR_EXTENSION')) {
			$model_file = DIR_EXTENSION . $this->name . '/catalog/model/' . $this->type . '/' . $this->name . '.php';
			require_once(class_exists('VQMod') ? \VQMod::modCheck($model_file) : $model_file);
			$frontend_model = new \Opencart\Catalog\Model\Extension\Stripe\Payment\Stripe($this->registry);
		}
		
		return $frontend_model->curlRequest($request, $api, $data);
	}
}
?>