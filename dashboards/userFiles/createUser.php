<div>
	<form method="post">

		<h3>Nieuwe Medewerker Toevoegen</h3>

		Geslacht
		<select name="geslacht">
				<?php
						$geslacht = $login->ReadData(['selectQuery' => 'SELECT `geslacht`.id, `geslacht`.geslacht_naam FROM `geslacht`']);

						foreach($geslacht as $row) {
								echo '<option class="" value=' . $row['id'] . '>' . $row['geslacht_naam'] . '</option>';
						}
				?>
		</select><br>

		Voornaam*
		<input class="<?= (isset($error['match']['voornaam']) ? 'createError' : '') ?>" value="<?= (isset($_POST['voornaam']) ? $_POST['voornaam'] : '') ?>" type="text" name="voornaam"><br>

		Tussenvoegsel
		<input class="<?= (isset($error['match']['tussenvoegsel']) ? 'createError' : '') ?>" value="<?= (isset($_POST['tussenvoegsel']) ? $_POST['tussenvoegsel'] : '') ?>" type="text" name="tussenvoegsel"><br>

		Achternaam*
		<input class="<?= (isset($error['match']['achternaam']) ? 'createError' : '') ?>" value="<?= (isset($_POST['achternaam']) ? $_POST['achternaam'] : '') ?>" type="text" name="achternaam"><br>

		Intern telefoonnummer*
		<input class="<?= (isset($error['match']['inter_telefoonnummer']) ? 'createError' : '') ?>" value="<?= (isset($_POST['inter_telefoonnummer']) ? $_POST['inter_telefoonnummer'] : '') ?>" type="text" name="inter_telefoonnummer"><br>

		Afdeling*
		<select class="<?= (isset($error['match']['afdeling_id']) ? 'createError' : '') ?>" name="afdeling_id">
				<option value="0">Selecteer een afdeling</option>
				<?php
						$afdeling = $login->ReadData(['selectQuery' => 'SELECT `afdeling`.id, `afdeling`.afdeling_naam FROM `afdeling`']);

						foreach($afdeling as $row) {
								echo '<option ' . (isset($_POST['afdeling_id']) && $_POST['afdeling_id'] == $row['id'] ? 'selected' : '') . ' value=' . $row['id'] . '>' . $row['afdeling_naam'] . '</option>';
						}
				?>
		</select><br><br>

		Email* <input class="<?= (isset($error['match']['email']) ? 'createError' : '') ?>" value="<?= (isset($_POST['email']) ? $_POST['email'] : '') ?>" type="text" name="email"><br>
		Wachtwoord* <input class="<?= (isset($error['match']['wachtwoord']) ? 'createError' : '') ?>" value="<?= (isset($_POST['wachtwoord']) ? $_POST['wachtwoord'] : '') ?>" type="password" name="wachtwoord"><br>
		<input type="radio" name="status_id" value="1" checked>Maak gebruiker een administrator<br><br>
		<input type="submit" name="subbutton" value="Gebruiker Toevoegen">
	</form>

	<div class="error">
		<?= (isset($error['match']['inter_telefoonnummer']) ? 'Het telefoonnummer mag alleen maar cijfers bevatten!<br>' : '') ?>
		<?= (isset($error['match']['email']) ? 'Het E-mail adres is nog niet ingevuld, een voorbeeld zou kunnen zijn: example@domein.nl<br>' : '') ?>
		<?= (isset($error['match']['afdeling_id']) ? 'U moet nog een afdeling kiezen!<br>' : '') ?>
	</div>
</div>
