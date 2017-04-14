<section class="dashboard">
		<section class="content">
		<nav>
				<header>
						Ingelogd als<br>
						<b><?=$_SESSION["achternaam"]?></b>
				</header>
				<ul>
						<a href="/dashboard/"><li id="dashboard">Dashboard</li></a>
						<a href="/dashboard/user"><li id="gebruikers">Gebruikers</li></a>
				</ul>
		</nav>
		<main>
				<header><a href="/uitloggen">Uitloggen</a></header>
				<?php include($user_page); ?>
		</main>
		</section>
</section>
