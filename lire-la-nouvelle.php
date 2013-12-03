<div id="wrapper">

<div id="chapitre1" class="chapitreActif divChapitre">
		<div class="pageLivre">
		    <?php include_once("pages/chapitre1.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
                <a href="#" onclick="switchChapitre(1)"><img src="graphics/bouton-select.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(2)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(3)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(4)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(5)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(2)"><img src="graphics/nav-right.png" alt="Next" /></a>
            </span>
	  </div>
	</div>
    
	<div id="chapitre2" class="chapitreInactif divChapitre">
		<div class="pageLivre">
		   <?php include_once("pages/chapitre2.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(1)"><img src="graphics/nav-left.png" alt="Prev" /></a>
                <a href="#" onclick="switchChapitre(1)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(2)"><img src="graphics/bouton-select.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(3)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(4)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(5)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(3)"><img src="graphics/nav-right.png" alt="Next" /></a>
            </span>
		</div>
	</div>
    
	<div id="chapitre3" class="chapitreInactif divChapitre">
		<div class="pageLivre">
			<?php include_once("pages/chapitre3.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(2)"><img src="graphics/nav-left.png" align="Prev" /></a>
                <a href="#" onclick="switchChapitre(1)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(2)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(3)"><img src="graphics/bouton-select.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(4)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(5)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(4)"><img src="graphics/nav-right.png" alt="Next" /></a>
            </span>
		</div>
	</div>
    
	<div id="chapitre4" class="chapitreInactif divChapitre">
		<div class="pageLivre">
			<?php include_once("pages/chapitre4.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(3)"><img src="graphics/nav-left.png" align="Prev" /></a>
                <a href="#" onclick="switchChapitre(1)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(2)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(3)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(4)"><img src="graphics/bouton-select.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(5)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(5)"><img src="graphics/nav-right.png" alt="Next" /></a>
            </span>
		</div>
	</div>
    
	<div id="chapitre5" class="chapitreInactif divChapitre">
		<div class="pageLivre">
		    <?php include_once("pages/chapitre5.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(4)"><img src="graphics/nav-left.png" align="Prev" /></a>
                <a href="#" onclick="switchChapitre(1)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(2)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(3)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(4)"><img src="graphics/bouton.png" width="12" height="12" /></a>
                <a href="#" onclick="switchChapitre(5)"><img src="graphics/bouton-select.png" width="12" height="12" /></a>
            </span>
		</div>
	</div>
    
	
	<div class="partage">
		<div class="partagewrapper">
			<!-- Partage sur Twitter -->
			<div class="partagetwitter">
				<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="Culin'R">Tweet</a>
				<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			</div>
			
			<!-- Partage sur Facebook -->
			<div class="partagefacebook">
				<a name="fb_share" type="button_count" share_url="https://www.facebook.com/CulinR"></a>
				<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
			</div>
        </div>
	</div> 
       
</div>