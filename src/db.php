<?php


$db_host = '127.0.0.1:3306';
$db_username = 'root';
$db_password = '';
$db_name = 'price';


$db = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($db->connect_error) {
	die("Unable to connect database: " . $db->connect_error);
}

?>