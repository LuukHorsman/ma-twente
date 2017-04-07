<?php

$error = [];

if(empty($_POST['username']))
	$error['username'] = true;
if(empty($_POST['password']))
	$error['password'] = true;

	if(isset($_POST['login']) && is_array($error) && empty($error)){
		$array = [];
		$count = 0;
		foreach($_POST as $key => $value) {

			$array[$count] = htmlentities($value);

			$count++;
		}

		$result = $login->ReadData(['selectQuery' => 
			'SELECT 
				gebruikersccount.id AS gebruikersccount_id,
				gebruikersccount.email,
				gebruikersccount.wachtwoord,
				gebruikersccount.status_id,
				gebruikersccount.medewerkers_id,
	            medewerkers.id AS medewerkers_id,
	            medewerkers.voornaam,
	            medewerkers.tussenvoegsel,
	            medewerkers.achternaam,
	            medewerkers.inter_telefoonnummer,
	            medewerkers.afdeling_id
			FROM 
				gebruikersccount
			INNER JOIN
				medewerkers
			ON
				gebruikersccount.medewerkers_id = medewerkers.id
	       	WHERE
	        	gebruikersccount.email = "' . $array[0] . '"
	        AND
	        	gebruikersccount.wachtwoord = "' . $array[1] . '"
			']);

		if(is_array($result) && !empty($result)) {
			session_start();
			$_SESSION = ['voornaam' => $result[0]['voornaam'], 'tussenvoegsel' => $result[0]['tussenvoegsel'], 'achternaam' => $result[0]['achternaam']];
			header('location: /dashboard');
		} else {
			$error['wrong'] = true;
		}
	}