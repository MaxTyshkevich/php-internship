<?php

use classes\City;

require_once '../classes/City.php';

print_r('<pre>');
print_r($_POST);
print_r('</pre>');


if(isset($_POST['del_fors_city'])) {
	// [id] => 1
	//    [del_fors_city] => Удалить
	$id = htmlspecialchars($_POST['id']);




} else if (isset($_POST['edit_fors_city'])){

}