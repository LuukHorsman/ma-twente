<?php
if(!isset($url[1]))
	$url[1] = '';

switch($url[1]) {
	case '':
		$page = '/dashboards/files/dashboard.php';
	break;
	case 'user':
		include('user_controller.php');
	break;
	default:
		$page = '404.php';
}