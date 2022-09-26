<?php

namespace classes;

require_once 'Db.php';

use classes\Db;

class Cointer extends Db {

	public function getTotalCounter() {
		$sql = 'SELECT `total_counter` FROM `visit_counter`';
		$result = $this->connect->query($sql);
		return $result->fetch_assoc();
	}

	public function setTotalCounter() {
		$sql = "UPDATE `visit_counter` SET `total_counter` =`total_counter` + 1";
		$this->connect->query($sql);
	}

}