<div id="wrapper">

<div id="chapitre1" class="chapitreActif divChapitre">
		<div class="pageLivre">
		    <?php include_once("pages/chapitre1.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
				<?php
					for($i=1 ; $i <= 5 ; $i++) {
				?>
						<a href='#' onclick='switchChapitre(<?php echo $i ; ?>)'><span class='boutonSwitchChapitre<?php if ($i==1) echo "Actif"; ?>'></span></a>
				<?php
					}
				?>
                <a href="#" onclick="switchChapitre(2)"><span class="flecheDrt"></span></a>
            </span>
	  </div>
	</div>
    
	<div id="chapitre2" class="chapitreInactif divChapitre">
		<div class="pageLivre">
		   <?php include_once("pages/chapitre2.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(1)"><span class="flecheGche"></span></a>
                <?php
					for($i=1 ; $i <= 5 ; $i++) {
				?>
						<a href='#' onclick='switchChapitre(<?php echo $i ; ?>)'><span class='boutonSwitchChapitre<?php if ($i==2) echo "Actif"; ?>'></span></a>
				<?php
					}
				?>
                <a href="#" onclick="switchChapitre(3)"><span class="flecheDrt"></span></a>
            </span>
		</div>
	</div>
    


	<div id="chapitre3" class="chapitreInactif divChapitre">
		<div class="pageLivre">
			<?php include_once("pages/chapitre3.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(2)"><span class="flecheGche"></span></a>
                <?php
					for($i=1 ; $i <= 5 ; $i++) {
				?>
						<a href='#' onclick='switchChapitre(<?php echo $i ; ?>)'><span class='boutonSwitchChapitre<?php if ($i==3) echo "Actif"; ?>'></span></a>
				<?php
					}
				?>
                <a href="#" onclick="switchChapitre(4)"><span class="flecheDrt"></span></a>
            </span>
		</div>
	</div>
    
	<div id="chapitre4" class="chapitreInactif divChapitre">
		<div class="pageLivre">
			<?php include_once("pages/chapitre4.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(3)"><span class="flecheGche"></span></a>
                <?php
					for($i=1 ; $i <= 5 ; $i++) {
				?>
						<a href='#' onclick='switchChapitre(<?php echo $i ; ?>)'><span class='boutonSwitchChapitre<?php if ($i==4) echo "Actif"; ?>'></span></a>
				<?php
					}
				?>
                <a href="#" onclick="switchChapitre(5)"><span class="flecheDrt"></span></a>
            </span>
		</div>
	</div>
    
	<div id="chapitre5" class="chapitreInactif divChapitre">
		<div class="pageLivre">
		    <?php include_once("pages/chapitre5.php"); ?>
		</div>
		<div class="chapitreNav">
			<span>
            	<a href="#" onclick="switchChapitre(4)"><span class="flecheGche"></span></a>
                <?php
					for($i=1 ; $i <= 5 ; $i++) {
				?>
						<a href='#' onclick='switchChapitre(<?php echo $i ; ?>)'><span class='boutonSwitchChapitre<?php if ($i==5) echo "Actif"; ?>'></span></a>
				<?php
					}
				?>
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