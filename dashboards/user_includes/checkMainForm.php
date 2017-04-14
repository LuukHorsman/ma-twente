<?php
$error = [];

foreach($_POST as $key => $value) {
	switch($key) {
		case 'voornaam' :
		case 'achternaam':
			if(!preg_match("/^[a-zA-Z]+$/", $value))
				$error['match'][$key] = true;
		break;
		case 'afdeling_id':
			if($value == 0)
				$error['match'][$key] = true;
		break;
		case 'inter_telefoonnummer':
			if(!preg_match("/^[0-9]+$/", $value))
				$error['match'][$key] = true;
		break;
		case 'email':
			if(!filter_var($value, FILTER_VALIDATE_EMAIL))
				$error['match'][$key] = true;
		break;
		case 'wachtwoord':
			if(empty($value))
				$error['match'][$key] = true;
		break;
	}
	$cleanArray[$key] = htmlentities($value);
}
