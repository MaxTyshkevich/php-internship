<?php

namespace core;

require_once '../classes/User.php';
require_once '../classes/City.php';

use classes\User;
use classes\City;

class ControllerUser
{
	private $modelUser;
	private $modelCity;

	public function __construct()
	{
		$this->modelUser = new User();
		$this->modelCity = new City();
	}

	public function editUser()
	{
		$id = htmlspecialchars($_POST['id_red']);

		$name = htmlspecialchars($_POST['edit_text_name']);
		$surname = htmlspecialchars($_POST['edit_text_surname']);
		$cityId = htmlspecialchars($_POST['edit_selsity']);

		$avatar = null;

		if(isset($_FILES['uploadfile'])) {
			$file = $_FILES['uploadfile'];
			$avatar =  $this->saveAvatarUser($file);
		}


		$this->modelUser->updateUser($id, $name, $surname, $cityId, $avatar );
		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	public function createUser()
	{
		$nameUser = htmlspecialchars($_POST['ins_name']);
		$surnameUser = htmlspecialchars($_POST['ins_surname']);
		$homeCity = htmlspecialchars($_POST['selsity']);
		$avatar = null;


		if(isset( $_FILES['uploadfile'])) {
			$avatar = $this->saveAvatarUser($_FILES['uploadfile']);
		}


		$this->modelUser->addNewUser($nameUser, $surnameUser, $avatar, $homeCity);

		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	public function sortUser()
	{
		$fieldSort = htmlspecialchars($_POST['sort_name']);
		$sortTo = htmlspecialchars($_POST['sort_order_by_2']);

		$this->modelUser->setSortParam($fieldSort, $sortTo);
		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	public function filterforCity()
	{
		$selectCity = htmlspecialchars($_POST['selsity_2']);

		$this->modelUser->setFilterParam($selectCity);
		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	private function saveAvatarUser($img)
	{

		move_uploaded_file($img['tmp_name'], $_SERVER['DOCUMENT_ROOT'] .'/pictures/' . $img['name']);
		return $img['name'];
	}

	public function renderAllUser()
	{
		require_once '../template/itemUser.php';
		$allUsers = $this->modelUser->getAllUser();
		$allCity = $this->modelCity->getAllCity();

		itemUser($allUsers, $allCity);
	}

	public function renderAddUser()
	{
		require_once '../template/createUserForm.php';
		$allCity = $this->modelCity->getAllCity();
		createUser($allCity);
	}

	public function renderEditUser()
	{
		require_once '../template/editUserForm.php';
		$allCity = $this->modelCity->getAllCity();
		$id = htmlspecialchars($_POST['id']);

		$user = $this->modelUser->getUser($id);
		editUser($allCity, $user);
	}

	public function renderAfterDelete()
	{

		$id = htmlspecialchars($_POST['id']);
		$this->modelUser->removeUser($id);
		$this->renderAllUser();
	}

	public function renderSort()
	{
		require_once '../template/userSort.php';
		userSort();
	}


}