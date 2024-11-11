<?php
class ModelCatalogMessages extends Model
{
	public function getNewMessages()
	{
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_msgs` ORDER BY `date` DESC LIMIT 0,10");

		return $query->rows;
	}

	public function getTotalMessages($data = array())
	{
		$sql = '';
		$sql1 = '';
		$sql2 = '';
		if (isset($data['filter_customer']) && $data['filter_customer'] != '') {
			$sql1 .= "  customer_name LIKE '%" . $data['filter_customer'] . "%'";
		}
		if (isset($data['filter_date_added']) && $data['filter_date_added'] != '') {
			$sql2 .= " date >= '" . $data['filter_date_added'] . "'";
		}
		if ($sql1 != '' && $sql2 != '') {
			$sql = "WHERE" . $sql1 . "AND" . $sql2;
		} else if ($sql1 != '') {
			$sql = "WHERE" . $sql1;
		} else if ($sql2 != '') {
			$sql = "WHERE" . $sql2;
		}
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_msgs " . $sql);

		return $query->row['total'];
	}

	public function getAllMessages($start = 0, $limit = 10, $data = array())
	{

		$sql = '';
		$sql1 = '';
		$sql2 = '';
		if (isset($data['filter_customer']) && $data['filter_customer'] != '') {
			$sql1 .= "  customer_name LIKE '%" . $data['filter_customer'] . "%'";
		}
		if (isset($data['filter_date_added']) && $data['filter_date_added'] != '') {
			$sql2 .= " date >= '" . $data['filter_date_added'] . "'";
		}
		if ($sql1 != '' && $sql2 != '') {
			$sql = "WHERE" . $sql1 . "AND" . $sql2;
		} else if ($sql1 != '') {
			$sql = "WHERE" . $sql1;
		} else if ($sql2 != '') {
			$sql = "WHERE" . $sql2;
		}
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_msgs " . $sql);


		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_msgs AS CM LEFT JOIN " . DB_PREFIX . "customer AS C ON  CM.customer_id = C.customer_id LEFT JOIN " . DB_PREFIX . "customer_group_description AS CGD ON C.customer_group_id = CGD.customer_group_id" . $sql . " ORDER BY `date` DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function deleteMessage($id)
	{
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_msgs WHERE msg_id = '" . (int)$id . "'");
	}
}
