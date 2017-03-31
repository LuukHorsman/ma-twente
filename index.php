<?php

	$url[0] = '';
	if(isset($_GET['url']) && $_GET['url']!='')
	$url = explode('/',$_GET['url']);

	include('dbhandler.php');
	include('db_connection.php');


	switch($url[0]) {
		case '':
			include('login_function.php');
			$page = 'login.php';
		break;
		case '':

		break;
		default:
		$page = '404.php';
	}

	require('master.php');