<?php
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = 0 ;
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
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<?php 
			
			switch ($page) {
				case 1:
					include_once("lire-la-nouvelle.php"); 
					break;
				
				case 10:
					include_once("synopsis.php"); 
					break;
				
				case 11:
					include_once("univers.php"); 
					break;
					
				case 12:
					include_once("les-personnages.php"); 
					break;
				
				case 13:
					include_once("le-parcours-initiatique.php"); 
					break;
						
				case 20:
					include_once("et-apres.php"); 
					break;
						
				case 30:
					include_once("les-auteurs.php"); 
					break;
				
				case 40:
					include_once("inspirations.php"); 
					break;
					
				case 41:
					include_once("recettes-du-futur.php"); 
					break;
					
				/*default:
					include_once("lorem.php"); 
					break;*/
			}
		?>
		<?php include_once("footer.php"); ?>
	</body>
</html>
