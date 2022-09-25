<?php

namespace classes;

require_once 'Db.php';

// require_once './Db.php';  ???

use classes\Db;


class City extends Db
{
	private $sortField = 'id';
	private $sortTo = 'sort_asc';


	public function getCity($id)
	{
		$sql = "SELECT * FROM `city` WHERE `id` = ?";
		$stmt = $this->connect->prepare($sql);

		$stmt->bind_param('i', $id);
		$stmt->execute();

		$result = $stmt->get_result();
		return $result->fetch_assoc();

	}

	public function getAllCity()
	{
		$sql = "SELECT * FROM `city`";
		$result = $this->connect->query($sql);

		$result = $result->fetch_all(MYSQLI_ASSOC);

		//var_dump('<pre>');
		//var_dump($result);
		//var_dump('</pre>');



		$this->sort($result);

		return $result;
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

	public function sort(&$data)
	{
		uasort($data, function ($itemA, $itemB) {
			$sortField = $this->sortField;
			$sortTo = $this->sortTo;
			//print_r($sortField);
			//print_r($sortTo);
			//die;

			if ($sortTo === 'sort_asc') {
				return (mb_strtolower($itemA[$sortField]) <= mb_strtolower($itemB[$sortField])) ? -1 : 1;
			} else if($sortTo === 'sort_desc') {
				//print_r('TYT');
				//die;
				return (mb_strtolower($itemA[$sortField]) >= mb_strtolower($itemB[$sortField])) ? -1 : 1;
			}

		});
	}

	public function setSortParam($fieldSort, $sortTo)
	{

		if ($fieldSort === 'sort_id') {
			$fieldSort = 'id';
		} elseif ($fieldSort === 'sort_sity') {
			$fieldSort = 'name';
		} elseif ($fieldSort === 'sort_rangir') {
			$fieldSort = 'index_sort';
		}

		$this->sortField = $fieldSort;
		$this->sortTo = $sortTo;

	}
}


