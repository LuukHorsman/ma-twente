<?php

if(!isset($url[3]) || $url[3] == '') {
  header('location: /dashboard/user/delete/1');
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

  if(isset($_POST['deleteButton'])) {

  }
