<?php
set_time_limit(0);

ini_set('memory_limit', '999M');
ini_set('set_time_limit', '0');

class ControllerExporterOrderpro extends Controller {
	private $error = [];
	private $oc_model_path = [];
	private $oc_extensions_prefix = [];
	public function __construct($registry) {
		$registry->get('load')->library('mpalphanumexcel');
		parent :: __construct($registry);

		if (VERSION >= '3.0.0.0') {

			// model path to get installed installatoions
			$this->oc_model_path['extensions'] = [
				'path' => 'setting/extension',
				'obj' => 'model_setting_extension'
			];

			$this->oc_extensions_prefix['module'] = 'module_';
			$this->oc_extensions_prefix['payment'] = 'payment_';
			$this->oc_extensions_prefix['shipping'] = 'shipping_';

		} else {
			// model path to get installed installatoions
			$this->oc_model_path['extensions'] = [
				'path' => 'extension/extension',
				'obj' => 'model_extension_extension'
			];

			$this->oc_extensions_prefix['module'] = '';
			$this->oc_extensions_prefix['payment'] = '';
			$this->oc_extensions_prefix['shipping'] = '';
		}

		if (VERSION > '2.0.3.1') {
			$this->oc_model_path['customer_group'] = [
				'path' => 'customer/customer_group',
				'obj' => 'model_customer_customer_group'
			];
		} else{
			$this->oc_model_path['customer_group'] = [
				'path' => 'sale/customer_group',
				'obj' => 'model_sale_customer_group'
			];
		}

	}

	public function getMenu() {
		$this->load->language('exporter/orderpro_menu');
		$menu = [];
		if ($this->user->hasPermission('access', 'exporter/orderpro')) {
			$menu = [
				'name'	   => $this->language->get('text_orderpro_exporter'),
				'href'     => $this->url->link('exporter/orderpro', 'user_token=' . $this->session->data['user_token'], true),
				'children' => []
			];
		}
		return $menu;
	}

	public function index() {
		$this->load->language('exporter/orderpro');

		$this->load->model('exporter/orderpro');

		$this->document->addStyle('view/stylesheet/modulepoints/exportorderpro.css');
		$this->document->addStyle('view/javascript/bootstrap_select/css/bootstrap-select.css');
		$this->document->addScript('view/javascript/bootstrap_select/js/bootstrap-select.js');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('exporter/orderpro', 'user_token=' . $this->session->data['user_token'], true)
		];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['text_none'] = $this->language->get('text_none');
		$data['text_list'] = $this->language->get('text_list');
		$data['text_missing'] = $this->language->get('text_missing');
		$data['text_all'] = $this->language->get('text_all');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_xls'] = $this->language->get('text_xls');
		$data['text_xlsx'] = $this->language->get('text_xlsx');
		$data['text_csv'] = $this->language->get('text_csv');
		$data['text_xml'] = $this->language->get('text_xml');
		$data['text_json'] = $this->language->get('text_json');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_customer'] = $this->language->get('text_customer');
		$data['text_order_status'] = $this->language->get('text_order_status');
		$data['text_date_added'] = $this->language->get('text_date_added');
		$data['text_date_modified'] = $this->language->get('text_date_modified');
		$data['text_total'] = $this->language->get('text_total');
		$data['text_asc'] = $this->language->get('text_asc');
		$data['text_desc'] = $this->language->get('text_desc');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_order_id'] = $this->language->get('text_order_id');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');
		$data['text_filters_note'] = $this->language->get('text_filters_note');
		$data['text_fill_sort_orders'] = $this->language->get('text_fill_sort_orders');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['entry_order_id'] = $this->language->get('entry_order_id');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_date_start'] = $this->language->get('entry_date_start');
		$data['entry_date_end'] = $this->language->get('entry_date_end');
		$data['entry_limit_start'] = $this->language->get('entry_limit_start');
		$data['entry_limit_end'] = $this->language->get('entry_limit_end');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_payment_method'] = $this->language->get('entry_payment_method');
		$data['entry_shipping_method'] = $this->language->get('entry_shipping_method');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_order_fields'] = $this->language->get('entry_order_fields');
		$data['entry_format'] = $this->language->get('entry_format');
		$data['entry_orderdetail'] = $this->language->get('entry_orderdetail');
		$data['entry_customerdetail'] = $this->language->get('entry_customerdetail');
		$data['entry_ordertotals'] = $this->language->get('entry_ordertotals');
		$data['entry_orderproducts'] = $this->language->get('entry_orderproducts');
		$data['entry_orderoptions'] = $this->language->get('entry_orderoptions');
		$data['entry_paymentaddress'] = $this->language->get('entry_paymentaddress');
		$data['entry_shippingaddress'] = $this->language->get('entry_shippingaddress');
		$data['entry_customfields'] = $this->language->get('entry_customfields');
		$data['entry_totals'] = $this->language->get('entry_totals');
		$data['entry_productdetail'] = $this->language->get('entry_productdetail');
		$data['entry_voucherdetail'] = $this->language->get('entry_voucherdetail');
		$data['entry_sort'] = $this->language->get('entry_sort');
		$data['entry_order'] = $this->language->get('entry_order');
		$data['entry_payment_country'] = $this->language->get('entry_payment_country');
		$data['entry_payment_zone'] = $this->language->get('entry_payment_zone');
		$data['entry_payment_city'] = $this->language->get('entry_payment_city');
		$data['entry_payment_postcode'] = $this->language->get('entry_payment_postcode');
		$data['entry_invoice_prefix'] = $this->language->get('entry_invoice_prefix');
		$data['entry_invoice'] = $this->language->get('entry_invoice');
		$data['entry_shipping_country'] = $this->language->get('entry_shipping_country');
		$data['entry_shipping_zone'] = $this->language->get('entry_shipping_zone');
		$data['entry_shipping_city'] = $this->language->get('entry_shipping_city');
		$data['entry_shipping_postcode'] = $this->language->get('entry_shipping_postcode');
		$data['entry_language'] = $this->language->get('entry_language');
		$data['entry_currency'] = $this->language->get('entry_currency');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');


		$data['help_order_id'] = $this->language->get('help_order_id');
		$data['help_order_total'] = $this->language->get('help_order_total');
		$data['help_customer'] = $this->language->get('help_customer');
		$data['help_format'] = $this->language->get('help_format');
		$data['help_orderdetail'] = $this->language->get('help_orderdetail');
		$data['help_customerdetail'] = $this->language->get('help_customerdetail');
		$data['help_ordertotals'] = $this->language->get('help_ordertotals');
		$data['help_orderproducts'] = $this->language->get('help_orderproducts');
		$data['help_orderoptions'] = $this->language->get('help_orderoptions');
		$data['help_paymentaddress'] = $this->language->get('help_paymentaddress');
		$data['help_shippingaddress'] = $this->language->get('help_shippingaddress');
		$data['help_customfields'] = $this->language->get('help_customfields');
		$data['help_totals'] = $this->language->get('help_totals');
		$data['help_productdetail'] = $this->language->get('help_productdetail');
		$data['help_voucherdetail'] = $this->language->get('help_voucherdetail');
		$data['help_payment_method'] = $this->language->get('help_payment_method');
		$data['help_shipping_method'] = $this->language->get('help_shipping_method');
		$data['help_order_limit'] = $this->language->get('help_order_limit');
		$data['help_customfields'] = $this->language->get('help_customfields');
		$data['help_product'] = $this->language->get('help_product');
		$data['help_customer'] = $this->language->get('help_customer');
		$data['help_extra_field'] = $this->language->get('help_extra_field');
		$data['help_format'] = $this->language->get('help_format');
		$data['help_order_fields'] = $this->language->get('help_order_fields');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_support'] = $this->language->get('tab_support');

		$data['button_advance_filter'] = $this->language->get('button_advance_filter');
		$data['button_export'] = $this->language->get('button_export');
		$data['button_save'] = $this->language->get('button_save');

		$data['exporter_action'] = $this->url->link('exporter/orderpro/export', 'user_token=' . $this->session->data['user_token'], true);

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('setting/store');
		$this->load->model('localisation/order_status');
		$this->load->model('localisation/country');
		$this->load->model('localisation/language');
		$this->load->model('localisation/currency');

		$data['countries'] = $this->model_localisation_country->getCountries();
		$data['stores'] = $this->model_setting_store->getStores();
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['currencies'] = $this->model_localisation_currency->getCurrencies();

		$this->load->model($this->oc_model_path['extensions']['path']);
		$language = new Language($this->config->get('language_default'));
		$language->load($this->config->get('language_default'));
		$payment_methods = $this->{$this->oc_model_path['extensions']['obj']}->getInstalled('payment');

		$data['payment_methods'] = [];
		foreach ($payment_methods as $payment_method) {

			if ($this->config->get($this->oc_extensions_prefix['payment'] . $payment_method . '_status')) {
				$language->load('extension/payment/'.$payment_method);
				$data['payment_methods'][] = [
					'code' => $payment_method,
					'heading_title' => $language->get('heading_title')
				];
			}
		}

		$shipping_methods = $this->{$this->oc_model_path['extensions']['obj']}->getInstalled('shipping');
		$data['shipping_methods'] = [];
		foreach ($shipping_methods as $shipping_method) {
			if ($this->config->get($this->oc_extensions_prefix['shipping'] . $shipping_method . '_status')) {
				$language->load('extension/shipping/'.$shipping_method);
				$data['shipping_methods'][] = [
					'code' => $shipping_method,
					'heading_title' => $language->get('heading_title')
				];
			}
		}

		$this->load->model($this->oc_model_path['customer_group']['path']);
		$data['customer_groups'] = $this->{$this->oc_model_path['customer_group']['obj']}->getCustomerGroups();

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['orderpro_setting_fields'])) {
			$data['orderpro_setting_fields'] = $this->request->post['orderpro_setting_fields'];
		} else {
			$data['orderpro_setting_fields'] = (array)$this->config->get('orderpro_setting_fields');
		}

		foreach ($data['orderpro_setting_fields'] as $key => $value) {
			$data['orderpro_setting_fields'][$key]['alphabet'] = '';
			if ((int)$value['sort_order'] > 0) {
				$data['orderpro_setting_fields'][$key]['alphabet'] = $this->mpalphanumexcel->numberToAlphabet((int)$value['sort_order']);
			}
		}

		$data['find_fields'] = $this->getFindFields();

		// $data['find_fields'] = array_chunk($data['find_fields'], 17);
		// $data['find_fields'] = array_chunk($data['find_fields'], 3);

		// https://www.php.net/manual/en/function.range.php
		// $data['alphabets'] = range('A', 'Z');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('exporter/orderpro', $data));
	}

	protected function getFindFields() {
		$i = 1;
		$find_fields = [];
		$find_fields[] = [
			'code'		=> 'order_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_order_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;

		$find_fields[] = [
			'code'		=> 'invoice_prefix',
			'help'		=> '',
			'title'		=> $this->language->get('find_invoice_prefix'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'invoice_no',
			'help'		=> '',
			'title'		=> $this->language->get('find_invoice_no'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'store_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_store_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'store_name',
			'help'		=> '',
			'title'		=> $this->language->get('find_store_name'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'store_url',
			'help'		=> '',
			'title'		=> $this->language->get('find_store_url'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_name',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_name'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_model',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_model'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_price',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_price'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_quantity',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_quantity'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_total_price',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_total_price'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_tax',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_tax'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_reward',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_reward'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'product_option',
			'help'		=> '',
			'title'		=> $this->language->get('find_product_option'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'voucher',
			'help'		=> '',
			'title'		=> $this->language->get('find_voucher'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'order_total',
			'help'		=> '',
			'title'		=> $this->language->get('find_order_total'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;

		$find_fields[] = [
			'code'		=> 'total',
			'help'		=> '',
			'title'		=> $this->language->get('find_order_total_variable'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'order_status',
			'help'		=> '',
			'title'		=> $this->language->get('find_order_status'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'customer_name',
			'help'		=> '',
			'title'		=> $this->language->get('find_customer_name'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'customer_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_customer_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'firstname',
			'help'		=> '',
			'title'		=> $this->language->get('find_firstname'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'lastname',
			'help'		=> '',
			'title'		=> $this->language->get('find_lastname'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'email',
			'help'		=> '',
			'title'		=> $this->language->get('find_email'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'telephone',
			'help'		=> '',
			'title'		=> $this->language->get('find_telephone'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'fax',
			'help'		=> '',
			'title'		=> $this->language->get('find_fax'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'comment',
			'help'		=> '',
			'title'		=> $this->language->get('find_comment'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'custom_field',
			'help'		=> '',
			'title'		=> $this->language->get('find_custom_field'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_firstname',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_firstname'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_lastname',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_lastname'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_company',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_company'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_address_1',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_address_1'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_address_2',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_address_2'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_city',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_city'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_postcode',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_postcode'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_country',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_country'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_country_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_country_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_zone',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_zone'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_zone_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_zone_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_method',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_method'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_custom_field',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_custom_field'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'shipping_code',
			'help'		=> '',
			'title'		=> $this->language->get('find_shipping_code'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_firstname',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_firstname'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_lastname',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_lastname'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_company',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_company'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_address_1',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_address_1'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_address_2',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_address_2'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_city',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_city'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_postcode',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_postcode'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_country',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_country'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_country_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_country_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_zone',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_zone'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_zone_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_zone_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_method',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_method'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_custom_field',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_custom_field'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'payment_code',
			'help'		=> '',
			'title'		=> $this->language->get('find_payment_code'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'affiliate_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_affiliate_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'commission',
			'help'		=> '',
			'title'		=> $this->language->get('find_commission'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'tracking',
			'help'		=> '',
			'title'		=> $this->language->get('find_tracking'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'language_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_language_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'currency_id',
			'help'		=> '',
			'title'		=> $this->language->get('find_currency_id'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'currency_code',
			'help'		=> '',
			'title'		=> $this->language->get('find_currency_code'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'currency_value',
			'help'		=> '',
			'title'		=> $this->language->get('find_currency_value'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'ip_address',
			'help'		=> '',
			'title'		=> $this->language->get('find_ip_address'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'forwarded_ip',
			'help'		=> '',
			'title'		=> $this->language->get('find_forwarded_ip'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'user_agent',
			'help'		=> '',
			'title'		=> $this->language->get('find_user_agent'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'accept_language',
			'help'		=> '',
			'title'		=> $this->language->get('find_accept_language'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'date_added',
			'help'		=> '',
			'title'		=> $this->language->get('find_date_added'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;
		$find_fields[] = [
			'code'		=> 'date_modified',
			'help'		=> '',
			'title'		=> $this->language->get('find_date_modified'),
			'sort_order' => $i,
			'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
		];$i++;

		$extrafields = $this->model_exporter_orderpro->getExtraFields();

		foreach ($extrafields as $key => $value) {
			foreach ($value['fields'] as $key1 => $field) {
				$find_fields[] = [
					'code'		=> $value['tablename'] . '__' . $field,
					'help'		=> $this->language->get('help_extra_field'),
					'title'		=> $this->language->get('entry_extra_field') . ' :: ' . $value['title'] . ' . ' . $field,
					'sort_order' => $i,
					'alphabet' => $this->mpalphanumexcel->numberToAlphabet($i),
				];$i++;
			}
		}
		return $find_fields;
	}

	// Order Export Function
	public function export() {
		$json = [];

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->accessValidate()) {

		$this->load->language('exporter/orderpro');
		$this->load->model('exporter/orderpro');
		$this->load->model('sale/order');
		$this->load->model('tool/upload');

		$filter_data = [
			'sort'  => 'cf.sort_order',
			'order' => 'ASC'
		];

		if (VERSION > '2.0.3.1') {
			$this->load->model('customer/custom_field');
			$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);
		} else {
			$this->load->model('sale/custom_field');
			$custom_fields = $this->model_sale_custom_field->getCustomFields($filter_data);
		}

		if (isset($this->request->post['find_order_id']) && $this->request->post['find_order_id'] != '') {
			$find_order_id = $this->request->post['find_order_id'];
		}else{
			$find_order_id = null;
		}

		if (isset($this->request->post['find_total']) && $this->request->post['find_total'] != '') {
			$find_total = $this->request->post['find_total'];
		}else{
			$find_total = null;
		}

		if (isset($this->request->post['find_order_status']) && $this->request->post['find_order_status'] != '') {
			$find_order_status = $this->request->post['find_order_status'];
		}else{
			$find_order_status = null;
		}

		if (isset($this->request->post['find_customer_group']) && $this->request->post['find_customer_group'] != '') {
			$find_customer_group = $this->request->post['find_customer_group'];
		}else{
			$find_customer_group = null;
		}


		if (isset($this->request->post['find_date_start']) && $this->request->post['find_date_start'] != '') {
			$find_date_start = $this->request->post['find_date_start'];
		}else{
			$find_date_start = '';
		}

		if (isset($this->request->post['find_date_end']) && $this->request->post['find_date_end'] != '') {
			$find_date_end = $this->request->post['find_date_end'];
		}else{
			$find_date_end = '';
		}

		if (isset($this->request->post['find_limit_start']) && $this->request->post['find_limit_start'] != '') {
			$find_limit_start = $this->request->post['find_limit_start'];
		}else{
			$find_limit_start = '';
		}

		if (isset($this->request->post['find_limit_end']) && $this->request->post['find_limit_end'] != '') {
			$find_limit_end = $this->request->post['find_limit_end'];
		}else{
			$find_limit_end = '';
		}

		if (isset($this->request->post['find_payment_method']) && !empty($this->request->post['find_payment_method'])) {
			$find_payment_method = (array)$this->request->post['find_payment_method'];
		}else{
			$find_payment_method = [];
		}

		if (isset($this->request->post['find_shipping_method']) && !empty($this->request->post['find_shipping_method'])) {
			$find_shipping_method = (array)$this->request->post['find_shipping_method'] ;
		}else{
			$find_shipping_method = [];
		}

		if (isset($this->request->post['find_store_id']) && $this->request->post['find_store_id'] != '') {
			$find_store_id = $this->request->post['find_store_id'];
		}else{
			$find_store_id = null;
		}

		if (isset($this->request->post['find_product']) && $this->request->post['find_product'] != '') {
			$find_product = $this->request->post['find_product'];
		}else{
			$find_product = null;
		}

		if (isset($this->request->post['find_customer']) && $this->request->post['find_customer'] != '') {
			$find_customer = $this->request->post['find_customer'];
		}else{
			$find_customer = null;
		}

		if (isset($this->request->post['find_payment_country_id']) && $this->request->post['find_payment_country_id'] != '') {
			$find_payment_country_id = $this->request->post['find_payment_country_id'];
		}else{
			$find_payment_country_id = null;
		}

		if (isset($this->request->post['find_payment_zone_id']) && $this->request->post['find_payment_zone_id'] != '') {
			$find_payment_zone_id = $this->request->post['find_payment_zone_id'];
		}else{
			$find_payment_zone_id = null;
		}

		if (isset($this->request->post['find_payment_postcode']) && $this->request->post['find_payment_postcode'] != '') {
			$find_payment_postcode = $this->request->post['find_payment_postcode'];
		}else{
			$find_payment_postcode = null;
		}

		if (isset($this->request->post['find_shipping_country_id']) && $this->request->post['find_shipping_country_id'] != '') {
			$find_shipping_country_id = $this->request->post['find_shipping_country_id'];
		}else{
			$find_shipping_country_id = null;
		}

		if (isset($this->request->post['find_shipping_zone_id']) && $this->request->post['find_shipping_zone_id'] != '') {
			$find_shipping_zone_id = $this->request->post['find_shipping_zone_id'];
		}else{
			$find_shipping_zone_id = null;
		}

		if (isset($this->request->post['find_shipping_postcode']) && $this->request->post['find_shipping_postcode'] != '') {
			$find_shipping_postcode = $this->request->post['find_shipping_postcode'];
		}else{
			$find_shipping_postcode = null;
		}

		if (isset($this->request->post['find_language_id']) && $this->request->post['find_language_id'] != '') {
			$find_language_id = $this->request->post['find_language_id'];
		}else{
			$find_language_id = null;
		}

		if (isset($this->request->post['find_currency_id']) && $this->request->post['find_currency_id'] != '') {
			$find_currency_id = $this->request->post['find_currency_id'];
		}else{
			$find_currency_id = null;
		}

		if (isset($this->request->post['find_invoice_prefix']) && $this->request->post['find_invoice_prefix'] != '') {
			$find_invoice_prefix = $this->request->post['find_invoice_prefix'];
		}else{
			$find_invoice_prefix = null;
		}

		if (isset($this->request->post['find_invoice']) && $this->request->post['find_invoice'] != '') {
			$find_invoice = $this->request->post['find_invoice'];
		}else{
			$find_invoice = null;
		}

		if (!empty($this->request->post['orderpro_setting_fields'])) {
			$find_fields = (array)$this->request->post['orderpro_setting_fields'];
		}else{
			$find_fields = [];
		}

		foreach ($find_fields as $code => $value) {
			$find_fields[$code]['alphabet'] = $this->mpalphanumexcel->numberToAlphabet($value['sort_order']);
		}

		$find_extrafields = [];
		$extrafields = $this->model_exporter_orderpro->getExtraFields();

		foreach ($extrafields as $key => $value) {
			foreach ($value['fields'] as $key1 => $field) {
				if (isset($find_fields[$value['tablename'] . '__' . $field])) {
					$find_extrafields[$value['tablename'] . '__' . $field] = $find_fields[$value['tablename'] . '__' . $field];
					$find_extrafields[$value['tablename'] . '__' . $field]['title'] = $value['title'] ." :: ". $value['tablename'] .".". $field;
					$find_extrafields[$value['tablename'] . '__' . $field]['field'] = $field;
					$find_extrafields[$value['tablename'] . '__' . $field]['tablename'] = $value['tablename'];
					// $this->language->get('entry_extra_field') . ' :: ' . $value['title'] . ' . ' . $field
				}
			}
		}

		if (isset($this->request->post['find_format']) && $this->request->post['find_format'] != '') {
			$find_format = in_array($this->request->post['find_format'], ['csv','xls','xlsx','json','xml']) ? $this->request->post['find_format'] : 'xlsx';
		}else{
			$find_format = 'xlsx';
		}

		if (!empty($this->request->post['find_sort'])) {
			$find_sort = $this->request->post['find_sort'];
		}else{
			$find_sort = 'o.order_id';
		}

		if (!empty($this->request->post['find_order'])) {
			$find_order = $this->request->post['find_order'];
		}else{
			$find_order = 'DESC';
		}

		if ($find_fields) {
			$valid = true;
		}else{
			$valid = false;
		}

		// validate select fields must have sort order and sort order should not conflict with order field, if so retunr error msg and highlight them

		$sorts_alphabets = [];
		foreach ($find_fields as $code => $value) {
			if (empty($value['sort_order'])) {
				$json['sort_order'][] = $code;
			}
			// valide sort order
			if (in_array($value['sort_order'], $sorts_alphabets)) {
				$json['sort_order'][] = $code;
			}
			$sorts_alphabets[] = $value['sort_order'];
		}

		if (!empty($json['sort_order'])) {
			$valid = false;
			$json['error']['warning'] = $this->language->get('error_incorrect_sortorder');
		}


		if ($valid) {
			$filter_data = [
				'find_order_id'						=> $find_order_id,
				'find_total'							=> $find_total,
				'find_order_status'				=> $find_order_status,
				'find_customer_group'			=> $find_customer_group,
				'find_date_start'				=> $find_date_start,
				'find_date_end'					=> $find_date_end,
				'find_limit_start'				=> $find_limit_start,
				'find_limit_end'				=> $find_limit_end,
				'find_payment_method'			=> $find_payment_method,
				'find_shipping_method'			=> $find_shipping_method,
				'find_store_id'						=> $find_store_id,
				'find_product'						=> $find_product,
				'find_customer'						=> $find_customer,
				'find_payment_country_id'			=> $find_payment_country_id,
				'find_payment_zone_id'				=> $find_payment_zone_id,
				'find_payment_postcode'				=> $find_payment_postcode,
				'find_shipping_country_id'			=> $find_shipping_country_id,
				'find_shipping_zone_id'				=> $find_shipping_zone_id,
				'find_shipping_postcode'			=> $find_shipping_postcode,
				'find_language_id'					=> $find_language_id,
				'find_currency_id'					=> $find_currency_id,
				'find_invoice_prefix'				=> $find_invoice_prefix,
				'find_invoice'						=> $find_invoice,
				'find_extrafields'				=> $find_extrafields,
				'find_format'							=> $find_format,
				'find_sort'								=> $find_sort,
				'find_order'							=> $find_order,
			];

		$results = $this->model_exporter_orderpro->getOrders($filter_data);

		if (in_array($find_format, ['csv','xls','xlsx'])) {

			// print_r($find_fields);die;

			require_once(DIR_SYSTEM.'library/PHPExcel.php');
			$objPHPExcel = new PHPExcel();

			$objPHPExcel->setActiveSheetIndex(0);

			$objPHPExcel->getProperties()
			    ->setCreator("Module Points")
			    ->setLastModifiedBy("Module Points")
			    ->setTitle("Order Export Pro Suite")
			    ->setSubject("Order Export Pro Suite by ". $this->user->getUserName())
			    ->setDescription("Order export Pro suite is suitable to take products backup in popular method (Excel File) export")
			    ->setKeywords("order export Pro suite")
			    ->setCategory("Order Export Pro");


				$i = 1;
				$char = 'A';

				$objPHPExcel->getActiveSheet()->getStyle('1')->getFill()->applyFromArray([
					'type'				=> PHPExcel_Style_Fill::FILL_SOLID,
					'startcolor' 	=> [
					'rgb' 				=> '017FBE',
					],
				]);

				$objPHPExcel->getActiveSheet()->getStyle('1')->applyFromArray([
					'font'  => [
					'color' => ['rgb' => 'FFFFFF'],
					'bold'  => true,
					]
				]);

				$objPHPExcel->getActiveSheet()->freezePane('D2');
//

				if (isset($find_fields['order_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['order_id']['alphabet'] .$i, $this->language->get('export_order_id'))->getColumnDimension($find_fields['order_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['order_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['invoice_prefix']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['invoice_prefix']['alphabet'] .$i, $this->language->get('export_invoice_prefix'))->getColumnDimension($find_fields['invoice_prefix']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['invoice_prefix']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['invoice_no']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['invoice_no']['alphabet'] .$i, $this->language->get('export_invoice_no'))->getColumnDimension($find_fields['invoice_no']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['invoice_no']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['store_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['store_id']['alphabet'] .$i, $this->language->get('export_store_id'))->getColumnDimension($find_fields['store_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['store_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['store_name']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['store_name']['alphabet'] .$i, $this->language->get('export_store_name'))->getColumnDimension($find_fields['store_name']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['store_name']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['store_url']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['store_url']['alphabet'] .$i, $this->language->get('export_store_url'))->getColumnDimension($find_fields['store_url']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['store_url']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_id']['alphabet'] .$i, $this->language->get('export_product_id'))->getColumnDimension($find_fields['product_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_name']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_name']['alphabet'] .$i, $this->language->get('export_product_name'))->getColumnDimension($find_fields['product_name']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_name']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_model']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_model']['alphabet'] .$i, $this->language->get('export_product_model'))->getColumnDimension($find_fields['product_model']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_model']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_price']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_price']['alphabet'] .$i, $this->language->get('export_product_price'))->getColumnDimension($find_fields['product_price']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_price']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_quantity']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_quantity']['alphabet'] .$i, $this->language->get('export_product_quantity'))->getColumnDimension($find_fields['product_quantity']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_quantity']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_total_price']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_total_price']['alphabet'] . $i, $this->language->get('export_product_total_price'))->getColumnDimension($find_fields['product_total_price']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_total_price']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_tax']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_tax']['alphabet'] . $i, $this->language->get('export_product_tax'))->getColumnDimension($find_fields['product_tax']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_tax']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_reward']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_reward']['alphabet'] . $i, $this->language->get('export_product_reward'))->getColumnDimension($find_fields['product_reward']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_reward']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['product_option']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_option']['alphabet'] . $i, $this->language->get('export_product_option'))->getColumnDimension($find_fields['product_option']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['product_option']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['voucher']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['voucher']['alphabet'] . $i, $this->language->get('export_order_vouchers'))->getColumnDimension($find_fields['voucher']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['voucher']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['order_total']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['order_total']['alphabet'] . $i, $this->language->get('export_order_total'))->getColumnDimension($find_fields['order_total']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['order_total']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['total']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['total']['alphabet'] . $i, $this->language->get('export_order_total_variable'))->getColumnDimension($find_fields['total']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['total']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['order_status']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['order_status']['alphabet'] . $i, $this->language->get('export_order_status'))->getColumnDimension($find_fields['order_status']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['order_status']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['customer_name']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['customer_name']['alphabet'] . $i, $this->language->get('export_customer_name'))->getColumnDimension($find_fields['customer_name']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['customer_name']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['customer_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['customer_id']['alphabet'] . $i, $this->language->get('export_customer_id'))->getColumnDimension($find_fields['customer_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['customer_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['firstname']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['firstname']['alphabet'] . $i, $this->language->get('export_firstname'))->getColumnDimension($find_fields['firstname']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['firstname']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['lastname']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['lastname']['alphabet'] . $i, $this->language->get('export_lastname'))->getColumnDimension($find_fields['lastname']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['lastname']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['email']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['email']['alphabet'] . $i, $this->language->get('export_email'))->getColumnDimension($find_fields['email']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['email']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['telephone']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['telephone']['alphabet'] . $i, $this->language->get('export_telephone'))->getColumnDimension($find_fields['telephone']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['telephone']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['fax']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['fax']['alphabet'] . $i, $this->language->get('export_fax'))->getColumnDimension($find_fields['fax']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['fax']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['comment']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['comment']['alphabet'] . $i, $this->language->get('export_comment'))->getColumnDimension($find_fields['comment']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['comment']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['custom_field']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['custom_field']['alphabet'] . $i, $this->language->get('export_custom_field'))->getColumnDimension($find_fields['custom_field']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['custom_field']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_firstname']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_firstname']['alphabet'] . $i, $this->language->get('export_shipping_firstname'))->getColumnDimension($find_fields['shipping_firstname']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_firstname']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_lastname']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_lastname']['alphabet'] . $i, $this->language->get('export_shipping_lastname'))->getColumnDimension($find_fields['shipping_lastname']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_lastname']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_company']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_company']['alphabet'] . $i, $this->language->get('export_shipping_company'))->getColumnDimension($find_fields['shipping_company']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_company']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_address_1']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_address_1']['alphabet'] . $i, $this->language->get('export_shipping_address_1'))->getColumnDimension($find_fields['shipping_address_1']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_address_1']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_address_2']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_address_2']['alphabet'] . $i, $this->language->get('export_shipping_address_2'))->getColumnDimension($find_fields['shipping_address_2']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_address_2']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_city']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_city']['alphabet'] . $i, $this->language->get('export_shipping_city'))->getColumnDimension($find_fields['shipping_city']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_city']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_postcode']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_postcode']['alphabet'] . $i, $this->language->get('export_shipping_postcode'))->getColumnDimension($find_fields['shipping_postcode']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_postcode']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_country']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_country']['alphabet'] . $i, $this->language->get('export_shipping_country'))->getColumnDimension($find_fields['shipping_country']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_country']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_country_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_country_id']['alphabet'] . $i, $this->language->get('export_shipping_country_id'))->getColumnDimension($find_fields['shipping_country_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_country_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_zone']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_zone']['alphabet'] . $i, $this->language->get('export_shipping_zone'))->getColumnDimension($find_fields['shipping_zone']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_zone']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_zone_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_zone_id']['alphabet'] . $i, $this->language->get('export_shipping_zone_id'))->getColumnDimension($find_fields['shipping_zone_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_zone_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_method']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_method']['alphabet'] . $i, $this->language->get('export_shipping_method'))->getColumnDimension($find_fields['shipping_method']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_method']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_code']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_code']['alphabet'] . $i, $this->language->get('export_shipping_code'))->getColumnDimension($find_fields['shipping_code']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_code']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['shipping_custom_field']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_custom_field']['alphabet'] . $i, $this->language->get('export_shipping_custom_field'))->getColumnDimension($find_fields['shipping_custom_field']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['shipping_custom_field']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_firstname']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_firstname']['alphabet'] . $i, $this->language->get('export_payment_firstname'))->getColumnDimension($find_fields['payment_firstname']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_firstname']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_lastname']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_lastname']['alphabet'] . $i, $this->language->get('export_payment_lastname'))->getColumnDimension($find_fields['payment_lastname']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_lastname']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_company']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_company']['alphabet'] . $i, $this->language->get('export_payment_company'))->getColumnDimension($find_fields['payment_company']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_company']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_address_1']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_address_1']['alphabet'] . $i, $this->language->get('export_payment_address_1'))->getColumnDimension($find_fields['payment_address_1']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_address_1']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_address_2']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_address_2']['alphabet'] . $i, $this->language->get('export_payment_address_2'))->getColumnDimension($find_fields['payment_address_2']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_address_2']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_city']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_city']['alphabet'] . $i, $this->language->get('export_payment_city'))->getColumnDimension($find_fields['payment_city']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_city']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_postcode']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_postcode']['alphabet'] . $i, $this->language->get('export_payment_postcode'))->getColumnDimension($find_fields['payment_postcode']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_postcode']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_country']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_country']['alphabet'] . $i, $this->language->get('export_payment_country'))->getColumnDimension($find_fields['payment_country']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_country']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_country_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_country_id']['alphabet'] . $i, $this->language->get('export_payment_country_id'))->getColumnDimension($find_fields['payment_country_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_country_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_zone']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_zone']['alphabet'] . $i, $this->language->get('export_payment_zone'))->getColumnDimension($find_fields['payment_zone']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_zone']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_zone_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_zone_id']['alphabet'] . $i, $this->language->get('export_payment_zone_id'))->getColumnDimension($find_fields['payment_zone_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_zone_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_method']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_method']['alphabet'] . $i, $this->language->get('export_payment_method'))->getColumnDimension($find_fields['payment_method']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_method']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_code']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_code']['alphabet'] . $i, $this->language->get('export_payment_code'))->getColumnDimension($find_fields['payment_code']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_code']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['payment_custom_field']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_custom_field']['alphabet'] . $i, $this->language->get('export_payment_custom_field'))->getColumnDimension($find_fields['payment_custom_field']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['payment_custom_field']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['affiliate_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['affiliate_id']['alphabet'] . $i, $this->language->get('export_affiliate_id'))->getColumnDimension($find_fields['affiliate_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['affiliate_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['commission']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['commission']['alphabet'] . $i, $this->language->get('export_commission'))->getColumnDimension($find_fields['commission']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['commission']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['tracking']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['tracking']['alphabet'] . $i, $this->language->get('export_tracking'))->getColumnDimension($find_fields['tracking']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['tracking']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['language_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['language_id']['alphabet'] . $i, $this->language->get('export_language_id'))->getColumnDimension($find_fields['language_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['language_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['currency_id']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['currency_id']['alphabet'] . $i, $this->language->get('export_currency_id'))->getColumnDimension($find_fields['currency_id']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['currency_id']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['currency_code']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['currency_code']['alphabet'] . $i, $this->language->get('export_currency_code'))->getColumnDimension($find_fields['currency_code']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['currency_code']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['currency_value']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['currency_value']['alphabet'] . $i, $this->language->get('export_currency_value'))->getColumnDimension($find_fields['currency_value']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['currency_value']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['ip_address']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['ip_address']['alphabet'] . $i, $this->language->get('export_ip_address'))->getColumnDimension($find_fields['ip_address']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['ip_address']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['forwarded_ip']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['forwarded_ip']['alphabet'] . $i, $this->language->get('export_forwarded_ip'))->getColumnDimension($find_fields['forwarded_ip']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['forwarded_ip']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['user_agent']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['user_agent']['alphabet'] . $i, $this->language->get('export_user_agent'))->getColumnDimension($find_fields['user_agent']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['user_agent']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['accept_language']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['accept_language']['alphabet'] . $i, $this->language->get('export_accept_language'))->getColumnDimension($find_fields['accept_language']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['accept_language']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['date_added']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['date_added']['alphabet'] . $i, $this->language->get('export_date_added'))->getColumnDimension($find_fields['date_added']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['date_added']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (isset($find_fields['date_modified']['code'])) {
					$objPHPExcel->getActiveSheet()->setCellValue($find_fields['date_modified']['alphabet'] . $i, $this->language->get('export_date_modified'))->getColumnDimension($find_fields['date_modified']['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields['date_modified']['alphabet'] . $i)->getAlignment()->setWrapText(true);
				}

				if (!empty($find_extrafields)) {

					foreach ($find_extrafields as $find_key_extrafield => $find_extrafield) {
						if (isset($find_fields[$find_key_extrafield]['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields[$find_key_extrafield]['alphabet'] . $i, $find_extrafield['title'])->getColumnDimension($find_fields[$find_key_extrafield]['alphabet'])->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($find_fields[$find_key_extrafield]['alphabet'] . $i)->getAlignment()->setWrapText(true);
						}
					}
				}
				if ($results) {
					// Fetch Total Orders
					$objPHPExcel->getActiveSheet()->setTitle(sprintf($this->language->get('export_title'), count($results)));

					foreach ($results as $order_info) {
						$char_value = 'A'; $i++;
						// Assign Cell Values
						if (isset($find_fields['order_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['order_id']['alphabet'] . $i, $order_info['order_id']);
						}

						if (isset($find_fields['invoice_prefix']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['invoice_prefix']['alphabet'] . $i, $order_info['invoice_prefix']);
						}

						if (isset($find_fields['invoice_no']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['invoice_no']['alphabet'] . $i, $order_info['invoice_no']);
						}

						if (isset($find_fields['store_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['store_id']['alphabet'] . $i, $order_info['store_id']);
						}

						if (isset($find_fields['store_name']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['store_name']['alphabet'] . $i, $order_info['store_name']);
						}

						if (isset($find_fields['store_url']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['store_url']['alphabet'] . $i, $order_info['store_url']);
						}

						if (isset($find_fields['product_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_id']['alphabet'] . $i, $order_info['product_id']);
						}

						if (isset($find_fields['product_name']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_name']['alphabet'] . $i, $order_info['product_name']);
						}

						if (isset($find_fields['product_model']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_model']['alphabet'] . $i, $order_info['product_model']);
						}

						if (isset($find_fields['product_price']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_price']['alphabet'] . $i, $this->currency->format($order_info['product_price'], $order_info['currency_code'], $order_info['currency_value']));
						}

						if (isset($find_fields['product_quantity']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_quantity']['alphabet'] . $i, $order_info['product_quantity']);
						}

						if (isset($find_fields['product_total_price']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_total_price']['alphabet'] . $i, $this->currency->format($order_info['product_total_price'], $order_info['currency_code'], $order_info['currency_value']));
						}

						if (isset($find_fields['product_tax']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_tax']['alphabet'] . $i, $this->currency->format($order_info['product_tax'], $order_info['currency_code'], $order_info['currency_value']));
						}

						if (isset($find_fields['product_reward']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_reward']['alphabet'] . $i, $order_info['product_reward']);
						}

						if (isset($find_fields['product_option']['code'])) {
							$order_products_option_data = [];

							$order_options = $this->model_sale_order->getOrderOptions($order_info['order_id'], $order_info['order_product_id']);

							$order_options_data = '';
							$option_row = 1;
							foreach ($order_options as $order_option) {
								if ($option_row == '1') {
									$option_string = $order_info['product_name']. ' >> ';
								} else {
									$option_string = '';
								}

								$order_options_data .= $option_string . $order_option['name'] .' :: '. $order_option['value'];
								if (count($order_options) != $option_row) {
									$order_options_data .= ' || ';
								}

								$option_row++;
							}

							if ($order_options_data) {
								$order_products_option_data[] = $order_options_data;
							}

							if ($order_products_option_data) {
								$order_info['order_products_option_data'] = implode(';; ', $order_products_option_data);
							} else {
								$order_info['order_products_option_data'] = '';
							}

							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['product_option']['alphabet'] . $i, $order_info['order_products_option_data']);
						}

						if (isset($find_fields['voucher']['code'])) {
							$order_vouchers = $this->model_sale_order->getOrderVouchers($order_info['order_id']);
							$order_vouchers_data = [];

							foreach ($order_vouchers as $order_voucher) {
								$order_vouchers_data[] = $order_voucher['code'] .' :: '. $order_voucher['from_name'] .' :: '. $order_voucher['from_email'] .' :: '. $order_voucher['to_name'] .' :: '. $order_voucher['to_email'].' :: '. $order_voucher['message'];
							}

							if ($order_vouchers_data) {
								$order_info['order_vouchers_data'] = implode("; \n", $order_vouchers_data);
							} else{
								$order_info['order_vouchers_data'] = '';
							}

							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['voucher']['alphabet'] . $i, $order_info['order_vouchers_data'])->getColumnDimension($find_fields['voucher']['alphabet'])->setAutoSize(true);
							$objPHPExcel->getActiveSheet()->getStyle($find_fields['voucher']['alphabet'] . $i)->getAlignment()->setWrapText(true);
						}

						// Order Totals Details
						if (isset($find_fields['order_total']['code'])) {
							$order_totals = $this->model_sale_order->getOrderTotals($order_info['order_id']);
							$order_totals_data = [];
							foreach ($order_totals as $order_total) {
							$order_total['title'] = html_entity_decode($order_total['title'], ENT_QUOTES, 'UTF-8');
								$order_totals_data[] = $order_total['title'] .' - '. $this->currency->format($order_total['value'], $order_info['currency_code'], $order_info['currency_value']);
							}

							$order_info['order_totals'] = implode("; \n", $order_totals_data);

							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['order_total']['alphabet'] . $i, $order_info['order_totals'])->getColumnDimension($find_fields['order_total']['alphabet'])->setAutoSize(true);
							$objPHPExcel->getActiveSheet()->getStyle($find_fields['order_total']['alphabet'] . $i)->getAlignment()->setWrapText(true);
						}

						if (isset($find_fields['total']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['total']['alphabet'] . $i, $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value']));
						}

						if (isset($find_fields['order_status']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['order_status']['alphabet'] . $i, $order_info['order_status']);
						}

						if (isset($find_fields['customer_name']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['customer_name']['alphabet'] . $i, $order_info['customer']);
						}

						if (isset($find_fields['customer_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['customer_id']['alphabet'] . $i, $order_info['customer_id']);
						}

						if (isset($find_fields['firstname']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['firstname']['alphabet'] . $i, $order_info['firstname']);
						}

						if (isset($find_fields['lastname']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['lastname']['alphabet'] . $i, $order_info['lastname']);
						}

						if (isset($find_fields['email']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['email']['alphabet'] . $i, $order_info['email']);
						}

						if (isset($find_fields['telephone']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['telephone']['alphabet'] . $i, $order_info['telephone']);
						}

						if (isset($find_fields['fax']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['fax']['alphabet'] . $i, $order_info['fax']);
						}

						if (isset($find_fields['comment']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['comment']['alphabet'] . $i, $order_info['comment']);
						}

						// Order Custom Field
						if (isset($find_fields['custom_field']['code'])) {
							$order_info['custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['custom_field']) : json_decode($order_info['custom_field'], true);
							$data['account_custom_fields'] = [];
							if ($order_info['custom_field']) {
								foreach ($custom_fields as $custom_field) {
									if ($custom_field['location'] == 'account' && isset($order_info['custom_field'][$custom_field['custom_field_id']])) {
										if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['custom_field'][$custom_field['custom_field_id']]);

											if ($custom_field_value_info) {
												$data['account_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}

										if ($custom_field['type'] == 'checkbox' && is_array($order_info['custom_field'][$custom_field['custom_field_id']])) {
											foreach ($order_info['custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
												$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

												if ($custom_field_value_info) {
													$data['account_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
												}
											}
										}

										if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
											$data['account_custom_fields'][] = $custom_field['name'] .' - '. $order_info['custom_field'][$custom_field['custom_field_id']];
										}

										if ($custom_field['type'] == 'file') {
											$upload_info = $this->model_tool_upload->getUploadByCode($order_info['custom_field'][$custom_field['custom_field_id']]);

											if ($upload_info) {
												$data['account_custom_fields'][] = $custom_field['name'] .' - '. $upload_info['name'];
											}
										}
									}
								}
							}

							$account_custom_fields = implode('; ', $data['account_custom_fields']);
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['custom_field']['alphabet'] . $i, $account_custom_fields);
						}

						if (isset($find_fields['shipping_firstname']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_firstname']['alphabet'] . $i, $order_info['shipping_firstname']);
						}

						if (isset($find_fields['shipping_lastname']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_lastname']['alphabet'] . $i, $order_info['shipping_lastname']);
						}

						if (isset($find_fields['shipping_company']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_company']['alphabet'] . $i, $order_info['shipping_company']);
						}

						if (isset($find_fields['shipping_address_1']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_address_1']['alphabet'] . $i, $order_info['shipping_address_1']);
						}

						if (isset($find_fields['shipping_address_2']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_address_2']['alphabet'] . $i, $order_info['shipping_address_2']);
						}

						if (isset($find_fields['shipping_city']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_city']['alphabet'] . $i, $order_info['shipping_city']);
						}

						if (isset($find_fields['shipping_postcode']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_postcode']['alphabet'] . $i, $order_info['shipping_postcode']);
						}

						if (isset($find_fields['shipping_country']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_country']['alphabet'] . $i, $order_info['shipping_country']);
						}

						if (isset($find_fields['shipping_country_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_country_id']['alphabet'] . $i, $order_info['shipping_country_id']);
						}

						if (isset($find_fields['shipping_zone']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_zone']['alphabet'] . $i, $order_info['shipping_zone']);
						}

						if (isset($find_fields['shipping_zone_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_zone_id']['alphabet'] . $i, $order_info['shipping_zone_id']);
						}

						if (isset($find_fields['shipping_method']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_method']['alphabet'] . $i, $order_info['shipping_method']);
						}

						if (isset($find_fields['shipping_code']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_code']['alphabet'] . $i, $order_info['shipping_code']);
						}

						// Shipping Custom Field
						if (isset($find_fields['shipping_custom_field']['code'])) {
							$order_info['shipping_custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['shipping_custom_field']) : json_decode($order_info['shipping_custom_field'], true);
							$data['shipping_custom_fields'] = [];

							foreach ($custom_fields as $custom_field) {
								if ($custom_field['location'] == 'address' && isset($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
									if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
										$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

										if ($custom_field_value_info) {
											$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
										}
									}

									if ($custom_field['type'] == 'checkbox' && is_array($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
										foreach ($order_info['shipping_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

											if ($custom_field_value_info) {
												$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}
									}

									if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
										$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $order_info['shipping_custom_field'][$custom_field['custom_field_id']];
									}

									if ($custom_field['type'] == 'file') {
										$upload_info = $this->model_tool_upload->getUploadByCode($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

										if ($upload_info) {
											$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $upload_info['name'];
										}
									}
								}
							}

							$shipping_custom_fields = implode('; ', $data['shipping_custom_fields']);
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['shipping_custom_field']['alphabet'] . $i, $shipping_custom_fields);
						}

						if (isset($find_fields['payment_firstname']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_firstname']['alphabet'] . $i, $order_info['payment_firstname']);
						}

						if (isset($find_fields['payment_lastname']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_lastname']['alphabet'] . $i, $order_info['payment_lastname']);
						}

						if (isset($find_fields['payment_company']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_company']['alphabet'] . $i, $order_info['payment_company']);
						}

						if (isset($find_fields['payment_address_1']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_address_1']['alphabet'] . $i, $order_info['payment_address_1']);
						}

						if (isset($find_fields['payment_address_2']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_address_2']['alphabet'] . $i, $order_info['payment_address_2']);
						}

						if (isset($find_fields['payment_city']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_city']['alphabet'] . $i, $order_info['payment_city']);
						}

						if (isset($find_fields['payment_postcode']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_postcode']['alphabet'] . $i, $order_info['payment_postcode']);
						}

						if (isset($find_fields['payment_country']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_country']['alphabet'] . $i, $order_info['payment_country']);
						}

						if (isset($find_fields['payment_country_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_country_id']['alphabet'] . $i, $order_info['payment_country_id']);
						}

						if (isset($find_fields['payment_zone']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_zone']['alphabet'] . $i, $order_info['payment_zone']);
						}

						if (isset($find_fields['payment_zone_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_zone_id']['alphabet'] . $i, $order_info['payment_zone_id']);
						}

						if (isset($find_fields['payment_method']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_method']['alphabet'] . $i, $order_info['payment_method']);
						}

						if (isset($find_fields['payment_code']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_code']['alphabet'] . $i, $order_info['payment_code']);
						}

						// Payment Custom Field
						if (isset($find_fields['payment_custom_field']['code'])) {
							$order_info['payment_custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['payment_custom_field']) : json_decode($order_info['payment_custom_field'], true);
							$data['payment_custom_fields'] = [];

							foreach ($custom_fields as $custom_field) {
								if ($custom_field['location'] == 'address' && isset($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
									if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
										$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

										if ($custom_field_value_info) {
											$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
										}
									}

									if ($custom_field['type'] == 'checkbox' && is_array($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
										foreach ($order_info['payment_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

											if ($custom_field_value_info) {
												$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}
									}

									if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
										$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $order_info['payment_custom_field'][$custom_field['custom_field_id']];
									}

									if ($custom_field['type'] == 'file') {
										$upload_info = $this->model_tool_upload->getUploadByCode($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

										if ($upload_info) {
											$data['payment_custom_fields'][] = $upload_info['name'] .' - '. $upload_info['name'];
										}
									}
								}
							}

							$payment_custom_fields = implode('; ', $data['payment_custom_fields']);
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['payment_custom_field']['alphabet'] . $i, $payment_custom_fields);
						}

						if (isset($find_fields['affiliate_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['affiliate_id']['alphabet'] . $i, $order_info['affiliate_id']);
						}

						if (isset($find_fields['commission']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['commission']['alphabet'] . $i, $this->currency->format($order_info['commission'], $order_info['currency_code'], $order_info['currency_value']));
						}

						if (isset($find_fields['tracking']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['tracking']['alphabet'] . $i, $order_info['tracking']);
						}

						if (isset($find_fields['language_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['language_id']['alphabet'] . $i, $order_info['language_id']);
						}

						if (isset($find_fields['currency_id']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['currency_id']['alphabet'] . $i, $order_info['currency_id']);
						}

						if (isset($find_fields['currency_code']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['currency_code']['alphabet'] . $i, $order_info['currency_code']);
						}

						if (isset($find_fields['currency_value']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['currency_value']['alphabet'] . $i, $order_info['currency_value']);
						}

						if (isset($find_fields['ip_address']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['ip_address']['alphabet'] . $i, $order_info['ip']);
						}

						if (isset($find_fields['forwarded_ip']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['forwarded_ip']['alphabet'] . $i, $order_info['forwarded_ip']);
						}

						if (isset($find_fields['user_agent']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['user_agent']['alphabet'] . $i, $order_info['user_agent']);
						}

						if (isset($find_fields['accept_language']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['accept_language']['alphabet'] . $i, $order_info['accept_language']);
						}

						if (isset($find_fields['date_added']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['date_added']['alphabet'] . $i, $order_info['date_added']);
						}

						if (isset($find_fields['date_modified']['code'])) {
							$objPHPExcel->getActiveSheet()->setCellValue($find_fields['date_modified']['alphabet'] . $i, $order_info['date_modified']);
						}

						if (!empty($find_extrafields)) {

							foreach ($find_extrafields as $find_key_extrafield => $find_extrafield) {
								if (isset($find_fields[$find_key_extrafield]['code']) && isset($order_info[$find_extrafield['field']])) {
									$objPHPExcel->getActiveSheet()->setCellValue($find_fields[$find_key_extrafield]['alphabet'] . $i, $order_info[$find_extrafield['field']]);
								}
							}
						}
					}

					// Find Format
					if ($find_format == 'xls') {
						$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
						$file_name = 'OrderList.xls';
					}else if ($find_format == 'xlsx') {
						$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
						$file_name = 'OrderList.xlsx';
					}else if ($find_format == 'csv') {
						$file_name = 'OrderList.csv';
						$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
					}else{
						$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
						$file_name = 'OrderList.xlsx';
					}

					$file_to_save = DIR_UPLOAD . $file_name;
					$objWriter->save(DIR_UPLOAD . $file_name);

				}
			}

			if ('json' == $find_format) {
				$export_data = [];
				// add meta data in json file, if possible with php

				if ($results) {
					// Fetch Total Orders
					// $objPHPExcel->getActiveSheet()->setTitle(sprintf($this->language->get('export_title'), count($results)));

					$i = 0;
					foreach ($results as $order_info) {

						// Assign Cell Values
						if (isset($find_fields['order_id']['code'])) {
							$export_data[$i]['order_id'] = [
								'text' => $this->language->get('export_order_id'),
								'value' => $order_info['order_id']
							];
						}

						if (isset($find_fields['invoice_prefix']['code'])) {
							$export_data[$i]['invoice_prefix'] = [
								'text' => $this->language->get('export_invoice_prefix'),
								'value' => $order_info['invoice_prefix']
							];
						}

						if (isset($find_fields['invoice_no']['code'])) {
							$export_data[$i]['invoice_no'] = [
								'text' => $this->language->get('export_invoice_no'),
								'value' => $order_info['invoice_no']
							];
						}

						if (isset($find_fields['store_id']['code'])) {
							$export_data[$i]['store_id'] = [
								'text' => $this->language->get('export_store_id'),
								'value' => $order_info['store_id']
							];
						}

						if (isset($find_fields['store_name']['code'])) {
							$export_data[$i]['store_name'] = [
								'text' => $this->language->get('export_store_name'),
								'value' => $order_info['store_name']
							];
						}

						if (isset($find_fields['store_url']['code'])) {
							$export_data[$i]['store_url'] = [
								'text' => $this->language->get('export_store_url'),
								'value' => $order_info['store_url']
							];
						}

						if (isset($find_fields['product_id']['code'])) {
							$export_data[$i]['product_id'] = [
								'text' => $this->language->get('export_product_id'),
								'value' => $order_info['product_id']
							];
						}

						if (isset($find_fields['product_name']['code'])) {
							$export_data[$i]['product_name'] = [
								'text' => $this->language->get('export_product_name'),
								'value' => $order_info['product_name']
							];
						}

						if (isset($find_fields['product_model']['code'])) {
							$export_data[$i]['product_model'] = [
								'text' => $this->language->get('export_product_model'),
								'value' => $order_info['product_model']
							];
						}

						if (isset($find_fields['product_price']['code'])) {
							$export_data[$i]['product_price'] = [
								'text' => $this->language->get('export_product_price'),
								'value' => $this->currency->format($order_info['product_price'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['product_quantity']['code'])) {
							$export_data[$i]['product_quantity'] = [
								'text' => $this->language->get('export_product_quantity'),
								'value' => $order_info['product_quantity']
							];
						}

						if (isset($find_fields['product_total_price']['code'])) {
							$export_data[$i]['product_total_price'] = [
								'text' => $this->language->get('export_product_total_price'),
								'value' => $this->currency->format($order_info['product_total_price'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['product_tax']['code'])) {
							$export_data[$i]['product_tax'] = [
								'text' => $this->language->get('export_product_tax'),
								'value' => $this->currency->format($order_info['product_tax'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['product_reward']['code'])) {
							$export_data[$i]['product_reward'] = [
								'text' => $this->language->get('export_product_reward'),
								'value' => $order_info['product_reward']
							];
						}

						if (isset($find_fields['product_option']['code'])) {
							$order_products_option_data = [];

							$order_options = $this->model_sale_order->getOrderOptions($order_info['order_id'], $order_info['order_product_id']);

							$order_options_data = '';
							$option_row = 1;
							foreach ($order_options as $order_option) {
								if ($option_row == '1') {
									$option_string = $order_info['product_name']. ' >> ';
								} else {
									$option_string = '';
								}

								$order_options_data .= $option_string . $order_option['name'] .' :: '. $order_option['value'];
								if (count($order_options) != $option_row) {
									$order_options_data .= ' || ';
								}

								$option_row++;
							}

							if ($order_options_data) {
								$order_products_option_data[] = $order_options_data;
							}

							if ($order_products_option_data) {
								$order_info['order_products_option_data'] = implode(';; ', $order_products_option_data);
							} else {
								$order_info['order_products_option_data'] = '';
							}

							$export_data[$i]['order_products_option_data'] = [
								'text' => $this->language->get('export_product_option'),
								'value' => $order_info['order_products_option_data']
							];
						}

						if (isset($find_fields['voucher']['code'])) {
							$order_vouchers = $this->model_sale_order->getOrderVouchers($order_info['order_id']);
							$order_vouchers_data = [];

							foreach ($order_vouchers as $order_voucher) {
								$order_vouchers_data[] = $order_voucher['code'] .' :: '. $order_voucher['from_name'] .' :: '. $order_voucher['from_email'] .' :: '. $order_voucher['to_name'] .' :: '. $order_voucher['to_email'].' :: '. $order_voucher['message'];
							}

							if ($order_vouchers_data) {
								$order_info['order_vouchers_data'] = implode("; \n", $order_vouchers_data);
							} else{
								$order_info['order_vouchers_data'] = '';
							}

							$export_data[$i]['order_vouchers_data'] = [
								'text' => $this->language->get('export_order_vouchers'),
								'value' => $order_info['order_vouchers_data']
							];
						}

						// Order Totals Details
						if (isset($find_fields['order_total']['code'])) {
							$order_totals = $this->model_sale_order->getOrderTotals($order_info['order_id']);
							$order_totals_data = [];
							foreach ($order_totals as $order_total) {
							$order_total['title'] = html_entity_decode($order_total['title'], ENT_QUOTES, 'UTF-8');
								$order_totals_data[] = $order_total['title'] .' - '. $this->currency->format($order_total['value'], $order_info['currency_code'], $order_info['currency_value']);
							}

							$order_info['order_totals'] = implode("; \n", $order_totals_data);

							$export_data[$i]['order_totals'] = [
								'text' => $this->language->get('export_order_total'),
								'value' => $order_info['order_totals']
							];
						}

						if (isset($find_fields['total']['code'])) {
							$export_data[$i]['total'] = [
								'text' => $this->language->get('export_order_total_variable'),
								'value' => $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['order_status']['code'])) {
							$export_data[$i]['order_status'] = [
								'text' => $this->language->get('export_order_status'),
								'value' => $order_info['order_status']
							];
						}

						if (isset($find_fields['customer_name']['code'])) {
							$export_data[$i]['customer_name'] = [
								'text' => $this->language->get('export_customer_name'),
								'value' => $order_info['customer']
							];
						}

						if (isset($find_fields['customer_id']['code'])) {
							$export_data[$i]['customer_id'] = [
								'text' => $this->language->get('export_customer_id'),
								'value' => $order_info['customer_id']
							];
						}

						if (isset($find_fields['firstname']['code'])) {
							$export_data[$i]['firstname'] = [
								'text' => $this->language->get('export_firstname'),
								'value' => $order_info['firstname']
							];
						}

						if (isset($find_fields['lastname']['code'])) {
							$export_data[$i]['lastname'] = [
								'text' => $this->language->get('export_lastname'),
								'value' => $order_info['lastname']
							];
						}

						if (isset($find_fields['email']['code'])) {
							$export_data[$i]['email'] = [
								'text' => $this->language->get('export_email'),
								'value' => $order_info['email']
							];
						}

						if (isset($find_fields['telephone']['code'])) {
							$export_data[$i]['telephone'] = [
								'text' => $this->language->get('export_telephone'),
								'value' => $order_info['telephone']
							];
						}

						if (isset($find_fields['fax']['code'])) {
							$export_data[$i]['fax'] = [
								'text' => $this->language->get('export_fax'),
								'value' => $order_info['fax']
							];
						}

						if (isset($find_fields['comment']['code'])) {
							$export_data[$i]['comment'] = [
								'text' => $this->language->get('export_comment'),
								'value' => $order_info['comment']
							];
						}

						// Order Custom Field
						if (isset($find_fields['custom_field']['code'])) {
							$order_info['custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['custom_field']) : json_decode($order_info['custom_field'], true);
							$data['account_custom_fields'] = [];
							if ($order_info['custom_field']) {
								foreach ($custom_fields as $custom_field) {
									if ($custom_field['location'] == 'account' && isset($order_info['custom_field'][$custom_field['custom_field_id']])) {
										if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['custom_field'][$custom_field['custom_field_id']]);

											if ($custom_field_value_info) {
												$data['account_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}

										if ($custom_field['type'] == 'checkbox' && is_array($order_info['custom_field'][$custom_field['custom_field_id']])) {
											foreach ($order_info['custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
												$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

												if ($custom_field_value_info) {
													$data['account_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
												}
											}
										}

										if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
											$data['account_custom_fields'][] = $custom_field['name'] .' - '. $order_info['custom_field'][$custom_field['custom_field_id']];
										}

										if ($custom_field['type'] == 'file') {
											$upload_info = $this->model_tool_upload->getUploadByCode($order_info['custom_field'][$custom_field['custom_field_id']]);

											if ($upload_info) {
												$data['account_custom_fields'][] = $custom_field['name'] .' - '. $upload_info['name'];
											}
										}
									}
								}
							}

							$account_custom_fields = implode('; ', $data['account_custom_fields']);

							$export_data[$i]['account_custom_fields'] = [
								'text' => $this->language->get('export_custom_field'),
								'value' => $account_custom_fields
							];
						}

						if (isset($find_fields['shipping_firstname']['code'])) {
							$export_data[$i]['shipping_firstname'] = [
								'text' => $this->language->get('export_shipping_firstname'),
								'value' => $order_info['shipping_firstname']
							];
						}

						if (isset($find_fields['shipping_lastname']['code'])) {
							$export_data[$i]['shipping_lastname'] = [
								'text' => $this->language->get('export_shipping_lastname'),
								'value' => $order_info['shipping_lastname']
							];
						}

						if (isset($find_fields['shipping_company']['code'])) {
							$export_data[$i]['shipping_company'] = [
								'text' => $this->language->get('export_shipping_company'),
								'value' => $order_info['shipping_company']
							];
						}

						if (isset($find_fields['shipping_address_1']['code'])) {
							$export_data[$i]['shipping_address_1'] = [
								'text' => $this->language->get('export_shipping_address_1'),
								'value' => $order_info['shipping_address_1']
							];
						}

						if (isset($find_fields['shipping_address_2']['code'])) {
							$export_data[$i]['shipping_address_2'] = [
								'text' => $this->language->get('export_shipping_address_2'),
								'value' => $order_info['shipping_address_2']
							];
						}

						if (isset($find_fields['shipping_city']['code'])) {
							$export_data[$i]['shipping_city'] = [
								'text' => $this->language->get('export_shipping_city'),
								'value' => $order_info['shipping_city']
							];
						}

						if (isset($find_fields['shipping_postcode']['code'])) {
							$export_data[$i]['shipping_postcode'] = [
								'text' => $this->language->get('export_shipping_postcode'),
								'value' => $order_info['shipping_postcode']
							];
						}

						if (isset($find_fields['shipping_country']['code'])) {
							$export_data[$i]['shipping_country'] = [
								'text' => $this->language->get('export_shipping_country'),
								'value' => $order_info['shipping_country']
							];
						}

						if (isset($find_fields['shipping_country_id']['code'])) {
							$export_data[$i]['shipping_country_id'] = [
								'text' => $this->language->get('export_shipping_country_id'),
								'value' => $order_info['shipping_country_id']
							];
						}

						if (isset($find_fields['shipping_zone']['code'])) {
							$export_data[$i]['shipping_zone'] = [
								'text' => $this->language->get('export_shipping_zone'),
								'value' => $order_info['shipping_zone']
							];
						}

						if (isset($find_fields['shipping_zone_id']['code'])) {
							$export_data[$i]['shipping_zone_id'] = [
								'text' => $this->language->get('export_shipping_zone_id'),
								'value' => $order_info['shipping_zone_id']
							];
						}

						if (isset($find_fields['shipping_method']['code'])) {
							$export_data[$i]['shipping_method'] = [
								'text' => $this->language->get('export_shipping_method'),
								'value' => $order_info['shipping_method']
							];
						}

						if (isset($find_fields['shipping_code']['code'])) {
							$export_data[$i]['shipping_code'] = [
								'text' => $this->language->get('export_shipping_code'),
								'value' => $order_info['shipping_code']
							];
						}

						// Shipping Custom Field
						if (isset($find_fields['shipping_custom_field']['code'])) {
							$order_info['shipping_custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['shipping_custom_field']) : json_decode($order_info['shipping_custom_field'], true);
							$data['shipping_custom_fields'] = [];

							foreach ($custom_fields as $custom_field) {
								if ($custom_field['location'] == 'address' && isset($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
									if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
										$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

										if ($custom_field_value_info) {
											$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
										}
									}

									if ($custom_field['type'] == 'checkbox' && is_array($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
										foreach ($order_info['shipping_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

											if ($custom_field_value_info) {
												$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}
									}

									if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
										$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $order_info['shipping_custom_field'][$custom_field['custom_field_id']];
									}

									if ($custom_field['type'] == 'file') {
										$upload_info = $this->model_tool_upload->getUploadByCode($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

										if ($upload_info) {
											$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $upload_info['name'];
										}
									}
								}
							}

							$shipping_custom_fields = implode('; ', $data['shipping_custom_fields']);

							$export_data[$i]['shipping_custom_fields'] = [
								'text' => $this->language->get('export_shipping_custom_field'),
								'value' => $shipping_custom_fields
							];
						}

						if (isset($find_fields['payment_firstname']['code'])) {
							$export_data[$i]['payment_firstname'] = [
								'text' => $this->language->get('export_payment_firstname'),
								'value' => $order_info['payment_firstname']
							];
						}

						if (isset($find_fields['payment_lastname']['code'])) {
							$export_data[$i]['payment_lastname'] = [
								'text' => $this->language->get('export_payment_lastname'),
								'value' => $order_info['payment_lastname']
							];
						}

						if (isset($find_fields['payment_company']['code'])) {
							$export_data[$i]['payment_company'] = [
								'text' => $this->language->get('export_payment_company'),
								'value' => $order_info['payment_company']
							];
						}

						if (isset($find_fields['payment_address_1']['code'])) {
							$export_data[$i]['payment_address_1'] = [
								'text' => $this->language->get('export_payment_address_1'),
								'value' => $order_info['payment_address_1']
							];
						}

						if (isset($find_fields['payment_address_2']['code'])) {
							$export_data[$i]['payment_address_2'] = [
								'text' => $this->language->get('export_payment_address_2'),
								'value' => $order_info['payment_address_2']
							];
						}

						if (isset($find_fields['payment_city']['code'])) {
							$export_data[$i]['payment_city'] = [
								'text' => $this->language->get('export_payment_city'),
								'value' => $order_info['payment_city']
							];
						}

						if (isset($find_fields['payment_postcode']['code'])) {
							$export_data[$i]['payment_postcode'] = [
								'text' => $this->language->get('export_payment_postcode'),
								'value' => $order_info['payment_postcode']
							];
						}

						if (isset($find_fields['payment_country']['code'])) {
							$export_data[$i]['payment_country'] = [
								'text' => $this->language->get('export_payment_country'),
								'value' => $order_info['payment_country']
							];
						}

						if (isset($find_fields['payment_country_id']['code'])) {
							$export_data[$i]['payment_country_id'] = [
								'text' => $this->language->get('export_payment_country_id'),
								'value' => $order_info['payment_country_id']
							];
						}

						if (isset($find_fields['payment_zone']['code'])) {
							$export_data[$i]['payment_zone'] = [
								'text' => $this->language->get('export_payment_zone'),
								'value' => $order_info['payment_zone']
							];
						}

						if (isset($find_fields['payment_zone_id']['code'])) {
							$export_data[$i]['payment_zone_id'] = [
								'text' => $this->language->get('export_payment_zone_id'),
								'value' => $order_info['payment_zone_id']
							];
						}

						if (isset($find_fields['payment_method']['code'])) {
							$export_data[$i]['payment_method'] = [
								'text' => $this->language->get('export_payment_method'),
								'value' => $order_info['payment_method']
							];
						}

						if (isset($find_fields['payment_code']['code'])) {
							$export_data[$i]['payment_code'] = [
								'text' => $this->language->get('export_payment_code'),
								'value' => $order_info['payment_code']
							];
						}

						// Payment Custom Field
						if (isset($find_fields['payment_custom_field']['code'])) {
							$order_info['payment_custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['payment_custom_field']) : json_decode($order_info['payment_custom_field'], true);
							$data['payment_custom_fields'] = [];

							foreach ($custom_fields as $custom_field) {
								if ($custom_field['location'] == 'address' && isset($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
									if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
										$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

										if ($custom_field_value_info) {
											$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
										}
									}

									if ($custom_field['type'] == 'checkbox' && is_array($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
										foreach ($order_info['payment_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

											if ($custom_field_value_info) {
												$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}
									}

									if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
										$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $order_info['payment_custom_field'][$custom_field['custom_field_id']];
									}

									if ($custom_field['type'] == 'file') {
										$upload_info = $this->model_tool_upload->getUploadByCode($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

										if ($upload_info) {
											$data['payment_custom_fields'][] = $upload_info['name'] .' - '. $upload_info['name'];
										}
									}
								}
							}

							$payment_custom_fields = implode('; ', $data['payment_custom_fields']);

							$export_data[$i]['payment_custom_fields'] = [
								'text' => $this->language->get('export_payment_custom_field'),
								'value' => $payment_custom_fields
							];
						}

						if (isset($find_fields['affiliate_id']['code'])) {
							$export_data[$i]['affiliate_id'] = [
								'text' => $this->language->get('export_affiliate_id'),
								'value' => $order_info['affiliate_id']
							];
						}

						if (isset($find_fields['commission']['code'])) {
							$export_data[$i]['commission'] = [
								'text' => $this->language->get('export_commission'),
								'value' => $this->currency->format($order_info['commission'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['tracking']['code'])) {
							$export_data[$i]['tracking'] = [
								'text' => $this->language->get('export_tracking'),
								'value' => $order_info['tracking']
							];
						}

						if (isset($find_fields['language_id']['code'])) {
							$export_data[$i]['language_id'] = [
								'text' => $this->language->get('export_language_id'),
								'value' => $order_info['language_id']
							];
						}

						if (isset($find_fields['currency_id']['code'])) {
							$export_data[$i]['currency_id'] = [
								'text' => $this->language->get('export_currency_id'),
								'value' => $order_info['currency_id']
							];
						}

						if (isset($find_fields['currency_code']['code'])) {
							$export_data[$i]['currency_code'] = [
								'text' => $this->language->get('export_currency_code'),
								'value' => $order_info['currency_code']
							];
						}

						if (isset($find_fields['currency_value']['code'])) {
							$export_data[$i]['currency_value'] = [
								'text' => $this->language->get('export_currency_value'),
								'value' => $order_info['currency_value']
							];
						}

						if (isset($find_fields['ip_address']['code'])) {
							$export_data[$i]['ip'] = [
								'text' => $this->language->get('export_ip_address'),
								'value' => $order_info['ip']
							];
						}

						if (isset($find_fields['forwarded_ip']['code'])) {
							$export_data[$i]['forwarded_ip'] = [
								'text' => $this->language->get('export_forwarded_ip'),
								'value' => $order_info['forwarded_ip']
							];
						}

						if (isset($find_fields['user_agent']['code'])) {
							$export_data[$i]['user_agent'] = [
								'text' => $this->language->get('export_user_agent'),
								'value' => $order_info['user_agent']
							];
						}

						if (isset($find_fields['accept_language']['code'])) {
							$export_data[$i]['accept_language'] = [
								'text' => $this->language->get('export_accept_language'),
								'value' => $order_info['accept_language']
							];
						}

						if (isset($find_fields['date_added']['code'])) {
							$export_data[$i]['date_added'] = [
								'text' => $this->language->get('export_date_added'),
								'value' => $order_info['date_added']
							];
						}

						if (isset($find_fields['date_modified']['code'])) {
							$export_data[$i]['date_modified'] = [
								'text' => $this->language->get('export_date_modified'),
								'value' => $order_info['date_modified']
							];
						}

						if (!empty($find_extrafields)) {
							foreach ($find_extrafields as $find_key_extrafield => $find_extrafield) {
								if (isset($find_fields[$find_key_extrafield]['code']) && isset($order_info[$find_extrafield['field']])) {
									$export_data[$i][$find_extrafield['tablename'].'__'.$find_extrafield['field']] = [
										'text' => $find_extrafield['title'],
										'value' => $order_info[$find_extrafield['field']]
									];
								}
							}
						}
						$i++;
					}

					$file_name = 'OrderList.json';
					$file_to_save = DIR_UPLOAD . $file_name;

					$handle = fopen($file_to_save, "w");

					fwrite($handle, json_encode($export_data, JSON_PRETTY_PRINT));
					fclose($handle);

				}

			}

			if ('xml' == $find_format) {
				$export_data = [];
				// add meta data in json file, if possible with php

				if ($results) {
					$xml = new \DOMDocument('1.0', 'UTF-8');

			    $xml->preserveWhiteSpace = false;
					$xml->formatOutput=true;

					$xml_orders = $xml->createElement("orders");
					$xml->appendChild($xml_orders);

					// Fetch Total Orders
					// $objPHPExcel->getActiveSheet()->setTitle(sprintf($this->language->get('export_title'), count($results)));

					foreach ($results as $order_info) {
						$export_data = [];
						$i = 0;

						// Assign Cell Values
						if (isset($find_fields['order_id']['code'])) {
							$export_data[$i]['order_id'] = [
								'text' => $this->language->get('export_order_id'),
								'value' => $order_info['order_id']
							];
						}

						if (isset($find_fields['invoice_prefix']['code'])) {
							$export_data[$i]['invoice_prefix'] = [
								'text' => $this->language->get('export_invoice_prefix'),
								'value' => $order_info['invoice_prefix']
							];
						}

						if (isset($find_fields['invoice_no']['code'])) {
							$export_data[$i]['invoice_no'] = [
								'text' => $this->language->get('export_invoice_no'),
								'value' => $order_info['invoice_no']
							];
						}

						if (isset($find_fields['store_id']['code'])) {
							$export_data[$i]['store_id'] = [
								'text' => $this->language->get('export_store_id'),
								'value' => $order_info['store_id']
							];
						}

						if (isset($find_fields['store_name']['code'])) {
							$export_data[$i]['store_name'] = [
								'text' => $this->language->get('export_store_name'),
								'value' => $order_info['store_name']
							];
						}

						if (isset($find_fields['store_url']['code'])) {
							$export_data[$i]['store_url'] = [
								'text' => $this->language->get('export_store_url'),
								'value' => $order_info['store_url']
							];
						}

						if (isset($find_fields['product_id']['code'])) {
							$export_data[$i]['product_id'] = [
								'text' => $this->language->get('export_product_id'),
								'value' => $order_info['product_id']
							];
						}

						if (isset($find_fields['product_name']['code'])) {
							$export_data[$i]['product_name'] = [
								'text' => $this->language->get('export_product_name'),
								'value' => $order_info['product_name']
							];
						}

						if (isset($find_fields['product_model']['code'])) {
							$export_data[$i]['product_model'] = [
								'text' => $this->language->get('export_product_model'),
								'value' => $order_info['product_model']
							];
						}

						if (isset($find_fields['product_price']['code'])) {
							$export_data[$i]['product_price'] = [
								'text' => $this->language->get('export_product_price'),
								'value' => $this->currency->format($order_info['product_price'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['product_quantity']['code'])) {
							$export_data[$i]['product_quantity'] = [
								'text' => $this->language->get('export_product_quantity'),
								'value' => $order_info['product_quantity']
							];
						}

						if (isset($find_fields['product_total_price']['code'])) {
							$export_data[$i]['product_total_price'] = [
								'text' => $this->language->get('export_product_total_price'),
								'value' => $this->currency->format($order_info['product_total_price'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['product_tax']['code'])) {
							$export_data[$i]['product_tax'] = [
								'text' => $this->language->get('export_product_tax'),
								'value' => $this->currency->format($order_info['product_tax'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['product_reward']['code'])) {
							$export_data[$i]['product_reward'] = [
								'text' => $this->language->get('export_product_reward'),
								'value' => $order_info['product_reward']
							];
						}

						if (isset($find_fields['product_option']['code'])) {
							$order_products_option_data = [];

							$order_options = $this->model_sale_order->getOrderOptions($order_info['order_id'], $order_info['order_product_id']);

							$order_options_data = '';
							$option_row = 1;
							foreach ($order_options as $order_option) {
								if ($option_row == '1') {
									$option_string = $order_info['product_name']. ' >> ';
								} else {
									$option_string = '';
								}

								$order_options_data .= $option_string . $order_option['name'] .' :: '. $order_option['value'];
								if (count($order_options) != $option_row) {
									$order_options_data .= ' || ';
								}

								$option_row++;
							}

							if ($order_options_data) {
								$order_products_option_data[] = $order_options_data;
							}

							if ($order_products_option_data) {
								$order_info['order_products_option_data'] = implode(';; ', $order_products_option_data);
							} else {
								$order_info['order_products_option_data'] = '';
							}

							$export_data[$i]['order_products_option_data'] = [
								'text' => $this->language->get('export_product_option'),
								'value' => $order_info['order_products_option_data']
							];
						}

						if (isset($find_fields['voucher']['code'])) {
							$order_vouchers = $this->model_sale_order->getOrderVouchers($order_info['order_id']);
							$order_vouchers_data = [];

							foreach ($order_vouchers as $order_voucher) {
								$order_vouchers_data[] = $order_voucher['code'] .' :: '. $order_voucher['from_name'] .' :: '. $order_voucher['from_email'] .' :: '. $order_voucher['to_name'] .' :: '. $order_voucher['to_email'].' :: '. $order_voucher['message'];
							}

							if ($order_vouchers_data) {
								$order_info['order_vouchers_data'] = implode("; \n", $order_vouchers_data);
							} else{
								$order_info['order_vouchers_data'] = '';
							}

							$export_data[$i]['order_vouchers_data'] = [
								'text' => $this->language->get('export_order_vouchers'),
								'value' => $order_info['order_vouchers_data']
							];
						}

						// Order Totals Details
						if (isset($find_fields['order_total']['code'])) {
							$order_totals = $this->model_sale_order->getOrderTotals($order_info['order_id']);
							$order_totals_data = [];
							foreach ($order_totals as $order_total) {
							$order_total['title'] = html_entity_decode($order_total['title'], ENT_QUOTES, 'UTF-8');
								$order_totals_data[] = $order_total['title'] .' - '. $this->currency->format($order_total['value'], $order_info['currency_code'], $order_info['currency_value']);
							}

							$order_info['order_totals'] = implode("; \n", $order_totals_data);

							$export_data[$i]['order_totals'] = [
								'text' => $this->language->get('export_order_total'),
								'value' => $order_info['order_totals']
							];
						}

						if (isset($find_fields['total']['code'])) {
							$export_data[$i]['total'] = [
								'text' => $this->language->get('export_order_total_variable'),
								'value' => $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['order_status']['code'])) {
							$export_data[$i]['order_status'] = [
								'text' => $this->language->get('export_order_status'),
								'value' => $order_info['order_status']
							];
						}

						if (isset($find_fields['customer_name']['code'])) {
							$export_data[$i]['customer_name'] = [
								'text' => $this->language->get('export_customer_name'),
								'value' => $order_info['customer']
							];
						}

						if (isset($find_fields['customer_id']['code'])) {
							$export_data[$i]['customer_id'] = [
								'text' => $this->language->get('export_customer_id'),
								'value' => $order_info['customer_id']
							];
						}

						if (isset($find_fields['firstname']['code'])) {
							$export_data[$i]['firstname'] = [
								'text' => $this->language->get('export_firstname'),
								'value' => $order_info['firstname']
							];
						}

						if (isset($find_fields['lastname']['code'])) {
							$export_data[$i]['lastname'] = [
								'text' => $this->language->get('export_lastname'),
								'value' => $order_info['lastname']
							];
						}

						if (isset($find_fields['email']['code'])) {
							$export_data[$i]['email'] = [
								'text' => $this->language->get('export_email'),
								'value' => $order_info['email']
							];
						}

						if (isset($find_fields['telephone']['code'])) {
							$export_data[$i]['telephone'] = [
								'text' => $this->language->get('export_telephone'),
								'value' => $order_info['telephone']
							];
						}

						if (isset($find_fields['fax']['code'])) {
							$export_data[$i]['fax'] = [
								'text' => $this->language->get('export_fax'),
								'value' => $order_info['fax']
							];
						}

						if (isset($find_fields['comment']['code'])) {
							$export_data[$i]['comment'] = [
								'text' => $this->language->get('export_comment'),
								'value' => $order_info['comment']
							];
						}

						// Order Custom Field
						if (isset($find_fields['custom_field']['code'])) {
							$order_info['custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['custom_field']) : json_decode($order_info['custom_field'], true);
							$data['account_custom_fields'] = [];
							if ($order_info['custom_field']) {
								foreach ($custom_fields as $custom_field) {
									if ($custom_field['location'] == 'account' && isset($order_info['custom_field'][$custom_field['custom_field_id']])) {
										if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['custom_field'][$custom_field['custom_field_id']]);

											if ($custom_field_value_info) {
												$data['account_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}

										if ($custom_field['type'] == 'checkbox' && is_array($order_info['custom_field'][$custom_field['custom_field_id']])) {
											foreach ($order_info['custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
												$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

												if ($custom_field_value_info) {
													$data['account_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
												}
											}
										}

										if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
											$data['account_custom_fields'][] = $custom_field['name'] .' - '. $order_info['custom_field'][$custom_field['custom_field_id']];
										}

										if ($custom_field['type'] == 'file') {
											$upload_info = $this->model_tool_upload->getUploadByCode($order_info['custom_field'][$custom_field['custom_field_id']]);

											if ($upload_info) {
												$data['account_custom_fields'][] = $custom_field['name'] .' - '. $upload_info['name'];
											}
										}
									}
								}
							}

							$account_custom_fields = implode('; ', $data['account_custom_fields']);

							$export_data[$i]['account_custom_fields'] = [
								'text' => $this->language->get('export_custom_field'),
								'value' => $account_custom_fields
							];
						}

						if (isset($find_fields['shipping_firstname']['code'])) {
							$export_data[$i]['shipping_firstname'] = [
								'text' => $this->language->get('export_shipping_firstname'),
								'value' => $order_info['shipping_firstname']
							];
						}

						if (isset($find_fields['shipping_lastname']['code'])) {
							$export_data[$i]['shipping_lastname'] = [
								'text' => $this->language->get('export_shipping_lastname'),
								'value' => $order_info['shipping_lastname']
							];
						}

						if (isset($find_fields['shipping_company']['code'])) {
							$export_data[$i]['shipping_company'] = [
								'text' => $this->language->get('export_shipping_company'),
								'value' => $order_info['shipping_company']
							];
						}

						if (isset($find_fields['shipping_address_1']['code'])) {
							$export_data[$i]['shipping_address_1'] = [
								'text' => $this->language->get('export_shipping_address_1'),
								'value' => $order_info['shipping_address_1']
							];
						}

						if (isset($find_fields['shipping_address_2']['code'])) {
							$export_data[$i]['shipping_address_2'] = [
								'text' => $this->language->get('export_shipping_address_2'),
								'value' => $order_info['shipping_address_2']
							];
						}

						if (isset($find_fields['shipping_city']['code'])) {
							$export_data[$i]['shipping_city'] = [
								'text' => $this->language->get('export_shipping_city'),
								'value' => $order_info['shipping_city']
							];
						}

						if (isset($find_fields['shipping_postcode']['code'])) {
							$export_data[$i]['shipping_postcode'] = [
								'text' => $this->language->get('export_shipping_postcode'),
								'value' => $order_info['shipping_postcode']
							];
						}

						if (isset($find_fields['shipping_country']['code'])) {
							$export_data[$i]['shipping_country'] = [
								'text' => $this->language->get('export_shipping_country'),
								'value' => $order_info['shipping_country']
							];
						}

						if (isset($find_fields['shipping_country_id']['code'])) {
							$export_data[$i]['shipping_country_id'] = [
								'text' => $this->language->get('export_shipping_country_id'),
								'value' => $order_info['shipping_country_id']
							];
						}

						if (isset($find_fields['shipping_zone']['code'])) {
							$export_data[$i]['shipping_zone'] = [
								'text' => $this->language->get('export_shipping_zone'),
								'value' => $order_info['shipping_zone']
							];
						}

						if (isset($find_fields['shipping_zone_id']['code'])) {
							$export_data[$i]['shipping_zone_id'] = [
								'text' => $this->language->get('export_shipping_zone_id'),
								'value' => $order_info['shipping_zone_id']
							];
						}

						if (isset($find_fields['shipping_method']['code'])) {
							$export_data[$i]['shipping_method'] = [
								'text' => $this->language->get('export_shipping_method'),
								'value' => $order_info['shipping_method']
							];
						}

						if (isset($find_fields['shipping_code']['code'])) {
							$export_data[$i]['shipping_code'] = [
								'text' => $this->language->get('export_shipping_code'),
								'value' => $order_info['shipping_code']
							];
						}

						// Shipping Custom Field
						if (isset($find_fields['shipping_custom_field']['code'])) {
							$order_info['shipping_custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['shipping_custom_field']) : json_decode($order_info['shipping_custom_field'], true);
							$data['shipping_custom_fields'] = [];

							foreach ($custom_fields as $custom_field) {
								if ($custom_field['location'] == 'address' && isset($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
									if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
										$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

										if ($custom_field_value_info) {
											$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
										}
									}

									if ($custom_field['type'] == 'checkbox' && is_array($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
										foreach ($order_info['shipping_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

											if ($custom_field_value_info) {
												$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}
									}

									if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
										$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $order_info['shipping_custom_field'][$custom_field['custom_field_id']];
									}

									if ($custom_field['type'] == 'file') {
										$upload_info = $this->model_tool_upload->getUploadByCode($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

										if ($upload_info) {
											$data['shipping_custom_fields'][] = $custom_field['name'] .' - '. $upload_info['name'];
										}
									}
								}
							}

							$shipping_custom_fields = implode('; ', $data['shipping_custom_fields']);

							$export_data[$i]['shipping_custom_fields'] = [
								'text' => $this->language->get('export_shipping_custom_field'),
								'value' => $shipping_custom_fields
							];
						}

						if (isset($find_fields['payment_firstname']['code'])) {
							$export_data[$i]['payment_firstname'] = [
								'text' => $this->language->get('export_payment_firstname'),
								'value' => $order_info['payment_firstname']
							];
						}

						if (isset($find_fields['payment_lastname']['code'])) {
							$export_data[$i]['payment_lastname'] = [
								'text' => $this->language->get('export_payment_lastname'),
								'value' => $order_info['payment_lastname']
							];
						}

						if (isset($find_fields['payment_company']['code'])) {
							$export_data[$i]['payment_company'] = [
								'text' => $this->language->get('export_payment_company'),
								'value' => $order_info['payment_company']
							];
						}

						if (isset($find_fields['payment_address_1']['code'])) {
							$export_data[$i]['payment_address_1'] = [
								'text' => $this->language->get('export_payment_address_1'),
								'value' => $order_info['payment_address_1']
							];
						}

						if (isset($find_fields['payment_address_2']['code'])) {
							$export_data[$i]['payment_address_2'] = [
								'text' => $this->language->get('export_payment_address_2'),
								'value' => $order_info['payment_address_2']
							];
						}

						if (isset($find_fields['payment_city']['code'])) {
							$export_data[$i]['payment_city'] = [
								'text' => $this->language->get('export_payment_city'),
								'value' => $order_info['payment_city']
							];
						}

						if (isset($find_fields['payment_postcode']['code'])) {
							$export_data[$i]['payment_postcode'] = [
								'text' => $this->language->get('export_payment_postcode'),
								'value' => $order_info['payment_postcode']
							];
						}

						if (isset($find_fields['payment_country']['code'])) {
							$export_data[$i]['payment_country'] = [
								'text' => $this->language->get('export_payment_country'),
								'value' => $order_info['payment_country']
							];
						}

						if (isset($find_fields['payment_country_id']['code'])) {
							$export_data[$i]['payment_country_id'] = [
								'text' => $this->language->get('export_payment_country_id'),
								'value' => $order_info['payment_country_id']
							];
						}

						if (isset($find_fields['payment_zone']['code'])) {
							$export_data[$i]['payment_zone'] = [
								'text' => $this->language->get('export_payment_zone'),
								'value' => $order_info['payment_zone']
							];
						}

						if (isset($find_fields['payment_zone_id']['code'])) {
							$export_data[$i]['payment_zone_id'] = [
								'text' => $this->language->get('export_payment_zone_id'),
								'value' => $order_info['payment_zone_id']
							];
						}

						if (isset($find_fields['payment_method']['code'])) {
							$export_data[$i]['payment_method'] = [
								'text' => $this->language->get('export_payment_method'),
								'value' => $order_info['payment_method']
							];
						}

						if (isset($find_fields['payment_code']['code'])) {
							$export_data[$i]['payment_code'] = [
								'text' => $this->language->get('export_payment_code'),
								'value' => $order_info['payment_code']
							];
						}

						// Payment Custom Field
						if (isset($find_fields['payment_custom_field']['code'])) {
							$order_info['payment_custom_field'] = (VERSION <= '2.0.3.1') ? unserialize($order_info['payment_custom_field']) : json_decode($order_info['payment_custom_field'], true);
							$data['payment_custom_fields'] = [];

							foreach ($custom_fields as $custom_field) {
								if ($custom_field['location'] == 'address' && isset($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
									if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
										$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

										if ($custom_field_value_info) {
											$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
										}
									}

									if ($custom_field['type'] == 'checkbox' && is_array($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
										foreach ($order_info['payment_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
											$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

											if ($custom_field_value_info) {
												$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $custom_field_value_info['name'];
											}
										}
									}

									if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
										$data['payment_custom_fields'][] = $custom_field['name'] .' - '. $order_info['payment_custom_field'][$custom_field['custom_field_id']];
									}

									if ($custom_field['type'] == 'file') {
										$upload_info = $this->model_tool_upload->getUploadByCode($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

										if ($upload_info) {
											$data['payment_custom_fields'][] = $upload_info['name'] .' - '. $upload_info['name'];
										}
									}
								}
							}

							$payment_custom_fields = implode('; ', $data['payment_custom_fields']);

							$export_data[$i]['payment_custom_fields'] = [
								'text' => $this->language->get('export_payment_custom_field'),
								'value' => $payment_custom_fields
							];
						}

						if (isset($find_fields['affiliate_id']['code'])) {
							$export_data[$i]['affiliate_id'] = [
								'text' => $this->language->get('export_affiliate_id'),
								'value' => $order_info['affiliate_id']
							];
						}

						if (isset($find_fields['commission']['code'])) {
							$export_data[$i]['commission'] = [
								'text' => $this->language->get('export_commission'),
								'value' => $this->currency->format($order_info['commission'], $order_info['currency_code'], $order_info['currency_value'])
							];
						}

						if (isset($find_fields['tracking']['code'])) {
							$export_data[$i]['tracking'] = [
								'text' => $this->language->get('export_tracking'),
								'value' => $order_info['tracking']
							];
						}

						if (isset($find_fields['language_id']['code'])) {
							$export_data[$i]['language_id'] = [
								'text' => $this->language->get('export_language_id'),
								'value' => $order_info['language_id']
							];
						}

						if (isset($find_fields['currency_id']['code'])) {
							$export_data[$i]['currency_id'] = [
								'text' => $this->language->get('export_currency_id'),
								'value' => $order_info['currency_id']
							];
						}

						if (isset($find_fields['currency_code']['code'])) {
							$export_data[$i]['currency_code'] = [
								'text' => $this->language->get('export_currency_code'),
								'value' => $order_info['currency_code']
							];
						}

						if (isset($find_fields['currency_value']['code'])) {
							$export_data[$i]['currency_value'] = [
								'text' => $this->language->get('export_currency_value'),
								'value' => $order_info['currency_value']
							];
						}

						if (isset($find_fields['ip_address']['code'])) {
							$export_data[$i]['ip'] = [
								'text' => $this->language->get('export_ip_address'),
								'value' => $order_info['ip']
							];
						}

						if (isset($find_fields['forwarded_ip']['code'])) {
							$export_data[$i]['forwarded_ip'] = [
								'text' => $this->language->get('export_forwarded_ip'),
								'value' => $order_info['forwarded_ip']
							];
						}

						if (isset($find_fields['user_agent']['code'])) {
							$export_data[$i]['user_agent'] = [
								'text' => $this->language->get('export_user_agent'),
								'value' => $order_info['user_agent']
							];
						}

						if (isset($find_fields['accept_language']['code'])) {
							$export_data[$i]['accept_language'] = [
								'text' => $this->language->get('export_accept_language'),
								'value' => $order_info['accept_language']
							];
						}

						if (isset($find_fields['date_added']['code'])) {
							$export_data[$i]['date_added'] = [
								'text' => $this->language->get('export_date_added'),
								'value' => $order_info['date_added']
							];
						}

						if (isset($find_fields['date_modified']['code'])) {
							$export_data[$i]['date_modified'] = [
								'text' => $this->language->get('export_date_modified'),
								'value' => $order_info['date_modified']
							];
						}

						if (!empty($find_extrafields)) {
							foreach ($find_extrafields as $find_key_extrafield => $find_extrafield) {
								if (isset($find_fields[$find_key_extrafield]['code']) && isset($order_info[$find_extrafield['field']])) {
									$export_data[$i][$find_extrafield['tablename'].'__'.$find_extrafield['field']] = [
										'text' => $find_extrafield['title'],
										'value' => $order_info[$find_extrafield['field']]
									];
								}
							}
						}

						$xml_order = $xml->createElement("order");
						$xml_orders->appendChild($xml_order);
						foreach ($export_data[$i] as $key => $edata) {
							if ($edata['value'] == '') {
								$edata['value'] = " ";
							}
							// if ($key == 'custom_field') {
							// 	continue;
							// }

							$xml_edata = $xml->createElement($key, htmlspecialchars($edata['value'], ENT_QUOTES, 'UTF-8'));
							// $xml_edata->setAttribute("text", $edata['text']);
							$xml_order->appendChild($xml_edata);

							// $xml_attr = $xml->createAttribute('text');
							// $xml_attr->value = $edata['text'];
							// $xml_edata->appendChild($xml_attr);
						}
					}

					$file_name = 'OrderList.xml';
					$file_to_save = DIR_UPLOAD . $file_name;

					// echo $xml->saveXML();
					$xml->save($file_to_save);
				}
			}

			if ($results) {
				$json['href'] = str_replace('&amp;', '&', $this->url->link('exporter/orderpro/fileDownload', 'user_token='. $this->session->data['user_token'] .'&file_name='. $file_name .'&find_format='. $find_format, true));

				$json['success'] = $this->language->get('text_success');
			} else {
				$json['error']['warning'] = $this->language->get('text_no_results');
			}
		} else{
			if (!isset($json['error']['warning'])) {
				$json['error']['warning'] = $this->language->get('error_onerequired');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	}

	public function fileDownload() {
		if (!empty($this->request->get['file_name'])) {
			$file_to_save = DIR_UPLOAD . $this->request->get['file_name'];
			if (file_exists($file_to_save)) {
				header('Content-Type: '. mime_content_type($file_to_save));
				// header('Content-Type: application/vnd.ms-excel');
				// header('Content-Type: application/json');
				// header('Content-Type: application/xml');

				header('Content-Disposition: attachment;filename="'. $this->request->get['file_name'] .'"');
				header('Content-Transfer-Encoding: binary');
				header('Content-Length: '. filesize($file_to_save));
				header('Cache-Control: max-age=0');
				header('Accept-Ranges: bytes');
				readfile($file_to_save);

				unlink($file_to_save);
			}
		}
	}

	public function alphabetToNumber() {
		$json = [];
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->accessValidate()) {
			if (!empty($this->request->post['atn'])) {
				$json['atn'] = $this->mpalphanumexcel->numberToAlphabet((int)$this->request->post['atn']);
			}
			// print_r($this->request->post);die;
			if (!empty($this->request->post['atns']) && is_array($this->request->post['atns'])) {
				foreach ($this->request->post['atns'] as $key => $value) {
					$json['atns'][$key] = $this->mpalphanumexcel->numberToAlphabet((int)$value);
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function saveFieldSettings() {
		$json = [];
		$this->load->language('exporter/orderpro');
		$this->load->model('setting/setting');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			if (empty($this->request->post['orderpro_setting_fields'])) {
				$json['error']['warning'] = $this->language->get('error_setting_fields');
			}
			$sorts_alphabets = [];
			foreach ($this->request->post['orderpro_setting_fields'] as $code => $value) {
				if (empty($value['sort_order'])) {
					$json['sort_order'][$code] = true;
				}
				// valide sort order
				if (in_array($value['sort_order'], $sorts_alphabets)) {
					$json['sort_order'][$code] = true;
				}
				$sorts_alphabets[] = $value['sort_order'];
			}
			if (!empty($json['sort_order'])) {
				$json['error']['warning'] = $this->language->get('error_incorrect_sortorder');
			}
			if (isset($json['error']) && !isset($json['error']['warning'])) {
				$json['error']['warning'] = $this->language->get('error_warning');
			}

			if (!$json) {
				$this->model_setting_setting->editSetting('orderpro_setting', $this->request->post);
				$json['success'] = $this->language->get('text_field_settings_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'exporter/orderpro')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	protected function accessValidate() {
		if (!$this->user->hasPermission('access', 'exporter/orderpro')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}