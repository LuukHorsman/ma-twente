<section>
	<article class="login">
			<header class="login_header">
				<h1>Inloggen Milieu-Advies Twente</h1>
			</header>
			<main class="login_main">
					<form method="post">
							<label class="login_label">
								<input class="login_input" type="text" name="username" id="username" placeholder="E-mail">
							</label>
							<label>
								<input class="login_input" type="password" name="password" id="password" placeholder="Wachtwoord">
							</label>
							<label>
								<input type="submit" name="login" value="Inloggen">
							</label>
					</form>
			</main>
			<footer class="login_footer">
			<?php
			if(isset($_POST['login'])) {
				echo (isset($error['username']) && $error['username']) ? 'Gebruikersnaam niet ingevuld. <br>' : '';
				echo (isset($error['password']) && $error['password']) ? 'Wachtwoord niet ingevuld.' : '';
				echo (isset($error['wrong']) && $error['wrong']) ? 'Geen gebruikers gevonden.' : '';
			}
			?>
			</footer>
	</article>
</section>
