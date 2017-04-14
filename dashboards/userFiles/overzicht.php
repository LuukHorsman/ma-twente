<div>
	<?php
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
			']);
	?>

	<table>
		<tr>
			<th>Voornaam</th>
			<th>Tussenvoegsel</th>
			<th>Achternaam</th>
			<th>Geslacht</th>
			<th>Afdeling</th>
			<th>E-mail</th>
			<th>Intern Telefoonnummer</th>
			<th>Actions</th>
		</tr>
		<?php
			foreach($results as $row) {
				echo '<tr>';
				echo '<td>' . $row['voornaam']  . '</td>';
				echo '<td>' . $row['tussenvoegsel']  . '</td>';
				echo '<td>' . $row['achternaam']  . '</td>';
				echo '<td>' . $row['geslacht_naam']  . '</td>';
				echo '<td>' . $row['afdeling_naam']  . '</td>';
				echo '<td>' . $row['email']  . '</td>';
				echo '<td>' . $row['inter_telefoonnummer']  . '</td>';
				echo '<td>' . '<a href="/dashboard/user/update/' . $row['gebruikersaccount_id'] . '">update</a>' . '</td>';
				echo '<td>' . '<a href="/dashboard/user/delete/' . $row['gebruikersaccount_id'] . '">delete</a>' . '</td>';
				echo '</tr>';
			}
		?>
	</table>
</div>
