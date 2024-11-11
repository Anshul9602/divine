<?php
class ControllerCommonMessages extends Controller
{
	public function index()
	{
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		$filter_data = array(

			'filter_customer'	     => $filter_customer,
			'filter_date_added'      => $filter_date_added,
		);


		$this->load->model('catalog/messages');
		$this->document->setTitle("Customer Messages");
		$data['user_token'] = $this->session->data['user_token'];
		$data['msgs'] = $this->model_catalog_messages->getAllMessages(($page - 1) * 10, 10, $filter_data);

		$history_total = $this->model_catalog_messages->getTotalMessages($filter_data);

		$pagination = new Pagination();
		$pagination->total = $history_total;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('common/messages', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($history_total - 10)) ? $history_total : ((($page - 1) * 10) + 10), $history_total, ceil($history_total / 10));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$data['filter_customer'] = $filter_customer;
		$data['filter_date_added'] = $filter_date_added;

		$this->response->setOutput($this->load->view('common/messages', $data));
	}

	public function deleteMessage()
	{
		$this->load->model('catalog/messages');
		$this->model_catalog_messages->deleteMessage($_GET['id']);
		$this->response->redirect($this->url->link('common/messages', 'user_token=' . $this->session->data['user_token'], true));
	}
}
