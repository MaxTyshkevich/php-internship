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

	public function addCity($name, $indexSort)
	{
		$sql = "INSERT INTO `city` (`id`, `name`, `index_sort`) VALUES (NULL, ?, ?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('si', $name, $indexSort);
		$stmt->execute();

		return $stmt->get_result();
	}

	public function updateCity($id, $name, $indexSort)
	{
		$sql = "UPDATE `city` SET `name`=?,`index_sort`=? WHERE  `id`=? ";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('sii', $name, $indexSort, $id);
		$stmt->execute();

		return $stmt->get_result();
	}

}

//$cityInstance = new City();
//print_r($cityInstance->updateCity(10, 'LALALALL0', '66'));
