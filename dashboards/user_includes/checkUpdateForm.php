<?php

if(!isset($url[3]) || $url[3] == '') {
  header('location: /dashboard/user/update/1');
}

$results = $login->ReadData(['selectQuery' => '
  SELECT
    gebruikersccount.id AS gebruikersaccount_id,
    gebruikersccount.medewerkers_id,
    gebruikersccount.status_id,
    gebruikersccount.email,
    medewerkers.id AS medewerkers_id,
    medewerkers.afdeling_id,
    medewerkers.geslacht_id,
    medewerkers.voornaam,
    medewerkers.tussenvoegsel,
    medewerkers.achternaam,
    medewerkers.inter_telefoonnummer,
    afdeling.id AS afdeling_afdeling_id,
    afdeling.afdeling_naam,
    geslacht.id AS geslacht_geslacht_id,
    geslacht.geslacht_naam
  FROM
    gebruikersccount
  INNER JOIN
    medewerkers
  ON
    gebruikersccount.medewerkers_id = medewerkers.id
  INNER JOIN
    afdeling
  ON
    medewerkers.afdeling_id = afdeling.id
  INNER JOIN
    geslacht
  ON
    medewerkers.geslacht_id = geslacht.id
  WHERE gebruikersccount.id = ' . $url[3] . '
  ']);
echo '<pre>';
  print_r($results);
echo '</pre>';

if(is_array($results) && empty($results)) {
  die('User does not exist');
}

print_r($error);


if(isset($_POST) && !empty($_POST) && is_array($error) && empty($error)) {
  $query = 'UPDATE gebruikersccount SET
    email = "' . $cleanArray['email'] . '",
    wachtwoord = "' . $cleanArray['wachtwoord'] . '"
    WHERE id = ' . $results[0]['gebruikersaccount_id'] . '
  ';
  $secondQuery = 'UPDATE medewerkers SET
    voornaam = "' . $cleanArray['voornaam'] . '",
    tussenvoegsel = "' . $cleanArray['tussenvoegsel'] . '",
    achternaam = "' . $cleanArray['achternaam'] . '",
    inter_telefoonnummer = ' . $cleanArray['inter_telefoonnummer'] . ',
    afdeling_id = ' . $cleanArray['afdeling_id'] . '
    WHERE id = "' . $results[0]['medewerkers_id'] . '"
  ';

  $login->UpdateData($query);
  $login->UpdateData($secondQuery);

  header('location:/dashboard/user');
}
