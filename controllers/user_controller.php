<?php

if(!isset($url[2]))
	$url[2] = '';

switch($url[2]) {
	case '':
		$user_page = 'dashboards/userFiles/overzicht.php';
	break;
	case 'create':
		include('dashboards/user_includes/checkMainForm.php');
		include('dashboards/user_includes/checkCreateForm.php');
		$user_page = 'dashboards/userFiles/createUser.php';
	break;
	case 'update':
		include('dashboards/user_includes/checkMainForm.php');
		include('dashboards/user_includes/checkUpdateForm.php');
		$user_page = 'dashboards/userFiles/updateUser.php';
	break;
	case 'delete':
		include('dashboards/user_includes/deleteForm.php');
		$user_page = 'dashboards/userFiles/deleteUser.php';
	break;
	default:
		$page = '404.php';
}
