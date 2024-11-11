<?php
class ControllerExtensionShippingPbdps extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/shipping/pbdps');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('shipping_pbdps', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', TRUE));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_shipping'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', TRUE)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/pbdps', 'user_token=' . $this->session->data['user_token'], TRUE)
		);

		$data['action'] = $this->url->link('extension/shipping/pbdps', 'user_token=' . $this->session->data['user_token'], TRUE);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', TRUE);

		if (isset($this->request->post['shipping_pbdps_status'])) {
			$data['shipping_pbdps_status'] = $this->request->post['shipping_pbdps_status'];
		} else {
			$data['shipping_pbdps_status'] = $this->config->get('shipping_pbdps_status');
		}

		if (isset($this->request->post['shipping_pbdps_quantitymultiply'])) {
			$data['shipping_pbdps_quantitymultiply'] = $this->request->post['shipping_pbdps_quantitymultiply'];
		} else {
			$data['shipping_pbdps_quantitymultiply'] = $this->config->get('shipping_pbdps_quantitymultiply');
		}

		if (isset($this->request->post['shipping_pbdps_expressshipping'])) {
			$data['shipping_pbdps_expressshipping'] = $this->request->post['shipping_pbdps_expressshipping'];
		} else {
			$data['shipping_pbdps_expressshipping'] = $this->config->get('shipping_pbdps_expressshipping');
		}

		if (isset($this->request->post['shipping_pbdps_highestprice'])) {
			$data['shipping_pbdps_highestprice'] = $this->request->post['shipping_pbdps_highestprice'];
		} else {
			$data['shipping_pbdps_highestprice'] = $this->config->get('shipping_pbdps_highestprice');
		}

		if (isset($this->request->post['shipping_pbdps_tax_class_id'])) {
			$data['shipping_pbdps_tax_class_id'] = $this->request->post['shipping_pbdps_tax_class_id'];
		} else {
			$data['shipping_pbdps_tax_class_id'] = $this->config->get('shipping_pbdps_tax_class_id');
		}

		$this->load->model('localisation/tax_class');

		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		if (isset($this->request->post['shipping_pbdps_sort_order'])) {
			$data['shipping_pbdps_sort_order'] = $this->request->post['shipping_pbdps_sort_order'];
		} else {
			$data['shipping_pbdps_sort_order'] = $this->config->get('shipping_pbdps_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/shipping/pbdps', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/pbdps')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}