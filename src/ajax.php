<?php

require_once './db.php';
require_once './renderTable.php';



function getSortTable($userFilter) {
	global $db;
	$prace = $userFilter['prace']  === 'retail' ? 'price': 'trade_price';
	$praceFrom =   $db->real_escape_string((int) $userFilter['praceFrom']);
	$praceTo =   $db->real_escape_string((int) $userFilter['praceTo'] ?:  PHP_INT_MAX);
	$count =   $db->real_escape_string((int) $userFilter['count']);
	$operand  = $userFilter['stockFilter'] === 'more' ? '>=': '<=';


	//$stmt = $db->prepare("SELECT * FROM `test` WHERE (`?` >= `?` AND `?` <= `?`) AND (`stock_1`  `?`  `?` OR `stock_2`  `?`  `?`) ORDER BY `?`");
	//$stmt->bind_param("is", $prace, $praceFrom,$prace,$praceTo,$operand, $count,$operand, $count,$prace);

	$sql=  "SELECT * FROM `test` WHERE (`$prace` >= {$praceFrom} AND {$prace} <= {$praceTo}) AND (`stock_1`  {$operand}  {$count} OR `stock_2`  {$operand}  {$count}) ORDER BY `$prace`";

	
	$res = $db->query($sql);

	$res =  $res->fetch_all(MYSQLI_ASSOC);


	return $res;
}

if($_POST['userFilter']) {

	$userFilter = array(
		'prace' => $_POST['prace'],
		'praceFrom' => $_POST['praceFrom'],
		'praceTo' => $_POST['praceTo'] ,
		'stockFilter' => $_POST['stockFilter'],
		'count' => $_POST['count'],
	);

	$date =	getSortTable($userFilter);



	if (count($date)) {
		$result =  \render\renderTable($date);
	}else {
		$result =  \render\renderCleantable($date);
	}

	print_r($result);
}












// SELECT * FROM `test` WHERE (`price` >= 300 AND `price` <= 600) AND (`stock_1` <= 30 OR `stock_2` <= 30) ORDER BY `price`;