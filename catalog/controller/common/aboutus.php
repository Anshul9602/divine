<?php
class ControllerCommonAboutus extends Controller {
    public function index() {
		$this->load->language('common/maintenance');

		$this->document->setTitle("About Us");

	

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_maintenance'),
			'href' => $this->url->link('common/maintenance')
		);

		$data['message'] = $this->language->get('text_message');

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/about', $data));
	}
}