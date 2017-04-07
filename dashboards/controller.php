<?php
if(!isset($url[1]))
	$url[1] = '';

switch($url[1]) {
	case '':
		$page = '/dashboards/dashboard.php';
	break;
	case 'create':
		include('includes/checkForm.php');
		$page = '/dashboards/createUser.php';
	break;
}