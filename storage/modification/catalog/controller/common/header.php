<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();
if(file_exists('catalog/model/extension/fbcapidyad.php')) { 
			$this->load->model('extension/fbcapidyad');
			$data['analytics'][] = $this->model_extension_fbcapidyad->pageview();
		}

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');
		$this->load->model('catalog/category');

		$coupon = $this->model_catalog_category->getCouponById(4);
		
		$data["coupon_name"] = $coupon['name'];
		$data["code"]= $coupon['code'];
		$data["discount"] = $coupon['discount'];


		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}


/********************************************/
/*******ip and location logic  starts********/
/********************************************/

if(!isset($this->session->data['visitor_country']))	{
	
	$ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:
	getenv('REMOTE_ADDR');
	
	$this->session->data['ip'] = $ip;
	
	
	$url= "http://ip-api.com/json/".$ip;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_ENCODING, ""); // this will handle gzip content
	$result = curl_exec($ch);
	curl_close($ch);
	
	$geo_code1 = json_decode($result);
	
	
	
	
	$this->session->data['visitor_country'] = $geo_code1->country;
	
	  
	  if($this->session->data['visitor_country'] == "India"){
	   $this->session->data['currency'] = "INR";
	  
	  }else{
	   $this->session->data['currency'] = "USD";
	 
	  }
	}else{
		 
	 if(!isset($this->session->data['currency'])){
		  if($this->session->data['visitor_country'] !== "India"){
	   $this->session->data['currency'] = "USD";
	
	  }else{
		 
		
		 $this->session->data['currency'] = "USD";
	   
		
		  }	 
			 }
		
	
		}	
	
	/********************************************/
	/*******ip and location logic  starts********/
	/********************************************/
			
			
			$data['currency_name']= $this->session->data['currency'];
	

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		if ($this->customer->isLogged()) {
			$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		} else {
			$data['wishlist'] = $this->url->link('account/wishlist_guest', '', true);
		}

		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		$data['cart_total'] = $this->cart->countProducts() ;
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['slide_cart'] = $this->load->controller('common/slide_cart');
		$data['menu'] = $this->load->controller('common/menu');
		$data['mobile_menu'] = $this->load->controller('common/mobile_menu');
	

		return $this->load->view('common/header', $data);
	}
}
