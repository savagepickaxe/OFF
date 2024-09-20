
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keyword" content="">
	<meta name="author" content="">
	<meta charset="utf-8">
	<title>Un beau titre ici!</title>
	<link rel="stylesheet" href="liaisons/css/styles.css">
</head>

<body>
<?php
echo "Projet OFF!";
?>
	<header>
	 <h1>Entête de site</h1>   
	 <nav class="menu menu--ferme">
            <ul class="menu__liste">
                <li class="menu__listeItem"><a href="#" class="menu__lien">Accueil</a></li>
                <li class="menu__listeItem"><a href="#" class="menu__lien">Niveau 1</a></li>
                <li class="menu__listeItem"><a href="#" class="menu__lien">Niveau 2</a></li>
            </ul>
        </nav>
	</header>

	<main>
		<div id="contenu" class="conteneur">
			<h2>Entête de page</h2>
			<section>
				<h3>Entête de section</h3>
				<article>
					<header>
						<h4>Entête d'article</h4>
					</header>
					<p>Lorem ipsum dolor HTML5 nunc aut nunquam sit amet, consectetur adipiscing elit. Vivamus at est eros, vel fringilla urna.</p>
					<p>Per inceptos himenaeos. Quisque feugiat, justo at vehicula pellentesque, turpis lorem dictum nunc.</p>
					<footer>
						<h5>Pied d'article</h5>
					</footer>
				</article>
				<article>
					<header>
						<h4>Entête d'article</h4>
					</header>
					<p>Lorem ipsum dolor nunc aut nunquam sit amet, consectetur adipiscing elit. Vivamus at est eros, vel fringilla urna. Pellentesque odio</p>
					<footer>
						<h5>Pied d'article</h5>
					</footer>
				</article>
			</section>
		</div>
	
   
        <p><a href="#" class="bouton">Bouton</a></p>
		<p><a href="#" class="bouton--inverse">Bouton</a></p>
     <a href="#" class="hyperlien">lien test!</a>
	</main>
	
	<aside>
            <h3>Barre latérale</h3>
            <p>Lorem ipsum dolor nunc aut nunquam sit amet, consectetur adipiscing elit. Vivamus at est eros, vel fringilla urna. Pellentesque odio rhoncus</p>
	</aside>
	
	<footer>
		<h3>Pied de page</h3>
		<p>Lorem ipsum dolor nunc aut nunquam sit amet, consectetur adipiscing elit. Vivamus at est eros, vel fringilla urna. Pellentesque odio rhoncus</p>
	</footer>
	<script src="liaisons/js/_menu.js"></script>
</body>
</html>