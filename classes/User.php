<?php

namespace classes;

require_once 'Db.php';

use classes\Db;


class User extends Db
{
	public function getUser($id)
	{
		$sql = "SELECT * FROM `user` WHERE `id` = ?";
		$stmt = $this->connect->prepare($sql);

		$stmt->bind_param('i', $id);
		$stmt->execute();

		$result = $stmt->get_result();
		return $result->fetch_assoc();
	}

	public function getAllUser()
	{
		$sql = "SELECT * FROM `user`";
		$stmt = $this->connect->prepare($sql);

		$stmt->execute();

		return $stmt->get_result();
	}

	public function addNewUser($name, $surname, $avatar, $city)
	{
		$sql = "INSERT INTO `user` (`name`, `surname`, `avatar`, `city_id`) VALUES ( ?, ?, ?, ?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('sssi', $name, $surname, $avatar, $city);
		$stmt->execute();

		return $stmt->get_result(); // ничего не возвращает
	}

	public function changeUser($id)
	{
		/*$sql = "INSERT INTO `user` (`name`, `surname`, `avatar`, `city_id`) VALUES ( ?, ?, ?, ?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('sssi', $name, $surname, $avatar, $city);
		$stmt->execute();

		return $stmt->get_result(); // ничего не возвращает*/
	}

	public function removeUser($id)
	{
		$sql = "DELETE FROM `user` WHERE `id` = (?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		return $stmt->get_result();  // ничего не возвращает
	}


}


//$s = new User();
//print_r($s->getAllUser());