<div id="wrapper">
    <h1>Contacter la rédaction</h1>
    <?php
    	ini_set("display_errors",0);error_reporting(0);
		$errorMsg = '';
		$mail = filter_input(INPUT_POST, 'adressemail', FILTER_VALIDATE_EMAIL) ;
		$objet = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_SPECIAL_CHARS) ;
		$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ;

		if ($mail === FALSE) {
			echo "Le mail fourni n'est pas valide" ;
		}
		elseif($mail === NULL) {
			//echo "L'adresse email n'est pas définie." ;
		}
		else {
			//echo "La variable est une adresse e-mail valide : $mail";
			$destinataire = "loic.barouty@etu.univ-poitiers.fr";
			mail($destinataire, $objet, $message) or die("La fonction mail du serveur est momentanément désactivée !");
		}
	?>
    <p><?php echo $errorMsg; ?></p>
	<form id='contact' method="post" action="index.php?page=contact" enctype="multipart/form-data">
		<p id='obj'>
			<label for='objet'>Objet de votre message<br>
  				<input type='text' name='objet' id='objet' tabindex='10' size='30'>
  			</label>
  		</p> 

  		<p id="adr">
  			<label for="mail">Votre adresse e-mail<br>
				<input name="adressemail" tabindex="20" size="30" type="email" id="mail" value="">
			</label>
		</p>
  
		<p id="msg">
			<label for="message">Votre message<br>
				<textarea tabindex="30" rows="10" cols="50" name="message" id="message"></textarea>
			</label>
		</p>
		<input type="submit"/>
	</form>
</div>