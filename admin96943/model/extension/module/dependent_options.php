<?php
class ModelExtensionModuleDependentOptions extends Model {
	public function alterTables() {
		$has_field = false;

		$result = $this->db->query("DESCRIBE " . DB_PREFIX . "product_option");

		foreach ($result->rows as $row) {
			if ($row['Field'] == 'parent_id') {
				$has_field = true;

				break;
			}
		}

		if (!$has_field) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_option` ADD `parent_id` int(11) NOT NULL");
		}

		$has_field = false;

		foreach ($result->rows as $row) {
			if ($row['Field'] == 'parent_values') {
				$has_field = true;

				break;
			}
		}

		if (!$has_field) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_option` ADD `parent_values` TEXT NOT NULL");
		}

		$has_field = false;

		$result = $this->db->query("DESCRIBE " . DB_PREFIX . "product_option_value");

		foreach ($result->rows as $row) {
			if ($row['Field'] == 'parent_option_values') {
				$has_field = true;

				break;
			}
		}

		if (!$has_field) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_option_value` ADD `parent_option_values` TEXT NOT NULL");
		}
	}
}