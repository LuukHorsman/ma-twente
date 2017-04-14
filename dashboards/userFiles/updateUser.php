<div class="user-form">
	<form method="post">

		<h1>Medewerker Updaten</h1>

		<div class="form-label">Geslacht</div>
		<div class="form-attribute">
				<select name="geslacht">
						<?php
								$geslacht = $login->ReadData(['selectQuery' => 'SELECT `geslacht`.id, `geslacht`.geslacht_naam FROM `geslacht`']);

								foreach($geslacht as $row) {
										echo '<option ' . ($results[0]['geslacht_id'] == $row['id'] ? 'selected' : '') . ' class="" value=' . $row['id'] . '>' . $row['geslacht_naam'] . '</option>';
								}
						?>
				</select>
		</div>

		<div class="form-label">Voornaam*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['voornaam']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['voornaam'] ?>" type="text" name="voornaam">
		</div>

		<div class="form-label">Tussenvoegsel</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['tussenvoegsel']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['tussenvoegsel'] ?>" type="text" name="tussenvoegsel">
		</div>

		<div class="form-label">Achternaam*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['achternaam']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['achternaam'] ?>" type="text" name="achternaam">
		</div>

		<div class="form-label">Intern telefoonnummer*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['inter_telefoonnummer']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['inter_telefoonnummer'] ?>" type="text" name="inter_telefoonnummer">
		</div>

		<div class="form-label">Afdeling*</div>
		<div class="form-attribute">
				<select class="<?= (isset($error['match']['afdeling_id']) ? ERROR_NAME : '') ?>" name="afdeling_id">
						<option value="0">Selecteer een afdeling</option>
						<?php
								$afdeling = $login->ReadData(['selectQuery' => 'SELECT `afdeling`.id, `afdeling`.afdeling_naam FROM `afdeling`']);

								foreach($afdeling as $row) {
										echo '<option ' . ($results[0]['afdeling_id'] == $row['id'] ? 'selected' : '') . ' value=' . $row['id'] . '>' . $row['afdeling_naam'] . '</option>';
								}
						?>
				</select>
		</div>

		<div class="form-label">Email*</div>
		<div class="form-attribute">
				<input class="<?= (isset($error['match']['email']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['email'] ?>" type="text" name="email">
		</div>

		<input type="radio" name="status_id" value="1" checked>Administrator<br><br>
		<input type="submit" name="subbutton" value="Gebruiker Updaten">
	</form>

	<div class="error">
		<?= (isset($error['match']['inter_telefoonnummer']) ? '<p><i class="material-icons">&#xe000;</i> Het telefoonnummer mag alleen maar cijfers bevatten</p>' : '') ?>
		<?= (isset($error['match']['email']) ? '<p><i class="material-icons">&#xe000;</i> Het e-mail adres is nog niet ingevuld, voorbeeld: example@domein.nl</p>' : '') ?>
		<?= (isset($error['match']['afdeling_id']) ? '<p><i class="material-icons">&#xe000;</i> Geen afdeling gekozen</p>' : '') ?>
	</div>
</div>
