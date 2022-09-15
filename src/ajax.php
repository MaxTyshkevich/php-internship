<?php

require_once './db.php';
require_once './renderTable.php';



function getSortTable($userFilter) {
	global $db;
	$prace = $userFilter['prace']  === 'retail' ? 'price': 'trade_price';
	$praceFrom = (int) $userFilter['praceFrom'];
	$praceTo = (int) $userFilter['praceTo'];
	$count = (int) $userFilter['count'];
	$operand  = $userFilter['stockFilter'];

	$sql = '';
	if($operand === 'more') {
		$sql = "SELECT * FROM `test` WHERE (`$prace` >= {$praceFrom} AND {$prace} <= {$praceTo}) AND (`stock_1`  >=  {$count} OR `stock_2`  >=  {$count}) ORDER BY `$prace`";
	} else {
		$sql = "SELECT * FROM `test` WHERE (`$prace` >= {$praceFrom} AND {$prace} <= {$praceTo}) AND (`stock_1`  <=  {$count} OR `stock_2`  <=  {$count}) ORDER BY `$prace`";
	}



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

	$result =  \render\renderTable($date);
	print_r($result);
}












// SELECT * FROM `test` WHERE (`price` >= 300 AND `price` <= 600) AND (`stock_1` <= 30 OR `stock_2` <= 30) ORDER BY `price`;