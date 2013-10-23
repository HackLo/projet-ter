<script type="text/javascript">
	/**
	 *  Fonction qui permet d'afficher un block en display:none;
	 *  nomSM représente l'ID du block à afficher
	 */ 
	function expand(nomSM) {
		// On récupère l'élément via son ID
		sousliste = document.getElementById(nomSM);
		// On change sa propriété display: none en display:block
		sousliste.style.display = "block";
	};
</script>