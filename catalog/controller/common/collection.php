<?php
class ControllerCommonCollection extends Controller
{
	public function index()
	{
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}


		//banner-top
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner(14);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1920', '800')
				);
			}
		}


		//side banner

		$data['banner_side'] = array();

		$results = $this->model_design_banner->getBanner(10);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banner_side'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '410', '610')
				);
			}
		}
		//banner-midd
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['mid_banners'] = array();

		$results1 = $this->model_design_banner->getBanner(11);

		foreach ($results1 as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['mid_banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1250', '610')
				);
			}
		}


	

		//shop by style
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['style_categories'] = array();

		$style_categories = $this->model_catalog_category->getCategories(78);

		foreach ($style_categories as $category) {
// $product_total = $this->model_catalog_product->getTotalProducts($category['category_id']);
			// Level 2
			$category_info = $this->model_catalog_category->getCategory($category['category_id']);
			if ($category_info) {
				if ($category_info['image']) {
					$image = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
			}
			// Level 1
			$data['style_categories'][] = array(
				'thumb' =>  $image,
				'name'     => $category['name'],

				'column'   => $category['column'] ? $category['column'] : 1,
				'href'     => $this->url->link('product/category', 'path=78_' . $category['category_id'])
			);
		}
	
// echo "<pre>"; print_r($data['style_categories']);
// echo "</pre>";


		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');
		$filter_data = array(
			'filter_category_id' => '77',
			'start' => '0',
			'limit' => '6'
		);

		// $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

	

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/collection', $data));
	}
}
