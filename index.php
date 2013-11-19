<?php
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = 'accueil' ;
	}
?>
<!DOCTYPE html>
<html>
	<head lang="fr">
		<title>Culin'R - Un voyage initiatique à travers la cuisine du futur</title>

		<!-- BALISES META -->
		<meta charset="utf-8">
		<meta name="author" content="Esther WIEST, Loïc BAROUTY, Lucas LEROUX, Mélanie ROY, Romain OUVRARD, Vasylyna GOLOVNYA">
		<meta name="description" content="Site de médiatisation de la nouvelle de TER">
		<meta name="keywords" content="nouvelle, ter">

		<!-- LIENS VERS LES FICHIERS CSS -->
		<link rel="stylesheet" href="global.css">

		<!-- AJOUT DU JAVASCRIPT VIA LES FICHIERS CI-DESSOUS -->
		<?php include_once("scripts/scripts.php"); ?>
	</head>
	<body onresize="reorganiser()">
		<!-- INCLUSION DU HEADER -->
		<?php include_once("header.php"); ?>

		<!-- INCLUSION DU CONTENU -->
		<?php 
			
			switch ($page) {
				case 'accueil':
					include_once("accueil.php"); 
					break;

				case 'lireN':
					include_once("lire-la-nouvelle.php"); 
					break;
				
				case 'synopsis':
					include_once("synopsis.php"); 
					break;
				
				case 'univers':
					include_once("univers.php"); 
					break;
					
				case 'personnages':
					include_once("les-personnages.php"); 
					break;
				
				case 'parcours-initiatique':
					include_once("le-parcours-initiatique.php"); 
					break;
						
				case 'et-apres':
					include_once("et-apres.php"); 
					break;
						
				case 'auteurs':
					include_once("les-auteurs.php"); 
					break;
				
				case 'inspirations':
					include_once("inspirations.php"); 
					break;
					
				case 'recettes':
					include_once("recettes-du-futur.php"); 
					break;
					
				case 'plan':
					include_once("plan-du-site.php"); 
					break;
					
				case 'mentions':
					include_once("mentions-legales.php"); 
					break;
					
				default:
					include_once("lorem.php"); 
					break;
			}
		?>

		<!-- INCLUSION DU FOOTER -->
		<?php include_once("footer.php"); ?>
	</body>
</html>
