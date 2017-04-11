<div>
	<form method="post">

		<h3>Nieuwe Medewerker Toevoegen</h3>

		Geslacht
		<select name="geslacht">
				<?php
						$geslacht = $login->ReadData(['selectQuery' => 'SELECT `geslacht`.id, `geslacht`.geslacht_naam FROM `geslacht`']);

						foreach($geslacht as $row) {
								echo '<option value=' . $row['id'] . '>' . $row['geslacht_naam'] . '</option>';
						}
				?>
		</select><br>

		Voorletter
		<input type="text" name="voorletter"><br>

		Tussenvoegsel
		<input type="text" name="tussenvoegsel"><br>

		Achternaam
		<input type="text" name="Achternaam"><br>

		Afdeling
		<select name="afdeling">
				<option disabled selected>Selecteer een afdeling</option>
				<?php
						$afdeling = $login->ReadData(['selectQuery' => 'SELECT `afdeling`.id, `afdeling`.afdeling_naam FROM `afdeling`']);

						foreach($afdeling as $row) {
								echo '<option value=' . $row['id'] . '>' . $row['afdeling_naam'] . '</option>';
						}
				?>
		</select><br><br>

		Email <input type="text" name="email"><br>
		Wachtwoord <input type="text" name="password"><br>
		<input type="radio" name="" value="1" checked>Maak gebruiker een administrator<br><br>
		<input type="submit" name="subbutton" value="Gebruiker Toevoegen">

				<?php

				?>
	</form>
</div>
