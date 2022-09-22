<?php

use classes\City;

require_once '../classes/City.php';

$city = new City();


if (isset($_POST['del_fors_city'])) {
	// [id] => 1
	//    [del_fors_city] => Удалить
	$id = htmlspecialchars($_POST['id']);
	$city->deleteCity($id);


} else if (isset($_POST['edit_fors_city'])) {

}


header("Location: ".$_SERVER['HTTP_REFERER']);