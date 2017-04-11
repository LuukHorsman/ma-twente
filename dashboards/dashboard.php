<section class="dashboard">
		<header>
				<div class="nav-trigger"><i class="material-icons">&#xe5d2;</i></div>
		</header>
		<nav>
				<!-- <div>Ingelogd als <?= $_SESSION["voornaam"] . ". " . $_SESSION["achternaam"]; ?></div> -->
				<ul>
						<a href="/dashboard"><li>Dashboard</li></a>
						<a href="/"><li>Incidenten</li></a>
					  <a href=""><li>Medewerkers</li></a> <!-- ALLEEN VOOR BEHEERDERS -->
						<a href=""><li>Configuraties</li></a> <!-- ALLEEN VOOR BEHEERDERS -->
				</ul>
				<div><a href="/logout">Logout</a></div>
				<div>Milieu-Advies Twente</div>
		</nav>
</section>
