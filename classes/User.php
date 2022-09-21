<?php

namespace classes;

require_once './Db.php';

use classes\Db;


class User extends Db
{
	private $dataUsers;

	public function getAllUser()
	{
		$sql = "SELECT * FROM `user`";

		$this->dataUsers = $this->connect->query($sql);

	}

	public function addNewUser()
	{

	}

	public function changeUser($id)
	{

	}

	public function removeUser($id)
	{
		$sql = "DELETE FROM `city` WHERE `id` = (?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		return $stmt->get_result();
	}


}


$test = new User();
$test->getAllUser();
$test->renderUser();