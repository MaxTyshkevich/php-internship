<?php

require_once 'classes/Cointer.php';

//use classes\Cointer;
//
//$counter = new Cointer();
//$counter->setTotalCounter();
//
//$totalDownload = $counter->getTotalCounter();
//$totalDownload = $totalDownload['total_counter'];
//
//$currentPageKey = trim($_SERVER['REQUEST_URI']);
//
//
//setcookie('totalDownloadSite', $totalDownload);




if (!isset($_COOKIE['totalDownloadSite'])) {
	$totalDownload = 1; //show write now
} else {
	$totalDownload = $_COOKIE['totalDownloadSite'];
	$totalDownload += 1;

}



$currentPageKey = explode(".", $_SERVER['REQUEST_URI'])[0];


if (!isset($_COOKIE[$currentPageKey])) {
	$currentPageValue = 1; //show write now
} else {

	$currentPageValue = $_COOKIE[$currentPageKey];
	$currentPageValue += 1;
}


setcookie('totalDownloadSite', $totalDownload);
setcookie($currentPageKey, $currentPageValue);


// $_SERVER[REQUEST_URI] => /pages/city.php
// $_SERVER[REQUEST_URI] => /pages/users.php
// $_SERVER[REQUEST_URI] =>  /pages/search.php