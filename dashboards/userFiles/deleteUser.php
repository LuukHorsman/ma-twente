<div class="user-form">
	<form method="post">

		<h1>Medewerker Verwijderen</h1>

		<div class="form-label">Voornaam</div>
		<div class="form-attribute">
				<input disabled class="<?= (isset($error['match']['voornaam']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['voornaam'] ?>" type="text" name="voornaam">
		</div>

		<div class="form-label">Tussenvoegsel</div>
		<div class="form-attribute">
				<input disabled class="<?= (isset($error['match']['tussenvoegsel']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['tussenvoegsel'] ?>" type="text" name="tussenvoegsel">
		</div>

		<div class="form-label">Achternaam</div>
		<div class="form-attribute">
				<input disabled class="<?= (isset($error['match']['achternaam']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['achternaam'] ?>" type="text" name="achternaam">
		</div>

		<div class="form-label">Intern telefoonnummer</div>
		<div class="form-attribute">
				<input disabled class="<?= (isset($error['match']['inter_telefoonnummer']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['inter_telefoonnummer'] ?>" type="text" name="inter_telefoonnummer">
		</div>

		<div class="form-label">Email</div>
		<div class="form-attribute">
				<input disabled class="<?= (isset($error['match']['email']) ? ERROR_NAME : '') ?>" value="<?= $results[0]['email'] ?>" type="text" name="email">
		</div>

		<input type="submit" name="deleteButton" value="Gebruiker Deleten">
	</form>

	<div class="error">
		<?= (isset($error['match']['inter_telefoonnummer']) ? '<p><i class="material-icons">&#xe000;</i> Het telefoonnummer mag alleen maar cijfers bevatten</p>' : '') ?>
		<?= (isset($error['match']['email']) ? '<p><i class="material-icons">&#xe000;</i> Het e-mail adres is nog niet ingevuld, voorbeeld: example@domein.nl</p>' : '') ?>
		<?= (isset($error['match']['afdeling_id']) ? '<p><i class="material-icons">&#xe000;</i> Geen afdeling gekozen</p>' : '') ?>
	</div>
</div>
