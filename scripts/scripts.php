<script type="text/javascript">

	function hideSM() {
		// Un clic a eu lieu sur un élément, on referme donc tous les sous-menus
		var sousmenus = document.getElementsByClassName("sousmenu");
		// On parcours l'élément avec une boucle
		// La boucle for a 3 paramètres : l'initialisation, la limite pour l'arrêt, l'incrémentation
		for(var i = 0; i < sousmenus.length; i++) {
			sousmenus[i].style.display = "none";
		}
	};

	/**
	 *  Fonction qui permet d'afficher un block en display:none;
	 *  nomSM représente l'ID du block à afficher
	 */ 
	function expand(nomSM) {
		alert("function expand");
		hideSM();

		// On récupère l'élément via son ID
		sousliste = document.getElementById(nomSM);
		// On change sa propriété display: none en display:block
		sousliste.style.display = "block";
	};

	function expandNav() {
		var mainmenu = document.getElementsByTagName("nav");
		var blockIn = document.getElementById("blocNavigationPourMobileIn");
		var blockOut = document.getElementById("blocNavigationPourMobileOut");

		mainmenu[0].style.display = "block";
		blockIn.style.display = "none";
		blockOut.style.display = "block";
	};
	function unexpandNav() {
		var mainmenu = document.getElementsByTagName("nav");
		var blockIn = document.getElementById("blocNavigationPourMobileIn");
		var blockOut = document.getElementById("blocNavigationPourMobileOut");

		mainmenu[0].style.display = "none";
		blockIn.style.display = "block";
		blockOut.style.display = "none";
	};
</script>