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
		<title>NOUVELLE</title>
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="global.css">
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<?php 
			
			switch ($page) {
				case 30:
					include_once("auteurs.php"); 
					break;
				
				default:
					include_once("lorem.php"); 
					break;
			}
		?>
		<?php include_once("footer.php"); ?>
	</body>
</html>
