<?php

namespace core;

require_once '../classes/User.php';
require_once '../classes/City.php';

use classes\User;
use classes\City;

class ControllerSearch
{

	private $modelUser;
	private $modelCity;

	public function __construct()
	{
		$this->modelUser = new User();
		$this->modelCity = new City();
	}

	public function findUser()
	{
		$targetSearch = htmlspecialchars($_POST['ins_sh_name']);
		$findUsers = $this->modelUser->findAllUser($targetSearch);
		$allCity = $this->modelCity->getAllCity();

		if (count($findUsers)) {
			require_once '../template/searchUser.php';
			searchUser($findUsers, $allCity);
		} else {
			echo "Совпадений нет";
		}
	}


}