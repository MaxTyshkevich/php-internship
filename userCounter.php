<?php


if (!isset($_COOKIE['totalDownloadSite'])) {
	$totalDownload = 1; //show write now
} else {
	$totalDownload  = $_COOKIE['totalDownloadSite'];
	$totalDownload += 1;

}

setcookie('totalDownloadSite', $totalDownload);

