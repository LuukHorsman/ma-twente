<section class="dashboard">
		<section class="content">
		<nav>
				<header>
						Ingelogd als<br>
						<b><?=$_SESSION["achternaam"]?></b>
				</header>
				<ul>
						<a href="/dashboard"><li id="dashboard"><i class="material-icons">&#xe871;</i>Dashboard</li></a>
						<a href="/dashboard/user"><li id="gebruikers"><i class="material-icons">&#xe87c;</i>Gebruikers</li></a>
				</ul>
		</nav>
		<main>
				<header><a href="/logout">Uitloggen</a></header>
				<?php include($user_page); ?>
		</main>
		</section>
</section>
