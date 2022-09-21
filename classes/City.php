<?php

namespace classes;

require_once 'Db.php';

// require_once './Db.php';  ???

use classes\Db;


class City extends Db
{
	public function getAllCity()
	{
		$sql = "SELECT * FROM `city`";

		return $this->connect->query($sql);
	}

	public function deleteCity($id)
	{

		$sql = "DELETE FROM `city` WHERE `id` = (?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		return $stmt->get_result();
	}

}

//$cityInstance = new City(); где создовать этот obj ??
//$cityInstance->deleteCity(8);
