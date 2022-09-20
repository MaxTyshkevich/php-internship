<?php
namespace classes;

require_once './Db.php';
use classes\Db;



class User extends Db
{
	private $dataUsers;

	public function getAllUser() {
			$sql = "SELECT * FROM `user`";

			$this->dataUsers = $this->connect->query($sql);
			var_dump($this->dataUsers);
	}

	public function addNewUser() {

	}

	public function changeUser($id) {

	}

	public function removeUser($id) {

	}


}

$test = new User();
print_r($test->getAllUser());