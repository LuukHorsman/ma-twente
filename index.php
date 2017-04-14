<?php

	$url[0] = '';
	if(isset($_GET['url']) && $_GET['url'] != '')
	$url = explode('/',$_GET['url']);

	define('ERROR_NAME', 'error');
	include('dbhandler.php');
	include('db_connection.php');

	switch($url[0]) {
		case '':
			include('/login/includes/login_function.php');
			$page = '/login/login.php';
		break;
		case 'dashboard':
			session_start();
			include('/dashboards/includes/checkSession.php');
			include('/controllers/dashboard_controller.php');

		break;
		case 'logout':
			$page = 'logout.php';
		break;
		default:
		$page = '404.php';
	}

	require('master.php');
