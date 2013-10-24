<script type="text/javascript">
	/**
	 *  Fonction qui permet d'afficher un block en display:none;
	 *  nomSM représente l'ID du block à afficher
	 */ 
	function expand(nomSM) {
		// Un clic a eu lieu sur un élément, on referme donc tous les sous-menus
		var sousmenus = document.getElementsByClassName("sousmenu");
		// On parcours l'élément avec une boucle
		// La boucle for a 3 paramètres : l'initialisation, la limite pour l'arrêt, l'incrémentation
		for(var i = 0; i < sousmenus.length; i++) {
			sousmenus[i].style.display = "none";
		}

		// On récupère l'élément via son ID
		sousliste = document.getElementById(nomSM);
		// On change sa propriété display: none en display:block
		sousliste.style.display = "block";
	};
</script>