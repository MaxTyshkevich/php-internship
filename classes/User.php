<?php

namespace classes;

require_once 'Db.php';

use classes\Db;


class User extends Db
{
	private $sortField = 'city_id';
	private $sortTo = 'sort_asc';
	private $filterCity = null;

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
		$result = $this->connect->query($sql);

		$result = $result->fetch_all(MYSQLI_ASSOC);

		$this->sort($result);

		return $result;
	}

	public function addNewUser($name, $surname, $avatar, $city)
	{
		$sql = "INSERT INTO `user` (`name`, `surname`, `avatar`, `city_id`) VALUES ( ?, ?, ?, ?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('sssi', $name, $surname, $avatar, $city);
		$stmt->execute();

		return $stmt->get_result(); // ничего не возвращает
	}

	public function updateUser($id, $name, $surname, $city, $avatar)
	{
		$sql = "UPDATE `user` SET `name`=`?`,`surname`=`?`,`city_id`=`?`,`avatar`=`?` WHERE `?`";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('ssisi', $name, $surname, $city, $avatar, $id);
		$stmt->execute();

		return $stmt->get_result();
	}

	public function removeUser($id)
	{
		$sql = "DELETE FROM `user` WHERE `id` = (?)";
		$stmt = $this->connect->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		return $stmt->get_result();  // ничего не возвращает
	}

	public function setSortParam($fieldSort, $sortTo)
	{

		if ($fieldSort === 'sort_id') {
			$fieldSort = 'id';
		} elseif ($fieldSort === 'sort_name') {
			$fieldSort = 'name';
		} elseif ($fieldSort === 'sort_srnm') {
			$fieldSort = 'surname';
		} elseif ($fieldSort === 'sort_st') {
			$fieldSort = 'city_id';
		}

		$this->sortField = $fieldSort;
		$this->sortTo = $sortTo;

	}

	public function sort(&$data)
	{
		uasort($data, function ($itemA, $itemB) {
			$sortField = $this->sortField;
			$sortTo = $this->sortTo;

			if ($sortTo === 'sort_asc') {
				return (mb_strtolower($itemA[$sortField]) <= mb_strtolower($itemB[$sortField])) ? -1 : 1;
			} else if ($sortTo === 'sort_desc') {

				return (mb_strtolower($itemA[$sortField]) >= mb_strtolower($itemB[$sortField])) ? -1 : 1;
			}

		});
	}

	public function setFilterParam($id)
	{
		$this->filterCity = $id;
	}

	public function getFilterPAram()
	{
		return $this->filterCity;
	}

	public function filter(&$data)
	{
		// отфильтруй array
	}
}

