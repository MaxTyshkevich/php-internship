<?php
use classes\User;

require_once '../classes/User.php';

$user = new User();


if (isset($_POST['del_fors_names'])) {

	$id = htmlspecialchars($_POST['id']);

	$user->removeUser($id);

}


header("Location: ".$_SERVER['HTTP_REFERER']);