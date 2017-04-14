<?php
if(!isset($url[1]))
	$url[1] = '';

$page = 'dashboards/files/dashboard.php';

switch($url[1]) {
	case '':
		$user_page = 'dashboard_home.php';
	break;
	case 'user':
		include('user_controller.php');
	break;
	default:
		$page = '404.php';
}
