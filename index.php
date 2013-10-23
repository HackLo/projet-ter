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
		<meta charset="utf-8">
		<title>Culin'R - Un voyage initiatique à travers la cuisine du futur</title>
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="global.css">
		<?php include_once("scripts/scripts.php"); ?>
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<?php 
			
			switch ($page) {
				case 'accueil':
					include_once("lorem.php"); 
					break;

				case 'lire':
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
		<?php include_once("footer.php"); ?>
	</body>
</html>
