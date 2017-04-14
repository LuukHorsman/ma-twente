<div class="user-form">
	<form method="post">

		<h1>Nieuwe Medewerker Toevoegen</h1>

		<div class="form-label">Geslacht</div>
		<div class="form-attribute">
				<select name="geslacht">
						<?php
								$geslacht = $login->ReadData(['selectQuery' => 'SELECT `geslacht`.id, `geslacht`.geslacht_naam FROM `geslacht`']);

								foreach($geslacht as $row) {
										echo '<option class="" value=' . $row['id'] . '>' . $row['geslacht_naam'] . '</option>';
								}
						?>
				</select>
		</div>

		<div class="form-label">Voornaam*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['voornaam']) ? ERROR_NAME : '') ?>" value="<?= (isset($_POST['voornaam']) ? $_POST['voornaam'] : '') ?>" type="text" name="voornaam">
		</div>

		<div class="form-label">Tussenvoegsel</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['tussenvoegsel']) ? ERROR_NAME : '') ?>" value="<?= (isset($_POST['tussenvoegsel']) ? $_POST['tussenvoegsel'] : '') ?>" type="text" name="tussenvoegsel">
		</div>

		<div class="form-label">Achternaam*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['achternaam']) ? ERROR_NAME : '') ?>" value="<?= (isset($_POST['achternaam']) ? $_POST['achternaam'] : '') ?>" type="text" name="achternaam">
		</div>

		<div class="form-label">Intern telefoonnummer*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['inter_telefoonnummer']) ? ERROR_NAME : '') ?>" value="<?= (isset($_POST['inter_telefoonnummer']) ? $_POST['inter_telefoonnummer'] : '') ?>" type="text" name="inter_telefoonnummer">
		</div>

		<div class="form-label">Afdeling*</div>
		<div class="form-attribute">
				<select class="<?= (isset($error['match']['afdeling_id']) ? ERROR_NAME : '') ?>" name="afdeling_id">
						<option value="0">Selecteer een afdeling</option>
						<?php
								$afdeling = $login->ReadData(['selectQuery' => 'SELECT `afdeling`.id, `afdeling`.afdeling_naam FROM `afdeling`']);

								foreach($afdeling as $row) {
										echo '<option ' . (isset($_POST['afdeling_id']) && $_POST['afdeling_id'] == $row['id'] ? 'selected' : '') . ' value=' . $row['id'] . '>' . $row['afdeling_naam'] . '</option>';
								}
						?>
				</select>
		</div>

		<div class="form-label">Email*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['email']) ? ERROR_NAME : '') ?>" value="<?= (isset($_POST['email']) ? $_POST['email'] : '') ?>" type="text" name="email">
		</div>

		<div class="form-label">Wachtwoord*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['wachtwoord']) ? ERROR_NAME : '') ?>" value="<?= (isset($_POST['wachtwoord']) ? $_POST['wachtwoord'] : '') ?>" type="password" name="wachtwoord">
		</div>

		<input type="radio" name="status_id" value="1" checked>Maak gebruiker een administrator<br><br>
		<input type="submit" name="subbutton" value="Gebruiker Toevoegen">
	</form>
	
	<div class="error">
		<?= (isset($error['match']['inter_telefoonnummer']) ? '<p><i class="material-icons">&#xe000;</i> Het telefoonnummer mag alleen maar cijfers bevatten</p>' : '') ?>
		<?= (isset($error['match']['email']) ? '<p><i class="material-icons">&#xe000;</i> Het e-mail adres is nog niet ingevuld, voorbeeld: example@domein.nl</p>' : '') ?>
		<?= (isset($error['match']['afdeling_id']) ? '<p><i class="material-icons">&#xe000;</i> Geen afdeling gekozen</p>' : '') ?>
	</div>
</div>
