<?php
class ControllerExtensionPaymentcodfee extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/codfee');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_codfee', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_none'] = $this->language->get('text_none');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_to'] = $this->language->get('text_to');
		$data['text_percent'] = $this->language->get('text_percent');
		$data['text_amount'] = $this->language->get('text_amount');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_addfee'] = $this->language->get('tab_addfee');
		$data['tab_support'] = $this->language->get('tab_support');

		$data['entry_type'] = $this->language->get('entry_type');
		$data['entry_tax_class'] = $this->language->get('entry_tax_class');
		$data['entry_exclude_shipping'] = $this->language->get('entry_exclude_shipping');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_quantity'] = $this->language->get('entry_quantity');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_fee'] = $this->language->get('entry_fee');
		$data['entry_from'] = $this->language->get('entry_from');
		$data['entry_to'] = $this->language->get('entry_to');


		$data['help_total'] = $this->language->get('help_total');
		$data['help_type'] = $this->language->get('help_type');
		$data['help_exclude_shipping'] = $this->language->get('help_exclude_shipping');
		$data['help_customergroups'] = $this->language->get('help_customergroups');

		$data['column_addfee'] = $this->language->get('column_addfee');
		$data['column_rules'] = $this->language->get('column_rules');
		$data['column_customergroups'] = $this->language->get('column_customergroups');
		$data['column_totalvalue'] = $this->language->get('column_totalvalue');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_codfee_add'] = $this->language->get('button_codfee_add');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/codfee', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/codfee', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_codfee_order_status_id'])) {
			$data['payment_codfee_order_status_id'] = $this->request->post['payment_codfee_order_status_id'];
		} else {
			$data['payment_codfee_order_status_id'] = $this->config->get('payment_codfee_order_status_id');
		}

		if (isset($this->request->post['payment_codfee_geo_zone_id'])) {
			$data['payment_codfee_geo_zone_id'] = $this->request->post['payment_codfee_geo_zone_id'];
		} else {
			$data['payment_codfee_geo_zone_id'] = $this->config->get('payment_codfee_geo_zone_id');
		}

		if (isset($this->request->post['payment_codfee_status'])) {
			$data['payment_codfee_status'] = $this->request->post['payment_codfee_status'];
		} else {
			$data['payment_codfee_status'] = $this->config->get('payment_codfee_status');
		}

		if (isset($this->request->post['payment_codfee_tax_class_id'])) {
			$data['payment_codfee_tax_class_id'] = $this->request->post['payment_codfee_tax_class_id'];
		} else {
			$data['payment_codfee_tax_class_id'] = $this->config->get('payment_codfee_tax_class_id');
		}

		if (isset($this->request->post['payment_codfee_type'])) {
			$data['payment_codfee_type'] = $this->request->post['payment_codfee_type'];
		} else {
			$data['payment_codfee_type'] = $this->config->get('payment_codfee_type');
		}

		if (isset($this->request->post['payment_codfee_sort_order'])) {
			$data['payment_codfee_sort_order'] = $this->request->post['payment_codfee_sort_order'];
		} else {
			$data['payment_codfee_sort_order'] = $this->config->get('payment_codfee_sort_order');
		}

		if (isset($this->request->post['payment_codfee_total'])) {
			$data['payment_codfee_totals'] = $this->request->post['payment_codfee_total'];
		} else {
			$data['payment_codfee_totals'] = (array)$this->config->get('payment_codfee_total');
		}

		if (isset($this->request->post['payment_codfee_exclude_shipping'])) {
			$data['payment_codfee_exclude_shipping'] = $this->request->post['payment_codfee_exclude_shipping'];
		} else {
			$data['payment_codfee_exclude_shipping'] = (array)$this->config->get('payment_codfee_exclude_shipping');
		}

		$this->load->model('localisation/tax_class');
		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		$this->load->model('localisation/geo_zone');
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		$this->load->model('localisation/order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$this->load->model('customer/customer_group');
		$data['customergroups'] = $this->model_customer_customer_group->getCustomerGroups();

		$this->load->model('setting/extension');
		$shippingmethods = $this->model_setting_extension->getInstalled('shipping');

		$data['shippingmethods'] = array();
		foreach ($shippingmethods as $shippingmethod) {
			if ($this->config->get('shipping_' . $shippingmethod . '_status')) {
				$this->load->language('extension/shipping/'.$shippingmethod);
				$data['shippingmethods'][] = array(
					'code' => $shippingmethod,
					'name' => $this->language->get('heading_title'),
				);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->config->set('template_engine', 'template');
		$this->response->setOutput($this->load->view('extension/payment/codfee', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/codfee')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}