<?php
require_once './db.php';

global $db;

$result = $db->query( "SELECT * FROM `test`");
$data_result = $result->fetch_all(MYSQLI_ASSOC);


$max_price = $db->query("SELECT MAX(`price`) AS `max_price` FROM `test`");
$max_price_result = mysqli_fetch_assoc($max_price);

$min_price = $db->query("SELECT MIN(`trade_price`) AS `min_price` FROM `test`");
$min_price_result = mysqli_fetch_assoc($min_price);

