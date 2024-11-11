<?php
class ControllerExtensionModuleDependentOptions extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/dependent_options');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_dependent_options', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

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
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/dependent_options', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/dependent_options', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_dependent_options_css'])) {
			$data['module_dependent_options_css'] = $this->request->post['module_dependent_options_css'];
		} elseif (!is_null($this->config->get('module_dependent_options_css'))) {
			$data['module_dependent_options_css'] = $this->config->get('module_dependent_options_css');
		} else {
			$data['module_dependent_options_css'] = '#product [type="checkbox"][style*="block"], #product [type="radio"][style*="block"] {display: inline-block !important;}';
		}

		if (isset($this->request->post['module_dependent_options_status'])) {
			$data['module_dependent_options_status'] = $this->request->post['module_dependent_options_status'];
		} else {
			$data['module_dependent_options_status'] = $this->config->get('module_dependent_options_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/dependent_options', $data));
	}

	public function getOptionValues() {
		$json = array();

		if (isset($this->request->get['option_id'])) {
			$this->load->language('catalog/option');
			$this->load->model('catalog/option');
			$this->load->model('tool/image');

			$option_value_data = array();

			$option_values = $this->model_catalog_option->getOptionValues($this->request->get['option_id']);

			foreach ($option_values as $option_value) {
				if (is_file(DIR_IMAGE . $option_value['image'])) {
					$image = $this->model_tool_image->resize($option_value['image'], 30, 30);
				} else {
					$image = '';
				}

				$option_value_data[] = array(
					'option_value_id' => $option_value['option_value_id'],
					'name'            => strip_tags(html_entity_decode($option_value['name'], ENT_QUOTES, 'UTF-8')),
					'image'           => $image
				);
			}

			$sort_order = array();

			foreach ($option_value_data as $key => $value) {
				$sort_order[$key] = $value['name'];
			}

			array_multisort($sort_order, SORT_ASC, $option_value_data);

			$json = $option_value_data;

		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function install() {
		$this->load->model('setting/event');

		$this->model_setting_event->addEvent('dependent_options', 'catalog/view/product/product/before', 'extension/module/dependent_options/catalogViewProductBefore');

		$this->load->model('extension/module/dependent_options');

		$this->model_extension_module_dependent_options->alterTables();
	}

	public function uninstall(){
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('dependent_options');
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/dependent_options')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}