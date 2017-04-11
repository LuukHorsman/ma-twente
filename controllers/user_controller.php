<?php

if(!isset($url[2]))
	$url[2] = '';

switch($url[2]) {
	case '':
		header('location: /');
	break;
	case 'create':
		include('dashboards/user_includes/checkCreateForm.php');
		$page = '/dashboards/userFiles/createUser.php';
	break;
	default:
		$page = '404.php';
}