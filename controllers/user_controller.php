<?php

if(!isset($url[2]))
	$url[2] = '';

switch($url[2]) {
	case '':
		include('dashboards/user_includes/checkCreateForm.php');
		$user_page = '/../userFiles/overzicht.php';
	break;
	case 'create':
		include('dashboards/user_includes/checkCreateForm.php');
		$user_page = '/../userFiles/createUser.php';
	break;
	case 'update':
		include('dashboards/user_includes/checkCreateForm.php');
		$user_page = '/../userFiles/updateUser.php';
	break;
	default:
		$page = '404.php';
}