<?php
class ControllerExtensionModulePbdp extends Controller {
	private $error = array();
	private $modelpath;
	private $modulepath;
	private $classname;
	private $languagepath;
	private $sslvalue;
	private $tokenname;
	private $returnpath;
	private $opencartversion;
	private $customerpath;
	private $postarray = array();
	private $data = array();

	public function __construct($registry) {
		parent::__construct($registry);
		$this->classname = "pbdp";
		$this->config->load("cartbinder/".$this->classname);
		$this->modelpath = $this->config->get("modelpath");
		$this->modulepath = $this->config->get("modulepath");
		$this->languagepath = $this->config->get("languagepath");
		$this->sslvalue = $this->config->get("sslvalue");
		$this->tokenname = $this->config->get("tokenname");
		$this->returnpath = $this->config->get("returnpath");
		$this->postarray = $this->config->get("postarray");
		$this->opencartversion = str_replace(".","",VERSION);

		$this->load->language($this->languagepath);
		$languagetexts = $this->load->language($this->languagepath);
		foreach ($languagetexts as $key => $value) {
			$this->data[$key] = $value;
		}


		$this->load->model($this->modelpath);

		$this->load->model('setting/setting');
		$this->load->model('localisation/language');
		$this->load->model('localisation/country');
		$this->load->model('setting/store');
		$this->load->model('tool/image');
		$this->load->model('localisation/zone');
		$this->load->model("catalog/category");
		$this->load->model("catalog/product");

	}

	public function index() {
		$this->model_extension_module_pbdp->createTable();
		$this->getCityList();
	}

	public function addcity() {

		$this->document->setTitle($this->language->get('heading_title_city'));


		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_module_pbdp->addpingroup($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue));
		}

		$this->getCityForm();
	}

	public function editcity() {

		$this->document->setTitle($this->language->get('heading_title_city'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_module_pbdp->editpingroup($this->request->get['pingroup_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue));
		}

		$this->getCityForm();
	}

	public function deletecity() {

		$this->document->setTitle($this->language->get('heading_title'));

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $pingroup_id) {
				$this->model_extension_module_pbdp->deletepingroup($pingroup_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue));
		}

		$this->getCityList();
	}

	protected function getCityList() {

		$data = $this->data;

		$this->document->setTitle($this->language->get('heading_title_city'));

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'l.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['links'] = $this->loadMenu();

		$data['breadcrumbs'] =   array();

		$data['breadcrumbs'][] =   array(
			'text' =>  $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue)
		);

		$data['breadcrumbs'][] =   array(
			'text' =>  $this->language->get('heading_title_city'),
			'href' =>  $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue)
		);

		$data['add'] = $this->url->link($this->modulepath.'/addcity', $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue);
		$data['delete'] = $this->url->link($this->modulepath.'/deletecity', $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue);

		$data['pingroups'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$pingroup_total = $this->model_extension_module_pbdp->getTotalpingroups();

		$results = $this->model_extension_module_pbdp->getpingroups($filter_data);

		foreach ($results as $result) {
			$areas  = $this->model_extension_module_pbdp->getTotalAreas($result['pingroup_id']);
			$areatext = sprintf($this->language->get('number_of_areas'),$areas);
			$data['pingroups'][] =   array(
				'pingroup_id' => $result['pingroup_id'],
				'name'        => $result['name'],
				'areatext'		=> $areatext,
				'townhref'        => $this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&filter_pingroup_id=' . $result['pingroup_id'] , $this->sslvalue),
				'edit'        => $this->url->link($this->modulepath.'/editcity', $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&pingroup_id=' . $result['pingroup_id'] . $url, $this->sslvalue)
			);
		}

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

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&sort=name' . $url, $this->sslvalue);
		$data['sort_address'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&sort=address' . $url, $this->sslvalue);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $pingroup_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url . '&page={page}', $this->sslvalue);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($pingroup_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($pingroup_total - $this->config->get('config_limit_admin'))) ? $pingroup_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $pingroup_total, ceil($pingroup_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pbdp_citylist', $data));
	}

	protected function getCityForm() {

		$data = $this->data;

		$data['heading_title'] = $this->language->get('heading_title_city');

		$data['text_form'] = !isset($this->request->get['pingroup_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['links'] = $this->loadMenu();

		$data['user_token'] = $this->session->data['user_token'];
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title_city'),
			'href' => $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue)
		);

		if (!isset($this->request->get['pingroup_id'])) {
			$data['action'] = $this->url->link($this->modulepath.'/addcity', $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue);
		} else {
			$data['action'] = $this->url->link($this->modulepath.'/editcity', $this->tokenname.'=' . $this->session->data[$this->tokenname] .  '&pingroup_id=' . $this->request->get['pingroup_id'] . $url, $this->sslvalue);
		}

		$data['cancel'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url, $this->sslvalue);

		if (isset($this->request->get['pingroup_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$pingroup_info = $this->model_extension_module_pbdp->getpingroup($this->request->get['pingroup_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($pingroup_info)) {
			$data['name'] = $pingroup_info['name'];
		} else {
			$data['name'] =   '';
		}

		if (isset($this->request->post['zone_id'])) {
			$data['zone_id'] = $this->request->post['zone_id'];
		} elseif (!empty($pingroup_info)) {
			$data['zone_id'] = $pingroup_info['zone_id'];
		} else {
			$data['zone_id'] =   '';
		}

		if (isset($this->request->post['country_id'])) {
			$data['country_id'] = $this->request->post['country_id'];
		} elseif (!empty($pingroup_info)) {
			$data['country_id'] = $pingroup_info['country_id'];
		} else {
			$data['country_id'] =   '';
		}

		$this->load->model('localisation/country');
		$data['countries'] = $this->model_localisation_country->getCountries();

		if (isset($this->request->post['geocode'])) {
			$data['geocode'] = $this->request->post['geocode'];
		} elseif (!empty($pingroup_info)) {
			$data['geocode'] = $pingroup_info['geocode'];
		} else {
			$data['geocode'] = '';
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($pingroup_info)) {
			$data['image'] = $pingroup_info['image'];
		} else {
			$data['image'] = '';
		}

		if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
		} elseif (!empty($pingroup_info) && is_file(DIR_IMAGE . $pingroup_info['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($pingroup_info['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['comment'])) {
			$data['comment'] = $this->request->post['comment'];
		} elseif (!empty($pingroup_info)) {
			$data['comment'] = $pingroup_info['comment'];
		} else {
			$data['comment'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pbdp_cityform', $data));
	}

	protected function validateForm() {
		$data = $this->data;
		if (!$this->user->hasPermission('modify', $this->modulepath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['name'])) {
		 	if((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 32)) {
				$this->error['name'] = $this->language->get('error_name');
		 	}	
		}

		return !$this->error;
	}

	protected function validateDelete() {
		$data = $this->data;
		if (!$this->user->hasPermission('modify', $this->modulepath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function country() {

		$json = array();

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name'],
				'start'       => 0,
				'limit'       => 5
			);

			$results = $this->model_extension_module_pbdp->getpingroups($filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'pingroup_id' => $result['pingroup_id'],
					'name'            => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function assignProducts() {
    
      $data = $this->data;
      $this->document->setTitle($this->language->get('heading_title_productlocation')); 
      
      $data['categories'] =  $this->model_catalog_category->getCategories();
      $data['entry_majorcity'] = "Select Citie For This Import:";
      $data['majorcities'] = $this->model_extension_module_pbdp->getpingroups();
      $data['countries'] = $this->model_extension_module_pbdp->getdistinctcountries();

      foreach($data['countries'] as $key=>$value) {
      	$name = $this->model_localisation_country->getCountry($value['country_id']);
      	if(!empty($name)) {
      		$data['countries'][$key]['name'] = $name['name'];
      	} else {
      		$data['countries'][$key]['name'] = "";
      	}
      }

      if(count($data['countries']) == 1) {
      	$data['countries'] = array();
      }

      $data['exportct'] = $this->url->link($this->modulepath.'/exportct',$this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
      $data['importct'] = $this->url->link($this->modulepath.'/importpids',$this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
      $data['delete'] = $this->url->link($this->modulepath.'/delete',$this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);      
      $data['action'] = $this->url->link($this->modulepath,$this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);

      if (isset($this->error['warning'])) {
        $data['error_warning'] = $this->error['warning'];
      } else {
        $data['error_warning'] = '';
      }

      $data['breadcrumbs'] = array();

      $data['breadcrumbs'][] = array(
          'text'      => $this->language->get('text_home'),
      'href'      => $this->url->link('common/home', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
      'separator' => false
      );

      $data['breadcrumbs'][] = array(
          'text'      => $this->language->get('heading_title_productlocation'),
      'href'      => $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
          'separator' => ' :: '
      );

      if (isset($this->session->data['success'])) {
        $data['success'] = $this->session->data['success']; 
        unset($this->session->data['success']);
      } else {
        $data['success'] = '';
      }

      if (isset($this->session->data['error'])) {
        $data['error'] = $this->session->data['error']; 
        unset($this->session->data['error']);
      } else {
        $data['error'] = '';
      }

      $data['payments'] = $this->model_extension_module_pbdp->getExtensions('payment');
      $data['shippings'] = $this->model_extension_module_pbdp->getExtensions('shipping');
      
      $data['shippingactive'] = $this->config->get('pbdp_pinshipping');
      $data['paymentactive'] = $this->config->get('pbdp_pinpayment');
      
      $data['links'] = $this->loadMenu();
      $data['cancel'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] , $this->sslvalue);

      $data['user_token'] = $this->session->data['user_token'];
                      
      $data['header'] = $this->load->controller('common/header');
      $data['column_left'] = $this->load->controller('common/column_left');
      $data['footer'] = $this->load->controller('common/footer');

      $this->response->setOutput($this->load->view('extension/module/pbdp_productassign', $data));
    }

    public function exportct() {
    	
        if (isset($this->request->post['product_category']) && !empty($this->request->post['product_category'])) {
        	
            $productstoexport = array();
            foreach ($this->request->post['product_category'] as $key => $value) {
                $getproducts = $this->model_catalog_product->getProductsByCategoryId($value);
                foreach ($getproducts as $key => $value) {
                  $productstoexport[$value['product_id']]['product_id'] = $value['product_id'];
                  $productstoexport[$value['product_id']]['name'] = $value['name'];
                }
        	}

	        if(isset($this->request->post['product_majorcity'])) {
	          $product_majorcity = $this->request->post['product_majorcity'];
	        } else {
	          $product_majorcity = array();
	        }

	        if(isset($this->request->post['deleteold'])) {
	          $deleteold = 1;
	        } else {
	          $deleteold = 0;
	        }
	        
	        if(!empty($product_majorcity)) {
		        $chunks = array_chunk($productstoexport, 1000);
		        
		        foreach($chunks as $chunk){
		           foreach($chunk as $pins){
		              $this->model_extension_module_pbdp->bulkAdd($pins,$product_majorcity,$deleteold);
		            }
		        }
		        $this->session->data['success'] = "Product updated to location successfully";
		    }    
        } else {
        	$this->session->data['error'] = "You must select atleast one category to assign to city";
        }
        $this->response->redirect($this->url->link($this->modulepath.'/assignProducts', $this->tokenname.'=' . $this->session->data[$this->tokenname] , $this->sslvalue));
    }

    public function getTownList() {

    	$data = $this->data;

		$this->model_extension_module_pbdp->createTable();

		$this->document->setTitle($this->language->get('heading_title_area'));
		if (isset($this->request->get['filter_zipcode'])) {
			$filter_zipcode = $this->request->get['filter_zipcode'];
		} else {
			$filter_zipcode = null;
		}

		if (isset($this->request->get['filter_areaname'])) {
			$filter_areaname = $this->request->get['filter_areaname'];
		} else {
			$filter_areaname = null;
		}

		if (isset($this->request->get['filter_pingroup_id'])) {
			$filter_pingroup_id = $this->request->get['filter_pingroup_id'];
		} else {
			$filter_pingroup_id = null;
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = null;
		}

		if (isset($this->request->get['filter_payment'])) {
			$filter_payment = $this->request->get['filter_payment'];
		} else {
			$filter_payment = null;
		}

  		$data['breadcrumbs'][] = array(
       		'href'      => $this->url->link('common/home', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
       		'text'      => $this->language->get('text_home'),
      		'separator' => FALSE
   		);

  		$data['breadcrumbs'][] = array(
       		'href'      => $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
       		'text'      => $this->language->get('heading_title_area'),
      		'separator' => ' :: '
   		);
							
		
		$data['insert'] = $this->url->link($this->modulepath.'/inserttown', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
		$data['delete'] = $this->url->link($this->modulepath.'/deleteTown', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
		$data['links'] = $this->loadMenu();
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'zip_code_id';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		$data1 = array(
			'filter_zipcode'	  => $filter_zipcode,
			'filter_areaname' => $filter_areaname,
			'filter_status'   => $filter_status,
			'filter_pingroup_id'   => $filter_pingroup_id,
			'filter_payment'   => $filter_payment,
			'sort'            => $sort,
			'order'           => $order,
			'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'           => $this->config->get('config_limit_admin')
		);
		
		$pin_total = $this->model_extension_module_pbdp->getTotalpins($data1);
		$results = $this->model_extension_module_pbdp->getpins($data1,($page - 1) * $this->config->get('config_limit_admin'),$this->config->get('config_limit_admin'));
		$data['payments'] = $this->model_extension_module_pbdp->getExtensions('payment');
		$cityname = $this->model_extension_module_pbdp->getCities();

		$data['citylist'] = $this->model_extension_module_pbdp->getpingroups();
		$data['pins'] = array();
		foreach ($results as $result) {
			$action = array();
			
			$action[] = array(
				'text' => $this->language->get('text_edit'),
				'href' => $this->url->link($this->modulepath.'/updateTown', $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&zip_code_id=' . $result['zip_code_id'], $this->sslvalue)
			);		

			$data['pins'][] = array(
				'zip_code_id' 		 => $result['zip_code_id'],
				'area_name' 		 => $result['area_name'],
				'message' 		 => $result['message'],
				'city_name' 		 => isset($cityname[$result['pingroup_id']]) ? $cityname[$result['pingroup_id']] : "",
				'paymentids'		=> $this->model_extension_module_pbdp->getExtension($result['zip_code']),
				'zip_code' 	 => $result['zip_code'],
				'date_added' 	 => $result['date_added'],
				'status' 	 => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'action'     => $action
			);
		}	
	
		$data['user_token'] = $this->session->data['user_token'];
		$data['paymentactive'] = $this->config->get('imdev_config_pinpayment');
		
		$url = '';

		if (isset($this->request->get['filter_zipcode'])) {
			$url .= '&filter_zipcode=' . urlencode(html_entity_decode($this->request->get['filter_zipcode'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_areaname'])) {
			$url .= '&filter_areaname=' . urlencode(html_entity_decode($this->request->get['filter_areaname'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_pingroup_id'])) {
			$url .= '&filter_pingroup_id=' . urlencode(html_entity_decode($this->request->get['filter_pingroup_id'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_payment'])) {
			$url .= '&filter_payment=' . urlencode(html_entity_decode($this->request->get['filter_payment'], ENT_QUOTES, 'UTF-8'));
		}
								
		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
 
		$data['sort_zip_code'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&sort=zip_code' . $url, $this->sslvalue);
		$data['sort_area_name'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&sort=area_name' . $url, $this->sslvalue);
		$data['sort_status'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&sort=status' . $url, $this->sslvalue);
		$data['sort_date_added'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&sort=date_added' . $url, $this->sslvalue);

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

		if (isset($this->session->data['warning'])) {
			$data['error_warning'] = $this->session->data['warning'];	
			unset($this->session->data['warning']);
		} else {
			$data['error_warning'] = '';
		}
		
		$url = "";
		
		if (isset($this->request->get['filter_zipcode'])) {
			$url .= '&filter_zipcode=' . urlencode(html_entity_decode($this->request->get['filter_zipcode'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_areaname'])) {
			$url .= '&filter_areaname=' . urlencode(html_entity_decode($this->request->get['filter_areaname'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_pingroup_id'])) {
			$url .= '&filter_pingroup_id=' . urlencode(html_entity_decode($this->request->get['filter_pingroup_id'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_payment'])) {
			$url .= '&filter_payment=' . urlencode(html_entity_decode($this->request->get['filter_payment'], ENT_QUOTES, 'UTF-8'));
		}
								
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		
		$pagination = new Pagination();
		$pagination->total = $pin_total;
		$pagination->page  = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url   = $this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname] . $url . '&page={page}', $this->sslvalue);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($pin_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($pin_total - $this->config->get('config_limit_admin'))) ? $pin_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $pin_total, ceil($pin_total / $this->config->get('config_limit_admin')));

		$data['filter_zipcode'] = $filter_zipcode;
		$data['filter_areaname'] = $filter_areaname;
		$data['filter_pingroup_id'] = $filter_pingroup_id;
		$data['filter_status'] = $filter_status;
		$data['filter_payment'] = $filter_payment;
		
		$data['sort'] = $sort;
		$data['order'] = $order;


		$data['sort_name'] = $this->url->link($this->modulepath.'/', $this->tokenname.'=' . $this->session->data[$this->tokenname]);
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pbdp_townlist', $data));
 	}

 	public function getTownForm() {
 		$data = $this->data;
		$url = '';
		$this->document->setTitle($this->language->get('heading_title_area'));
		
 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
	
  		$data['breadcrumbs'] = array();

  		$data['breadcrumbs'][] = array(
       		'href'      => $this->url->link('common/home', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
       		'text'      => $this->language->get('text_home'),
      		'separator' => FALSE
   		);

  		$data['breadcrumbs'][] = array(
       		'href'      => $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
       		'text'      => $this->language->get('heading_title_area'),
      		'separator' => ' :: '
   		);
			
		if (!isset($this->request->get['zip_code_id'])) {
			$data['action'] = $this->url->link($this->modulepath.'/insertTown', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
		} else {
			$data['action'] = $this->url->link($this->modulepath.'/updateTown', $this->tokenname.'=' . $this->session->data[$this->tokenname] . '&zip_code_id=' . $this->request->get['zip_code_id'], $this->sslvalue);
		}
		
		$data['user_token'] = $this->session->data['user_token'];
		  
    	$data['cancel'] = $this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);

    	$data['links'] = $this->loadMenu();

		if (isset($this->request->get['zip_code_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$pin_info = $this->model_extension_module_pbdp->getpin($this->request->get['zip_code_id']);
		}		

		if (isset($this->request->get['zip_code_id'])) {
			$data['zip_code_id'] = $this->request->get['zip_code_id'];
		}
		
		$data['stores'] = array();
		
		$data['stores'][] = array(
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		);

		$stores = $this->model_setting_store->getStores();
		foreach ($stores as $store) {
			$data['stores'][] = array(
				'store_id' => $store['store_id'],
				'name'     => $store['name']
			);
		}
		
		if (isset($this->request->post['store'])) {
			$data['store_ids'] = $this->request->post['store'];
		} elseif (isset($pin_info)) {
			$data['store_ids'] = $this->model_extension_module_pbdp->getStores($this->request->get['zip_code_id']);
		} else {
			$data['store_ids'] = array(0);
		}
		
		if (isset($this->request->post['pin_code'])) {
			$data['pin_code'] = $this->request->post['pin_code'];
		} elseif (isset($pin_info)) {
			$data['pin_code'] = $pin_info['zip_code'];
		} else {
			$data['pin_code'] = '';
		}
		
		if (isset($this->request->post['area_name'])) {
			$data['area_name'] = $this->request->post['area_name'];
		} elseif (isset($pin_info)) {
			$data['area_name'] = $pin_info['area_name'];
		} else {
			$data['area_name'] = '';
		}

		if (isset($this->request->post['message'])) {
			$data['message'] = $this->request->post['message'];
		} elseif (isset($pin_info)) {
			$data['message'] = $pin_info['message'];
		} else {
			$data['message'] = '';
		}
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (isset($pin_info)) {
			$data['status'] = $pin_info['status'];
		} else {
			$data['status'] = '1';
		}

		$data['payments'] = $this->model_extension_module_pbdp->getExtensions('payment');

		foreach ($data['payments'] as $key => $value) {
			if(!$this->config->get("payment_".$value['code']."_status")) {
				unset($data['payments'][$key]);
			}
		}
		
		if (isset($this->request->post['paymentids'])) {
			$data['paymentids'] = $this->request->post['paymentids'];
		} elseif (isset($pin_info['zip_code'])) {
			$data['paymentids'] = $this->model_extension_module_pbdp->getExtension($pin_info['zip_code']);
		} else {
			$data['paymentids'] = array();
		}

		$data['shippings'] = $this->model_extension_module_pbdp->getExtensions('shipping');

		foreach ($data['shippings'] as $key => $value) {
			if(!$this->config->get("shipping_".$value['code']."_status")) {
				unset($data['shippings'][$key]);
			}
		}

		
		if (isset($this->request->post['shippingids'])) {
			$data['shippingids'] = $this->request->post['shippingids'];
		} elseif (isset($pin_info['zip_code'])) {
			$data['shippingids'] = $this->model_extension_module_pbdp->getSExtension($pin_info['zip_code']);
		} else {
			$data['shippingids'] = array();
		}

		if (isset($this->request->post['pingroup_id'])) {
			$data['pingroup_id'] = $this->request->post['pingroup_id'];
		} elseif (!empty($pin_info)) {
			$data['pingroup_id'] = $pin_info['pingroup_id'];
		} else {
			$data['pingroup_id'] = 0;
		}

		if (isset($this->request->post['pingroup'])) {
			$data['pingroup'] = $this->request->post['pingroup'];
		} elseif (!empty($pin_info)) {
			$pingroup_info = $this->model_extension_module_pbdp->getpingroup($pin_info['pingroup_id']);

			if ($pingroup_info) {
				$data['pingroup'] = $pingroup_info['name'];
			} else {
				$data['pingroup'] = '';
			}
		} else {
			$data['pingroup'] = '';
		}

			
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/pbdp_townform', $data));
	}

	private function validateTownForm() {

		if (!$this->user->hasPermission('modify', $this->modulepath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

	 	if(isset($this->request->post['zip_code_id']) and $this->request->post['zip_code_id']!=""){
			if(trim($this->request->post['pin_code']) == "") {
			 	$this->error['warning'] = $this->language->get('error_pin_empty');
			}
		}
		

		if(isset($this->request->post['pingroup_id']) and $this->request->post['pingroup_id'] == ""){
			$this->error['warning'] = $this->language->get('error_pingroup_exist');
		}

		if (!$this->error) {
			return $this->sslvalue;
		} else {
			return FALSE;
		}
	}

	private function validateTownEForm() {
		
		if (!$this->user->hasPermission('modify', $this->modulepath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

	 	if(isset($this->request->post['zip_code_id']) and $this->request->post['zip_code_id']!=""){

	 		if(trim($this->request->post['pin_code']) == "") {
			 	$this->error['warning'] = $this->language->get('error_pin_empty');
			}
		}
		if(isset($this->request->post['pingroup_id']) and $this->request->post['pingroup_id']==""){
			$this->error['warning'] = $this->language->get('error_pingroup_exist');
		}
	
		if (!$this->error) {
			return $this->sslvalue;
		} else {
			return FALSE;
		}
	}

	public function insertTown() {
		$data = $this->data;
		$this->document->setTitle($this->language->get('heading_title'));
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateTownEForm()) {
			$this->model_extension_module_pbdp->addpin($this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			
			$this->response->redirect($this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname].$url, $this->sslvalue));
		}

		$this->getTownForm();
	}

	public function updateTown() {

		$this->document->setTitle($this->language->get('heading_title'));		
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateTownForm()) {
			$this->model_extension_module_pbdp->editpin($this->request->get['zip_code_id'], $this->request->post);
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			
			$this->response->redirect($this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname].$url, $this->sslvalue));
		}

		$this->getTownForm();
	}
		
	public function deleteTown() { 
		$this->document->setTitle($this->language->get('heading_title_area'));		
		
		if (isset($this->request->post['selected']) && $this->validateForm()) {
      		foreach ($this->request->post['selected'] as $zip_code_id) {
				$this->model_extension_module_pbdp->deletepin($zip_code_id);	
			}
						
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			
			$this->response->redirect($this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname].$url, $this->sslvalue));
		}

		$this->getTownList();
	}

	public function getTownImportForm() {
		$data = $this->data;
        $this->document->setTitle($this->language->get('heading_title_areaimport')); 
      
        $data['exportct'] = $this->url->link($this->modulepath.'/exporttowns',$this->tokenname.'=' . $this->session->data[$this->tokenname],$this->sslvalue);
        $data['exportreference'] = $this->url->link($this->modulepath.'/exportreference',$this->tokenname.'=' . $this->session->data[$this->tokenname],$this->sslvalue);
        $data['importct'] = $this->url->link($this->modulepath.'/importtowns',$this->tokenname.'=' . $this->session->data[$this->tokenname],$this->sslvalue);
        $data['delete'] = $this->url->link($this->modulepath.'/delete',$this->tokenname.'=' . $this->session->data[$this->tokenname],$this->sslvalue);      
        $data['action'] = $this->url->link($this->modulepath.'/deleleAllTowns',$this->tokenname.'=' . $this->session->data[$this->tokenname],$this->sslvalue);
       
        if (isset($this->error['warning'])) {
          $data['error_warning'] = $this->error['warning'];
        } else {
          $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
        'href'      => $this->url->link('common/home', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
        'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title_areaimport'),
        'href'      => $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
            'separator' => ' :: '
        );

        if (isset($this->session->data['success'])) {
          $data['success'] = $this->session->data['success']; 
          unset($this->session->data['success']);
        } else {
          $data['success'] = '';
        }

        if (isset($this->session->data['error'])) {
          $data['error'] = $this->session->data['error']; 
          unset($this->session->data['error']);
        } else {
          $data['error'] = '';
        }

        $this->load->model($this->modulepath);
        $data['payments'] = $this->model_extension_module_pbdp->getExtensions('payment');
        $data['shippings'] = $this->model_extension_module_pbdp->getExtensions('shipping');
        foreach ($data['shippings'] as $key => $value) {
			if(!$this->config->get("shipping_".$value['code']."_status")) {
				unset($data['shippings'][$key]);
			}
		}
		foreach ($data['payments'] as $key => $value) {
			if(!$this->config->get("payment_".$value['code']."_status")) {
				unset($data['payments'][$key]);
			}
		}
        $data['links'] = $this->loadMenu();

        $data['cancel'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname] , $this->sslvalue);

        $data['user_token'] = $this->session->data['user_token'];
                        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/pbdp_townimport', $data));
    }

    public function exportreference() {

       $fields = array();
       $sample_data = array();
       $this->load->model("extension/module/pbdp");
       array_push($fields,'zip_code','area_name','status','message');
       $i = 0;
       $sample_data[$i]['zip_code'] = "111";
       $sample_data[$i]['area_name'] = "Area Name";
       $sample_data[$i]['status'] = "1";
       $sample_data[$i]['message'] = "Great We Deliver In Your Area";
       $version = str_replace(".","",VERSION);
       if($version < 2100) {
         $this->load->library('exportcsv');
       }
       $csv = new ExportCSV();
       $csv->fields = $fields;
       $csv->result = $sample_data;
       $csv->process();
       $csv->download('zip_code.csv');

    }

    public function exporttowns() {

       $fields = array();
       $sample_data = array();
       $pins = $this->model_extension_module_pbdp->getpins(array());
       array_push($fields,'zip_code','area_name','status','message');
       $i = 0;
      foreach ($pins as $key => $value) {
         $sample_data[$i]['zip_code'] = $value['zip_code'];
         $sample_data[$i]['area_name'] = $value['area_name'];
         $sample_data[$i]['status'] = $value['status'];
         $sample_data[$i]['message'] = $value['message'];
         $i = $i + 1;
       }
       $version = str_replace(".","",VERSION);
       if($version < 2100) {
         $this->load->library('exportcsv');
       }
       $csv = new ExportCSV();
       $csv->fields = $fields;
       $csv->result = $sample_data;
       $csv->process();
       $csv->download('zip_code.csv');

    }

    public function importtowns() {
         ini_set("auto_detect_line_endings", $this->sslvalue);   
          ini_set("memory_limit", "512M");
          ini_set("max_execution_time", 180);
          set_time_limit(0);
          if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
           $data = array();
           if(isset($this->request->post['paymentids'])) {
              $paymentids = $this->request->post['paymentids'];
           } else {
              $paymentids = array();
           }
           if(isset($this->request->post['deleteoldpayment'])) {
              $deleteoldpayment = $this->request->post['deleteoldpayment'];
           } else {
              $deleteoldpayment = 0;
           }
           if(isset($this->request->post['shippingids'])) {
              $shippingids = $this->request->post['shippingids'];
           } else {
              $shippingids = array();
           }
           if(isset($this->request->post['deleteoldshipping'])) {
              $deleteoldshipping = $this->request->post['deleteoldshipping'];
           } else {
              $deleteoldshipping = 0;
           }
           if(isset($this->request->post['pingroup_id'])) {
              $pingroup_id = $this->request->post['pingroup_id'];
           } else {
              $pingroup_id = array();
           }
           if(empty($pingroup_id)) {
           		$this->session->data['warning'] = "No City Selected. Kindly select city name in input box for the current upload";
           } else {
	           if (is_uploaded_file($this->request->files['download']['tmp_name'])) {
	                $filename = $this->request->files['download']['name'] . '.' . md5(rand());

	                move_uploaded_file($this->request->files['download']['tmp_name'], DIR_DOWNLOAD . $filename);

	                if (file_exists(DIR_DOWNLOAD . $filename)) {
	                  $this->load->model($this->modulepath);
	                  if (($file = file(DIR_DOWNLOAD . $filename)) !== FALSE) {
	                   
	                    $complete_data = array();
	                    $columns = array();
	                    $row = 1;
	                    foreach($file as $line) {
	                       if($row == 1){
	                          //$line = str_replace('"', '', $line);
	                          $line = str_replace("'", '', $line);
	                          $columns = explode(',', $line);
	                        //  $response = $this->validatecsv($columns);

	                          if(0) {
	                            $this->response->redirect($this->url->link($this->modulepath,$this->tokenname.'=' . $this->session->data[$this->tokenname]));
	                          }

	                        } else {
	                        
	                          $case =  array('$this->sslvalue' => 1, 'FALSE' => 0);
	                          $line = str_replace('"', '', $line);
	                           $line = str_replace("'", '', $line);
	                          $datarow = explode(',', $line);
	                          foreach($datarow as $key=>$val){
	                          	if($key < 4 ){
		                             $val = trim($val);
		                             $datarow[strtolower(trim($columns[$key]))] = isset($case[strtoupper($val)])?$case[strtoupper($val)]:$val;
		                             unset($datarow[$key]);
		                        }     
	                          }
	                          array_push($complete_data,$datarow);
	                        }
	                        $row++;
	                    }  
	                     $chunks = array_chunk($complete_data, 1000);
	                    
	                     foreach($chunks as $chunk){
	                       foreach($chunk as $pins){
	                          $this->model_extension_module_pbdp->bulkAddPins($pins,$paymentids,$shippingids,$pingroup_id,$deleteoldpayment,$deleteoldshipping);
	                        }
	                      }
	                      $this->session->data['success'] = "Areas are uploaded successfully";
	                  }
	                  unlink(DIR_DOWNLOAD . $filename);
	                }
	            } else {
	            	$this->session->data['warning'] = "No File Uploaded";
	            }
	        }  
        }
        
        $this->response->redirect($this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname] , $this->sslvalue));
    }

    public function deleleAllTowns() {
        $data['success'] = '';
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
           if($this->request->post['delete']) {
                if($this->request->post['delete'] == 'dc'){
                  $this->model_extension_module_pbdp->deletepins();
                 $this->session->data['success'] = $this->language->get('delete_success_towns');
                }
            }
        }
       $this->response->redirect($this->url->link($this->modulepath.'/getTownImportForm', $this->tokenname.'=' . $this->session->data[$this->tokenname] , $this->sslvalue));
    }

    public function settings() {

		$data = $this->data;
		
		$this->document->setTitle($this->language->get('heading_title_settings'));
				
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {

			foreach ($this->request->post as $key => $value) {
	    		$temp[$key] = $this->request->post[$key];
	    	}
			
			if(!isset($this->request->post['pbdp_defaultcity'])) {
				$this->request->post['pbdp_defaultcity'] = 0;
			}
			
 			$this->model_setting_setting->editSetting('pbdp', $temp);
			$this->session->data['success'] = $this->language->get('text_success');
		}

		$data['user_token'] = $this->session->data['user_token'];		
		$data['action'] = $this->url->link($this->modulepath.'/settings', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
		$data['cancel'] = $this->url->link('common/home', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue);
		$this->document->addScript('view/javascript/jquery/pinpro.js');

		foreach ($this->postarray as $key => $value) {
    		if(isset($this->request->post[$value])) {
    			$data[$value] = $this->request->post[$value];
    		} else {
    			$data[$value] = $this->config->get($value);
    		}
    	}

		$data['majorcities'] = $this->model_extension_module_pbdp->getpingroups();

		$data['displayareas'] = array("Display Both Arename and Postcode",'Display Only Areaname','Display Only Postcode','Display Only City Name');

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

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),     		
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title_settings'),
			'href'      => $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname], $this->sslvalue),
      		'separator' => ' :: '
   		);

		$data['links'] = $this->loadMenu();
				
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$data['oc_licensing_home'] = 'https://www.cartbinder.com/store/'; $data['extension_id'] = 25041; $admin_support_email = 'support@cartbinder.com'; $data['license_purchase_thanks'] = sprintf($this->language->get('license_purchase_thanks'), $admin_support_email); if(isset($this->request->get['emailmal'])){ $data['emailmal'] = $this->sslvalue; } if(isset($this->request->get['regerror'])){ if($this->request->get['regerror']=='emailmal'){ $this->error['warning'] = $this->language->get('regerror_email'); }elseif($this->request->get['regerror']=='orderidmal'){ $this->error['warning'] = $this->language->get('regerror_orderid'); }elseif($this->request->get['regerror']=='noreferer'){ $this->error['warning'] = $this->language->get('regerror_noreferer'); }elseif($this->request->get['regerror']=='localhost'){ $this->error['warning'] = $this->language->get('regerror_localhost'); }elseif($this->request->get['regerror']=='licensedupe'){ $this->error['warning'] = $this->language->get('regerror_licensedupe'); } } $domainssl = explode("//", HTTPS_SERVER); $domainnonssl = explode("//", HTTP_SERVER); $domain = ($domainssl[1] != '' ? $domainssl[1] : $domainnonssl[1]); $data['aurl'] = (HTTPS_SERVER !='' ? HTTPS_SERVER : HTTP_SERVER);$data['auri'] = (HTTPS_CATALOG !='' ? HTTPS_CATALOG : HTTP_CATALOG) . substr($_SERVER['REQUEST_URI'], 1); $data['domain'] = $domain; $data['licensed'] = @file_get_contents($data['oc_licensing_home'] . 'licensed.php?domain=' . $domain . '&extension=' . $data['extension_id']); if(!$data['licensed'] || $data['licensed'] == ''){ if(extension_loaded('curl')) { $post_data = array('domain' => $domain, 'extension' => $data['extension_id']); $curl = curl_init(); curl_setopt($curl, CURLOPT_HEADER, false); curl_setopt($curl, CURLINFO_HEADER_OUT, $this->sslvalue); curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17'); $follow_allowed = ( ini_get('open_basedir') || ini_get('safe_mode')) ? false : $this->sslvalue; if ($follow_allowed) { curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); } curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 9); curl_setopt($curl, CURLOPT_TIMEOUT, 60); curl_setopt($curl, CURLOPT_AUTOREFERER, $this->sslvalue); curl_setopt($curl, CURLOPT_VERBOSE, 1); curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl, CURLOPT_FORBID_REUSE, false); curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->sslvalue); curl_setopt($curl, CURLOPT_URL, $data['oc_licensing_home'] . 'licensed.php'); curl_setopt($curl, CURLOPT_POST, $this->sslvalue); curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data)); $data['licensed'] = curl_exec($curl); curl_close($curl); }else{ $data['licensed'] = 'curl'; } } $data['licensed_md5'] = md5($data['licensed']); $data['entry_free_support'] = $this->language->get('entry_free_support'); $order_details = @file_get_contents($data['oc_licensing_home'] . 'order_details.php?domain=' . $domain . '&extension=' . $data['extension_id']); $order_data = json_decode($order_details, $this->sslvalue); if(!is_array($order_data) || $order_data == ''){ if(extension_loaded('curl')) { $post_data2 = array('domain' => $domain, 'extension' => $data['extension_id']); $curl2 = curl_init(); curl_setopt($curl2, CURLOPT_HEADER, false); curl_setopt($curl2, CURLINFO_HEADER_OUT, $this->sslvalue); curl_setopt($curl2, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17'); $follow_allowed2 = ( ini_get('open_basedir') || ini_get('safe_mode')) ? false : $this->sslvalue; if ($follow_allowed2) { curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, 1); } curl_setopt($curl2, CURLOPT_CONNECTTIMEOUT, 9); curl_setopt($curl2, CURLOPT_TIMEOUT, 60); curl_setopt($curl2, CURLOPT_AUTOREFERER, $this->sslvalue); curl_setopt($curl2, CURLOPT_VERBOSE, 1); curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl2, CURLOPT_FORBID_REUSE, false); curl_setopt($curl2, CURLOPT_RETURNTRANSFER, $this->sslvalue); curl_setopt($curl2, CURLOPT_URL, $data['oc_licensing_home'] . 'order_details.php'); curl_setopt($curl2, CURLOPT_POST, $this->sslvalue); curl_setopt($curl2, CURLOPT_POSTFIELDS, http_build_query($post_data2)); $order_data = json_decode(curl_exec($curl2), $this->sslvalue); curl_close($curl2); }else{ $order_data['status'] = 'disabled'; } } if(isset($order_data['status']) && $order_data['status'] == 'enabled'){ $isSecure = false; if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) { $isSecure = $this->sslvalue; } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') { $isSecure = $this->sslvalue; } $data['support_status'] = 'enabled'; $data['support_order_id'] = $order_data['order_id']; $data['support_extension_name'] = $order_data['extension_name']; $data['support_domain'] = $order_data['domain']; $data['support_username'] = $order_data['username']; $data['support_email'] = $order_data['email']; $data['support_registered_date'] = strftime('%Y-%m-%d', $order_data['registered_date']); $data['support_order_date'] = strftime('%Y-%m-%d', ($order_data['order_date'] + 31536000)); if((time() - $order_data['order_date']) > 31536000){ $data['text_free_support_remaining'] = sprintf($this->language->get('text_free_support_expired'), 1, ($isSecure ? 1 : 0), urlencode($domain) , $data['extension_id'] , $this->session->data['user_token']); }else{ $data['text_free_support_remaining'] = sprintf($this->language->get('text_free_support_remaining'), 366 - ceil((time() - $order_data['order_date']) / 86400)); } }else{ $data['support_status'] = 'disabled'; $data['text_free_support_remaining'] = sprintf($this->language->get('text_free_support_remaining'), 'unknown'); }

		$this->response->setOutput($this->load->view('extension/module/pbdp_settings', $data));
	}

	public function loadMenu() {
		$data = $this->data;
        $temp = array();
        $temp['text_howitworks'] = $this->language->get('text_howitworks');
		$temp['text_howitworks_content'] = $this->language->get('text_howitworks_content');

        $temp['links'][0]['href'] = $this->url->link($this->modulepath, $this->tokenname.'=' . $this->session->data[$this->tokenname], 'SSL');
		$temp['links'][1]['href'] = $this->url->link($this->modulepath.'/assignProducts', $this->tokenname.'=' . $this->session->data[$this->tokenname], 'SSL');
		$temp['links'][2]['href'] = $this->url->link($this->modulepath.'/getTownList', $this->tokenname.'=' . $this->session->data[$this->tokenname], 'SSL');
		$temp['links'][3]['href'] = $this->url->link($this->modulepath.'/getTownImportForm', $this->tokenname.'=' . $this->session->data[$this->tokenname], 'SSL');
		$temp['links'][4]['href'] = $this->url->link($this->modulepath.'/settings', $this->tokenname.'=' . $this->session->data[$this->tokenname], 'SSL');
		$temp['links'][0]['text'] = $this->language->get('text_majorcities');
		$temp['links'][1]['text'] = $this->language->get('text_producttocity');
		$temp['links'][2]['text'] = $this->language->get('text_pinlist');
		$temp['links'][3]['text'] = $this->language->get('text_pinimport');
		$temp['links'][4]['text'] = $this->language->get('text_pinsetting');
		$temp['links'][0]['type'] = "primary";
		$temp['links'][1]['type'] = "primary";
		$temp['links'][2]['type'] = "info";
		$temp['links'][3]['type'] = "info";
		$temp['links'][4]['type'] = "success";
		$temp['links'][0]['font'] = "location-arrow";
		$temp['links'][1]['font'] = "random";
		$temp['links'][2]['font'] = "list";
		$temp['links'][3]['font'] = "bolt";
		$temp['links'][4]['font'] = "cogs";

		$menuhtml = $this->load->view('extension/module/pbdp_menu', $temp);
        return $menuhtml;
    }
}