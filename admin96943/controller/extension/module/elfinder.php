<?php
//==============================================
// Elfinder Image Manager
// Author 	: OpenCartBoost
// Email 	: support@opencartboost.com
// Website 	: http://www.opencartboost.com
//==============================================
class ControllerExtensionModuleElfinder extends Controller {
	private $error = [];

	public function index() {
			
		$this->load->language('extension/module/elfinder');
		
		$this->document->setTitle($this->language->get('heading_title_mtitle'));
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$this->load->model('tool/image');
				
		//edit module
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() && !isset($this->request->get['target']) && !isset($this->request->get['from'])) {
			$this->load->model('setting/setting');
			
			$this->model_setting_setting->editSetting('module_elfinder', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
				
		// Find which protocol to use to pass the full image link back
		if ($this->request->server['HTTPS']) {
			$server = HTTPS_CATALOG;
		} else {
			$server = HTTP_CATALOG;
		}

		// Make sure we have the correct directory
		if (isset($this->request->get['directory'])) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . str_replace('*', '', $this->request->get['directory']), '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}
		
		$data['path'] = $server.'image/';
		
		$data['user_token'] = $this->session->data['user_token'];
        

		//error warning
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		//for edit module page
		$data['breadcrumbs'] = [];
		
		$data['breadcrumbs'][] = [
       		'text'      => $this->language->get('text_home'),
			'href' 		=> $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
   		];

   		$data['breadcrumbs'][] = [
       		'text'      => $this->language->get('text_extension'),
			'href' 		=> $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
   		];
		
   		$data['breadcrumbs'][] = [
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/module/elfinder', 'user_token=' . $this->session->data['user_token'], true)
   		];
		
		
		//form url to process the edit page
		$data['action'] = $this->url->link('extension/module/elfinder', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		if (isset($this->request->post['pathurl'])) {
			$data['pathurl'] = $this->request->post['pathurl'];
		} else {
			$data['pathurl'] = $this->config->get('pathurl');
		}
		
		//installation status
		if (isset($this->request->post['module_elfinder_status'])) {
			$data['module_elfinder_status'] = $this->request->post['module_elfinder_status'];
		} else {
			$data['module_elfinder_status'] = $this->config->get('module_elfinder_status');
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		//set output
		$this->response->setOutput($this->load->view('extension/module/elfinder', $data));
	}
	
	public function connector() {			
        $autoload_path = '/view/javascript/elfinder/php/autoload.php';
        $autoload_full_path = DIR_APPLICATION.$autoload_path;		

        if (!file_exists($autoload_full_path)) {
            echo 'Error! File '.$autoload_path.' not exists!';
            //exit(1);
		}
		
		//$this->response->setOutput(json_encode($data));
        require $autoload_full_path;
		//echo($autoload_full_path);

        $opts = [
            // 'debug' => true,
            'roots' => [
                [
                    'driver' => 'LocalFileSystem',
                    'path' => DIR_IMAGE."/catalog",
                    'URL' => '../image/catalog',
					'uploadDeny'    => ['all'],                // All Mimetypes not allowed to upload
					'uploadAllow'   => ['image/x-ms-bmp', 'image/gif', 'image/webp', 'image/jpeg', 'image/png', 'image/x-icon', 'text/plain'], // Mimetype `image` and `text/plain` allowed to upload
					'uploadOrder'   => ['deny', 'allow'],      // allowed Mimetype `image` and `text/plain` only
					'accessControl' => 'access'                     // disable and hide dot starting files (OPTIONAL)
                ],
            ],
        ];

        // Run elFinder
        $connector = new elFinderConnector(new elFinder($opts));
        $connector->run();

    }	
	
	public function thumb(){
		$this->load->model('tool/image');
		
		if (isset($this->request->get['img_url'])) {
			$image = $this->request->get['img_url'];
			$thumb = $this->model_tool_image->resize($image, 100, 100);			
		}
		
		$this->response->setOutput(json_encode($thumb));
	}
	
	public function ui() {
		$this->load->language('extension/module/elfinder');
		
		$this->document->setTitle($this->language->get('heading_title_mtitle'));
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$this->load->model('tool/image');
			
		// Find which protocol to use to pass the full image link back
		if ($this->request->server['HTTPS']) {
			$server = HTTPS_CATALOG;
		} else {
			$server = HTTP_CATALOG;
		}

		// Make sure we have the correct directory
		if (isset($this->request->get['directory'])) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . str_replace('*', '', $this->request->get['directory']), '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}
		
		//append url of target and or thumb to connector
		$targeturlappend = '';
		$thumburlappend = '';
		$multiurlappend = '';
		$ovrurlappend = '';
		$lidurlappend = '';
		
		$data['option_value_row'] = '';
		$data['target'] = '';
		$data['thumb'] = '';
		$data['multi'] = '';
		$data['elfinder_language_id'] = '';
		
		if (isset($this->request->get['target'])) {
			$targeturlappend = '&target=' . $this->request->get['target'];
			$data['target'] = $this->request->get['target'];
		}
		
		if (isset($this->request->get['thumb'])) {
			$thumburlappend = '&thumb=' . $this->request->get['thumb'];
			$data['thumb'] = $this->request->get['thumb'];
		}
		
		if (isset($this->request->get['multi'])) {
			$multiurlappend = '&multi=' . $this->request->get['multi'];
			$data['multi'] = $this->request->get['multi'];
		}
		
		if (isset($this->request->get['option_value_row'])) {
			$ovrurlappend = '&option_value_row=' . $this->request->get['option_value_row'];
			$data['option_value_row'] = $this->request->get['option_value_row'];
		}
		
		if (isset($this->request->get['elfinder_language_id'])) {
			$lidurlappend = '&elfinder_language_id=' . $this->request->get['elfinder_language_id'];
			$data['elfinder_language_id'] = $this->request->get['elfinder_language_id'];
		}
		
		//detect from texteditor
		if (isset($this->request->get['from'])) {
			$data['from'] = 'texteditor';
		}
		
		$data['path'] = $server.'image/';
		
		$data['user_token'] = $this->session->data['user_token'];
        
		$data['connector_url'] = $this->url->link('extension/module/elfinder/connector', $targeturlappend.$thumburlappend.$multiurlappend.$ovrurlappend.$lidurlappend.'&user_token='.$this->session->data['user_token']);

				//set output
		$this->response->setOutput($this->load->view('extension/module/elfinder_ui', $data));
	}	
	
	public function install(){
		$this->load->model('setting/setting');
		$this->model_setting_setting->editSetting('module_elfinder',['module_elfinder_status'=>1]);
		
		$this->vqmod_script_dir = substr_replace(DIR_SYSTEM, '/vqmod/xml/', -8);
		$vqmod_name = 'elfinder';
		
		if (is_file($this->vqmod_script_dir . $vqmod_name . '.xml_')) {
			rename($this->vqmod_script_dir . $vqmod_name . '.xml_', $this->vqmod_script_dir . $vqmod_name . '.xml');
		}
	}

	public function uninstall(){
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('module_elfinder');
		
		$this->vqmod_script_dir = substr_replace(DIR_SYSTEM, '/vqmod/xml/', -8);
		$vqmod_name = 'elfinder';
		
		if (is_file($this->vqmod_script_dir . $vqmod_name . '.xml')) {
			rename($this->vqmod_script_dir . $vqmod_name . '.xml', $this->vqmod_script_dir . $vqmod_name . '.xml_');
		}
	}	
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/elfinder')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		//do i need to validate pathurl?

		return !$this->error;
	}
}
