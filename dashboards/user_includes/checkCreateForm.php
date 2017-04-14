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


if(isset($_POST) && !empty($_POST) && is_array($error) && empty($error)) {
	$query = 'INSERT INTO medewerkers
		(afdeling_id, geslacht_id, voornaam, tussenvoegsel, achternaam, inter_telefoonnummer)
	VALUES
		("' . $cleanArray['afdeling_id'] . '", "' . $cleanArray['geslacht'] . '", "' . $cleanArray['voornaam'] . '", "' . $cleanArray['tussenvoegsel'] . '", "' . $cleanArray['achternaam'] . '", "' . $cleanArray['inter_telefoonnummer'] . '")';
		//echo $query;
		$id = $login->CreateData($query);
		$secondQuery = 'INSERT INTO gebruikersccount (medewerkers_id, status_id, email, wachtwoord) VALUES ("' . $id . '", "' . $cleanArray['status_id'] . '", "' . $cleanArray['email'] . '", "' . $cleanArray['wachtwoord'] . '")';
		$login->CreateData($secondQuery);
		header('location: /dashboard/user');
}
