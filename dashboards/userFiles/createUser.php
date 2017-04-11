<div>
	<form>
		
		<input type="submit" name="subbutton">
		<select>
			<?php
				$geslacht = $login->ReadData(['selectQuery' => 'SELECT `geslacht`.id, `geslacht`.geslacht_naam FROM `geslacht`']);

				foreach($geslacht as $row) {
					echo '<option value=' . $row['id'] . '>' . $row['geslacht_naam'] . '</option>';
				}

			?>
		</select>
	</form>
</div>