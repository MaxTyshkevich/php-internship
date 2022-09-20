<?php
namespace classes;
require_once './Db.php';


use classes\Db;




class City extends Db
{

	public function ss() {
		print_r($this->connect);
	}


}

$city = new City();
$city->ss();