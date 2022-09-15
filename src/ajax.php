<?php

require_once './db.php';

var_dump($_REQUEST);


function getSortTable($userFilter) {
	global $db;
	$prace = $userFilter['price']  === 'retail' ? 'price': 'trade_price';
	$praceFrom = (int) $userFilter['praceFrom'];
	$praceTo = (int) $userFilter['praceTo'];
	$count = (int) $userFilter['count'];
	$operand  = $userFilter['stockFilter'];

	$sql = '';
	if($operand === 'more') {
		$sql = "SELECT * FROM `test` WHERE (`$prace` >= `$praceFrom` AND `$prace` <= `$praceTo`) AND (`stock_1`  >=  `$count` OR `stock_2`  >=  `$count`) ORDER BY `$prace`";
	} else {
		$sql = "SELECT * FROM `test` WHERE (`$prace` >= `$praceFrom` AND `$prace` <= `$praceTo`) AND (`stock_1`  <=  `$count` OR `stock_2`  <=  `$count`) ORDER BY `$prace`";
	}

	print_r($sql);

	die();

	$res = $db->query($sql);

	print_r($res);


}

if($_POST['userFilter']) {

	$userFilter = array(
		'prace' => $_POST['price'],
		'praceFrom' => $_POST['praceFrom'],
		'praceTo' => $_POST['praceTo'] === null,
		'stockFilter' => $_POST['stockFilter'],
		'count' => $_POST['count'],
	);

	getSortTable($userFilter);

}












// SELECT * FROM `test` WHERE (`price` >= 300 AND `price` <= 600) AND (`stock_1` <= 30 OR `stock_2` <= 30) ORDER BY `price`;