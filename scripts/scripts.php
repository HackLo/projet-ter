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
		//alert("function expand");
		hideSM();

		//if(window.outerWidth < 840) {
			// On récupère l'élément via son ID
			sousliste = document.getElementById(nomSM);
			// On change sa propriété display: none en display:block
			sousliste.style.display = "block";
		//}
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

	function reorganiser()
	{
		/*var w=window.outerWidth;
		var h=window.outerHeight;
		var txt="Window size: width=" + w + ", height=" + h;
		document.getElementById("demo").innerHTML=txt;*/
		/*if(window.outerWidth > 840) {
			var mainmenu = document.getElementsByTagName("nav");
			var blockIn = document.getElementById("blocNavigationPourMobileIn");
			var blockOut = document.getElementById("blocNavigationPourMobileOut");
			var imageAccueilMobile = document.getElementById("imageAccueilMobile");

			imageAccueilMobile.style.display = "none";
			mainmenu[0].style.display = "block";
			blockIn.style.display = "none";
			blockOut.style.display = "none";
		}
		else {
			var blockIn = document.getElementById("blocNavigationPourMobileIn");
			var blockOut = document.getElementById("blocNavigationPourMobileOut");
			var imageAccueilMobile = document.getElementById("imageAccueilMobile");

			imageAccueilMobile.style.display = "block";
			blockIn.style.display = "block";
			blockOut.style.display = "none";
		}*/
	}

	document.getElementsByClassName = function(cl)
	{
		//alert("getElementsByClassName perso");
	    var retnode = [];
	    var myclass = new RegExp('\\b'+cl+'\\b');
	    var elem = this.getElementsByTagName('*');
	    for (var i = 0; i < elem.length; i++)
	    {
	        var classes = elem[i].className;
	        if (myclass.test(classes))
	            retnode.push(elem[i]);
	    }
	    return retnode;
	};

	function switchChapitre(num) {
		listeChapitres = document.getElementsByClassName('divChapitre');
		for (var i in listeChapitres) {
			listeChapitres[i].setAttribute('class', 'chapitreInactif divChapitre');
			listeChapitres[i].className = 'chapitreInactif divChapitre';// pour IE
		}
		var nomChapitre = "chapitre"+num ;
		var actif = document.getElementById(nomChapitre);
		actif.setAttribute('class', 'chapitreActif divChapitre');
		actif.className = 'chapitreActif divChapitre';// pour IE
	}


</script>