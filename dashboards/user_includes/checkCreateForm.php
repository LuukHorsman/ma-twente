<?php
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
