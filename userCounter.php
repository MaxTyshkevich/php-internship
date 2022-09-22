<?php

$currentPageKey = trim($_SERVER['REQUEST_URI']);

if (!isset($_COOKIE[$currentPageKey])) {
	$currentPageValue = 1; //show write now
} else {
	$currentPageValue = $_COOKIE[$currentPageKey];
	$currentPageValue += 1;
}


if (!isset($_COOKIE['totalDownloadSite'])) {
	$totalDownload = 1; //show write now
} else {
	$totalDownload = $_COOKIE['totalDownloadSite'];
	$totalDownload += 1;

}

setcookie('totalDownloadSite', $totalDownload);
setcookie($currentPageKey, $currentPageValue);



// $_SERVER[REQUEST_URI] => /pages/city.php
// $_SERVER[REQUEST_URI] => /pages/users.php
// $_SERVER[REQUEST_URI] =>  /pages/search.php