<?php
class ModelExtensionModulePbdp extends Model {
	public function addpin($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "zip_code SET zip_code='".$data['pin_code']."',area_name='".$this->db->escape($data['area_name'])."' ,message='".$this->db->escape($data['message'])."' , pingroup_id = '".(int)$data['pingroup_id']."', status = '".(int)$data['status']."', date_added = NOW()");
		$zip_code_id = $this->db->getLastId();
		if(!isset($data['shippingids'])) {
		 	$data['shippingids'] = array();
		}
		if(!isset($data['paymentids'])) {
		 	$data['paymentids'] = array();
		 }
		foreach ($data['paymentids'] as $key => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_payment` SET `zip_code` = '".$data['pin_code']."',extension_code = '".$value."'");  
		}
		foreach ($data['shippingids'] as $key => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_shipping` SET `zip_code` = '".$data['pin_code']."',extension_code = '".$value."'");  
		}
		if (isset($data['store'])) {
			foreach ($data['store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "zip_code_store SET zip_code_id = '" . (int)$zip_code_id . "', store_id = '" . (int)$store_id . "'");
			}
		}
	}

	public function checkpin($zip_code,$zip_code_id) {
		$sql = "SELECT COUNT(zip_code_id) as count FROM " . DB_PREFIX . "zip_code WHERE  zip_code ='".(int)$zip_code."' AND zip_code_id != '".(int)$zip_code_id."'";	
		$query = $this->db->query($sql);
		return $query->row['count'];
	}

	public function checkepin($zip_code) {
		$sql = "SELECT COUNT(zip_code_id) as count FROM " . DB_PREFIX . "zip_code WHERE  zip_code ='".(int)$zip_code."'";	
		$query = $this->db->query($sql);
		return $query->row['count'];
	}
	
	public function editpin($id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "zip_code SET zip_code='".$data['pin_code']."',area_name='".$this->db->escape($data['area_name'])."' ,message='".$this->db->escape($data['message'])."' , pingroup_id = '".(int)$data['pingroup_id']."', status = '".(int)$data['status']."', date_added = NOW() WHERE zip_code_id = '" . (int)$id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "zipcode_payment WHERE zip_code = '" . $data['pin_code'] . "'");
		if(!isset($data['shippingids'])) {
		 	$data['shippingids'] = array();
		}
		if(!isset($data['paymentids'])) {
		 	$data['paymentids'] = array();
		 }
		foreach ($data['paymentids'] as $key => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_payment` SET `zip_code` = '".$data['pin_code']."',extension_code = '".$value."'");  
		}
		$this->db->query("DELETE FROM " . DB_PREFIX . "zipcode_shipping WHERE zip_code = '" . $data['pin_code'] . "'");
		foreach ($data['shippingids'] as $key => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_shipping` SET `zip_code` = '".$data['pin_code']."',extension_code = '".$value."'");  
		}
		$this->db->query("DELETE FROM " . DB_PREFIX . "zip_code_store WHERE zip_code_id = '" . (int)$id . "'");
		if (isset($data['store'])) {
			foreach ($data['store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "zip_code_store SET zip_code_id = '" . (int)$id . "', store_id = '" . (int)$store_id . "'");
			}
		}
	}
	
	public function deletepin($zip_code_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "zip_code WHERE zip_code_id = '" . (int)$zip_code_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "zipcode_payment WHERE zip_code = '" . (int)$zip_code_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "zipcode_shipping WHERE zip_code = '" . (int)$zip_code_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "zip_code_store WHERE zip_code_id = '" . (int)$zip_code_id . "'");
	}
	

	public function getStores($id) {
		$returnarray = array();
		$query = $this->db->query("SELECT  * FROM " . DB_PREFIX . "zip_code_store WHERE zip_code_id = '".$id."'");
		foreach ($query->rows as $key => $value) {
			$returnarray[] = $value['store_id'];
		}
		return $returnarray;
	}

	public function getpin($id) {
		$query = $this->db->query("SELECT  * FROM " . DB_PREFIX . "zip_code WHERE zip_code_id = '" . (int)$id . "'");

		return $query->row;
	}

	public function getTotalAreas($pingroup_id) {
		$query = $this->db->query("SELECT count(*) as total FROM " . DB_PREFIX . "zip_code WHERE pingroup_id = '" . (int)$pingroup_id . "'");
		return $query->row['total'];
	}

	public function getCities() {
		$returnarray = array();
		$query = $this->db->query("SELECT name,pingroup_id FROM " . DB_PREFIX . "pingroup ");
		foreach ($query->rows as $key => $value) {
			$returnarray[$value['pingroup_id']] = $value['name'];
		}
		return $returnarray;;
	}
	
	public function getpins($data) {
		
		$sql = "SELECT * FROM " . DB_PREFIX . "zip_code z  ";

		if (!empty($data['filter_payment'])) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "zipcode_payment zp ON (z.zip_code = zp.zip_code)";			
		}

		$sql .= " WHERE 1 "; 

		if (!empty($data['filter_payment'])) {
			$sql .= " AND zp.extension_id = '" . $data['filter_payment'] . "'";
		}

		if (!empty($data['filter_zipcode'])) {
			$sql .= " AND z.zip_code LIKE '%" . $this->db->escape($data['filter_zipcode']) . "%'";
		}

		if (!empty($data['filter_pingroup_id'])) {
			$sql .= " AND z.pingroup_id = '" . $this->db->escape($data['filter_pingroup_id']) . "'";
		}

		if (!empty($data['filter_areaname'])) {
			$sql .= " AND z.area_name LIKE '%" . $this->db->escape($data['filter_areaname']) . "%'";
		}
		
		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$sql .= " AND z.status = '" . (int)$data['filter_status'] . "'";
		}

		$sql .= " GROUP BY z.zip_code_id ";
		$sort_data = array(
			'zip_code_id',
			'zip_code',
			'area_name',
			'status',
			'date_added'
		);	
		
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY z." . $data['sort'];	
		} else {
			$sql .= " ORDER BY z.zip_code_id";	
		}
		
		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}
	
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}				

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}	
		
			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}	
		
		$query = $this->db->query($sql);
		
		return $query->rows;
	}
	
	public function getTotalpins($data) {
		
		$sql = "SELECT * FROM " . DB_PREFIX . "zip_code z  ";

		if (!empty($data['filter_payment'])) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "zipcode_payment zp ON (z.zip_code = zp.zip_code)";			
		}

		$sql .= " WHERE 1 "; 

		if (!empty($data['filter_payment'])) {
			$sql .= " AND zp.extension_id = '" . $data['filter_payment'] . "'";
		}

		if (!empty($data['filter_zipcode'])) {
			$sql .= " AND z.zip_code LIKE '%" . $this->db->escape($data['filter_zipcode']) . "%'";
		}

		if (!empty($data['filter_pingroup_id'])) {
			$sql .= " AND z.pingroup_id = '" . $this->db->escape($data['filter_pingroup_id']) . "'";
		}

		if (!empty($data['filter_areaname'])) {
			$sql .= " AND z.area_name LIKE '%" . $this->db->escape($data['filter_areaname']) . "%'";
		}
		
		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$sql .= " AND z.status = '" . (int)$data['filter_status'] . "'";
		}
		
		$query = $this->db->query($sql);
		
		return $query->num_rows;
	}


	function getExtensions($type) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = '" . $this->db->escape($type) . "'");

		return $query->rows;
	}

	function getExtension($id) {
		$return = array();
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zipcode_payment WHERE `zip_code` = '" . $id . "'");
		if($query->num_rows) {
			foreach ($query->rows as $key => $value) {
				$return[] = $value['extension_code'];
			}
		}
		return $return;
	}

	function getSExtension($id) {
		$return = array();
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zipcode_shipping WHERE `zip_code` = '" . $id . "'");
		if($query->num_rows) {
			foreach ($query->rows as $key => $value) {
				$return[] = $value['extension_code'];
			}
		}
		return $return;
	}

	function getProductShipping($product_id) {
		$return = array();
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_shipping WHERE `product_id` = '" . (int)$product_id . "'");
		if($query->num_rows) {
			foreach ($query->rows as $key => $value) {
				$return[] = $value['shipping_code'];
			}
		}
		return $return;
	}

	public function addpingroup($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "pingroup SET name = '" . $this->db->escape($data['name']) . "', geocode = '" . $this->db->escape($data['geocode']) . "',zone_id = '".(int)$data['zone_id']."', country_id = '".(int)$data['country_id']."', image = '" . $this->db->escape($data['image']) . "', comment = '" . $this->db->escape($data['comment']) . "'");
		
		$pingroup_id = $this->db->getLastId();
	}

	public function editpingroup($pingroup_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "pingroup SET name = '" . $this->db->escape($data['name']) . "', geocode = '" . $this->db->escape($data['geocode']) . "',zone_id = '".(int)$data['zone_id']."', country_id = '".(int)$data['country_id']."', image = '" . $this->db->escape($data['image']) . "', comment = '" . $this->db->escape($data['comment']) . "' WHERE pingroup_id = '" . (int)$pingroup_id . "'");
	}

	public function deletepingroup($pingroup_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "pingroup WHERE pingroup_id = '" . (int)$pingroup_id."'");
		$temp['filter_pingroup_id'] = $pingroup_id;
		$zipcodes = $this->getpins($temp);
		foreach ($zipcodes as $key => $value) {
			$this->db->query("DELETE FROM " . DB_PREFIX ."zip_code_store WHERE zip_code_id = '".(int)$value['zip_code_id']."'");
			$this->db->query("DELETE FROM " . DB_PREFIX ."zipcode_payment WHERE zip_code = '".(int)$value['zip_code']."'");
			$this->db->query("DELETE FROM " . DB_PREFIX ."zipcode_shipping WHERE zip_code = '".(int)$value['zip_code']."'");
		}
		$this->db->query("DELETE FROM " . DB_PREFIX ."zip_code WHERE pingroup_id = '".(int)$pingroup_id."'");
	}

	public function getpingroup($pingroup_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "pingroup WHERE pingroup_id = '" . (int)$pingroup_id . "'");

		return $query->row;
	}

	public function  getGroupsById($product_id){
		$product_majorcity_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_pingroup WHERE product_id = '" . (int)$product_id . "'");
		
		foreach ($query->rows as $key => $value) {
			$product_majorcity_data[$value['pingroup_id']] =  $value['shippingprice'];
		}

		
		return $product_majorcity_data;
	}

	 public function getProductLocations($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_pingroup WHERE product_id = '" . (int)$product_id . "'");
		return $query->rows;
	}

	public function  getPincodes($product_id){

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_pincode WHERE product_id = '" . (int)$product_id . "'");
		
		if($query->num_rows) {
			foreach ($query->rows as $key => $value) {
				$pincodes[] = $value['pincode'];
			}
			$shippingprice = $query->row['pincodes_shippingprice'];
			return array('pincodes'=>$pincodes,'pincodes_shippingprice'=>$shippingprice);
		} else {
			return $query->row;
		}

	}

	public function  getCPincodes($category_id){

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_pincode WHERE category_id = '" . (int)$category_id . "'");
		
		if($query->num_rows) {
			foreach ($query->rows as $key => $value) {
				$pincodes[] = $value['pincode'];
			}
			$shippingprice = $query->row['pincodes_shippingprice'];
			return array('pincodes'=>$pincodes,'pincodes_shippingprice'=>$shippingprice);
		} else {
			return $query->row;
		}

	}

	public function getpingroups($data = array()) {
		$sql = "SELECT pingroup_id, name,zone_id,country_id FROM " . DB_PREFIX . "pingroup";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'name'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getdistinctcountries($data = array()) {

		$sql = "SELECT DISTINCT country_id FROM " . DB_PREFIX . "pingroup";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'name'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;

	}	
		


	public function getTotalpingroups() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pingroup");

		return $query->row['total'];
	}

	public function getZoneName($zone_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = '".(int)$zone_id."'");

		return $query->row['name'];
	}

	public function bulkAdd($data,$product_majorcity,$deleteold) {
		if(!empty($product_majorcity) && $deleteold) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_pingroup WHERE product_id = '" . (int)$data['product_id']. "'");
		}
		foreach ($product_majorcity as $value) {
			if(isset($value['pingroup_id'])) {
				$pingroup_id  = $value['pingroup_id'];
				$shippingprice  = $value['shippingprice'];
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_pingroup WHERE product_id = '" . $this->db->escape($data['product_id']) . "' AND pingroup_id = '" . (int)$pingroup_id . "'");
				if(!$query->num_rows) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_pingroup SET product_id = '" . (int)$data['product_id'] . "', pingroup_id = '" . (int)$pingroup_id . "', shippingprice = '" . (int)$shippingprice . "'");
				}
				
			}
		}
	}

	public function bulkAddPins($data,$paymentids,$shippingids,$pingroup_id,$deleteoldpayment,$deleteoldshipping) {
		$zipinfo = $this->getDetailsByCode($data['zip_code']);
		if(!$zipinfo) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "zip_code SET zip_code='".$data['zip_code']."',area_name='".$this->db->escape($data['area_name'])."' ,message='".$this->db->escape($data['message'])."' , pingroup_id = '".(int)$pingroup_id."', status = '".(int)$data['status']."', date_added = NOW()");
			$zip_code_id = $this->db->getLastId();
			$this->db->query("INSERT INTO " . DB_PREFIX . "zip_code_store SET zip_code_id = '" . (int)$zip_code_id . "', store_id = '0'");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "zip_code SET zip_code='".$data['zip_code']."',area_name='".$this->db->escape($data['area_name'])."' ,message='".$this->db->escape($data['message'])."' , pingroup_id = '".(int)$pingroup_id."', status = '".(int)$data['status']."', date_added = NOW() WHERE zip_code_id = '" . (int)$zipinfo['zip_code_id'] . "'");
			$zip_code_id = $this->db->getLastId();
			$this->db->query("INSERT INTO " . DB_PREFIX . "zip_code_store SET zip_code_id = '" . (int)$zipinfo['zip_code_id'] . "', store_id = '0'");
		}

		if($deleteoldpayment) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "zipcode_payment` WHERE `zip_code` = '".$data['zip_code']."'");  
		}
		
		foreach ($paymentids as $key => $value) {
			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zipcode_payment` WHERE `zip_code` = '".$data['zip_code']."' AND extension_code = '".$value."'");
			if(!$query->num_rows) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_payment` SET `zip_code` = '".$data['zip_code']."',extension_code = '".$value."'");
			}
		}

		if($deleteoldshipping) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "zipcode_shipping` WHERE `zip_code` = '".$data['zip_code']."'");  
		}

		foreach ($shippingids as $key => $value) {
			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zipcode_shipping` WHERE `zip_code` = '".$data['zip_code']."' AND extension_code = '".$value."'");
			if(!$query->num_rows) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_shipping` SET `zip_code` = '".$data['zip_code']."',extension_code = '".$value."'");  
			}	
		}
	}

	public function getDetailsByCode($code) {
      		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "zip_code WHERE zip_code = '" . $this->db->escape($code) . "'");
		
		return $query->row;
	}

	public function deletepins() {
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zip_code");
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zipcode_payment");
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zipcode_shipping");
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zip_code_store");
	}

	public function deleteAll() {
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zip_code");
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zipcode_payment");
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zipcode_shipping");
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX ."zip_code_store");
	}

	public function getLanguages() {

			$sql = "SELECT * FROM " . DB_PREFIX . "language WHERE status = 1 ";
	
			$sort_data = array(
				'name',
				'code',
				'sort_order'
			);	
			
			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];	
			} else {
				$sql .= " ORDER BY sort_order, name";	
			}
			
			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}
			
			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}					

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}	
			
				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}
			
			$query = $this->db->query($sql);
	
			return $query->rows;
		
	}

	public function createTable() {
	    //$this->db->query("DROP TABLE `". DB_PREFIX ."zip_code`");
		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."zip_code'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "zip_code` (
				  `zip_code_id` int(11) NOT NULL AUTO_INCREMENT,
				  `zip_code` varchar(255) NOT NULL,
				  `pingroup_id` int(11) NOT NULL,
				  `area_name` varchar(255) NOT NULL,
				  `message` text NOT NULL,
				  `status` tinyint(1) NOT NULL DEFAULT '1',
				  `date_added` datetime NOT NULL,
				  PRIMARY KEY (`zip_code_id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
            $this->db->query($sql);
        }

        if(!$this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "zip_code` LIKE  'message'")->num_rows) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "zip_code` ADD  `message`  text NOT NULL ");
		}

		if(!$this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "zip_code` LIKE 'pingroup_id'")->num_rows) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "zip_code` ADD `pingroup_id` int(11) NOT NULL");
		}

		if(!$this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "zip_code` LIKE 'area_name'")->num_rows) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "zip_code` ADD `area_name` varchar(255) NOT NULL");
		}

        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."zip_code_store'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "zip_code_store` (
				  `zip_code_id` int(11) NOT NULL,
				  `store_id`int(11) NOT NULL
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1";
            $this->db->query($sql);          
        }


        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."zipcode_payment'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "zipcode_payment` (
				  `zip_code_id` int(11) NOT NULL AUTO_INCREMENT,
				  `zip_code` varchar(255) NOT NULL,
				  `extension_id` int(11) NOT NULL,
				  `extension_code` varchar(128) NOT NULL,
				  PRIMARY KEY (`zip_code_id`)
				) ENGINE=MyISAM COLLATE=utf8_general_ci";
            $this->db->query($sql);
            $payments = $this->getExtensions('payment');
	      	foreach ($payments as $key => $value) {
	      		$query = $this->db->query("SELECT zip_code FROM " . DB_PREFIX . "zip_code WHERE 1  ORDER BY zip_code_id ASC");
	      		foreach ($query->rows as $key1 => $value1) {
	      			$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_payment` SET `zip_code` = '".$value1['zip_code']."',extension_id = '".$value['extension_id']."'");  
	      		}
	      	}
        }
        
        if(!$this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "zipcode_payment` LIKE  'extension_code'")->num_rows) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "zipcode_payment` ADD  `extension_code` varchar(128) NOT NULL");
            $payments = $this->getExtensions('payment');
			foreach ($payments as $key => $value) {
	      		$this->db->query("UPDATE " . DB_PREFIX . "zipcode_payment SET extension_code = '".$value['code']."'  WHERE extension_id = '".(int)$value['extension_id']."'");
	      	}
		}

        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."pingroup'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pingroup` (
				  `pingroup_id` int(11) NOT NULL AUTO_INCREMENT,
				  `name` varchar(255) NOT NULL,
				  `geocode` varchar(255) NOT NULL,
				  `zone_id` int(11) NOT NULL,
				  `country_id` int(11) NOT NULL,
				  `image` varchar(255) NOT NULL,
				  `comment` text NOT NULL,
				  PRIMARY KEY (`pingroup_id`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
            $this->db->query($sql);
        }

        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."pingroup_customer_group'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pingroup_customer_group` (
				  `pingroup_id` int(11) NOT NULL,
				  `customer_group_id`int(11) NOT NULL
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1";
            $this->db->query($sql);          
        }


        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."zipcode_shipping'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "zipcode_shipping` (
				  `zip_code_id` int(11) NOT NULL AUTO_INCREMENT,
				  `zip_code` varchar(255) NOT NULL,
				  `extension_id` int(11) NOT NULL,
				  `extension_code` varchar(128) NOT NULL,
				  PRIMARY KEY (`zip_code_id`)
				) ENGINE=MyISAM COLLATE=utf8_general_ci";
            $this->db->query($sql);
            $shippings = $this->getExtensions('shipping');
	      	foreach ($shippings as $key => $value) {
	      		$query = $this->db->query("SELECT zip_code FROM " . DB_PREFIX . "zip_code WHERE 1  ORDER BY zip_code_id ASC");
	      		foreach ($query->rows as $key1 => $value1) {
	      			$this->db->query("INSERT INTO `" . DB_PREFIX . "zipcode_shipping` SET `zip_code` = '".$value1['zip_code']."',extension_id = '".$value['extension_id']."'");  
	      		}
	      	}	
	      	$this->db->query("INSERT INTO `" . DB_PREFIX . "pingroup` SET `name` = 'Mumbai',`country_id`=99,`zone_id`='1493'");  
	      	$temp['pbdp_pinpayment'] =  0;
			$temp['pbdp_pinshipping'] =  0;
			$temp['pbdp_fontcolor'] =  "#272727";
			$temp['pbdp_backgroundcolor'] =  "#f1f1f1";
			$temp['pbdp_popup'] =  "0";
			$temp['pbdp_strictlocation'] =  "0";
			$temp['pbdp_showallproducts'] =  "1";
			$temp['pbdp_shippingprice'] =  "0";
			$temp['pbdp_showlinkheader'] =  "1";
			$temp['pbdp_defaultcity'] = '1';
			$this->load->model('setting/setting');
			$this->model_setting_setting->editSetting('pbdp', $temp);
        }

        if(!$this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "zipcode_shipping` LIKE  'extension_code'")->num_rows) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "zipcode_shipping` ADD  `extension_code` varchar(128) NOT NULL");
	        $shippings = $this->getExtensions('shipping');
			foreach ($shippings as $key => $value) {
      			$this->db->query("UPDATE " . DB_PREFIX . "zipcode_shipping SET extension_code = '".$value['code']."'  WHERE extension_id = '".(int)$value['extension_id']."'");
      		}
      	}

        //$this->db->query("DROP TABLE  `". DB_PREFIX ."product_to_pingroup`");
        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."product_to_pingroup'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_to_pingroup` (
				  `product_id` int(11) NOT NULL,
				  `pingroup_id` int(11) NOT NULL,
				  PRIMARY KEY (`product_id`,`pingroup_id`),
				  KEY `pingroup_id` (`pingroup_id`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8";
            $this->db->query($sql);
        }

        if(!$this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product_to_pingroup` LIKE  'shippingprice'")->num_rows) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_to_pingroup` ADD  `shippingprice` float(11) NOT NULL");
		}

		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."seller_to_pingroup'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seller_to_pingroup` (
				  `seller_id` int(11) NOT NULL,
				  `pingroup_id` int(11) NOT NULL,
				  PRIMARY KEY (`seller_id`,`pingroup_id`),
				  KEY `pingroup_id` (`pingroup_id`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8";
            $this->db->query($sql);
        }

		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."product_to_shipping'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_to_shipping` (
				  `product_id` int(11) NOT NULL,
				  `shipping_code` varchar(32) NOT NULL,
				  PRIMARY KEY (`product_id`,`shipping_code`),
				  KEY `shipping_code` (`shipping_code`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8";
            $this->db->query($sql);
        }

		//$this->db->query("DROP TABLE  `". DB_PREFIX ."product_to_pincode`");
        if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."product_to_pincode'")->num_rows == 0) {
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_to_pincode` (
				  `product_id` int(11) NOT NULL,
				  `pincode` varchar(128)  NOT NULL,
				  `pincodes_shippingprice` float(11) NOT NULL,
				  PRIMARY KEY (`product_id`,`pincode`),
				  KEY `pincode` (`pincode`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8";
            $this->db->query($sql);
        }

	}
}
?>