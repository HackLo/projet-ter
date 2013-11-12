<header>
	<div id="divNavContent">
		<!-- PARTIE LOGO -->
		<div id="divLogo"><a href="index.php"><img src="graphics/logo2.png" alt="Culin'R" /></a></div>
		<!-- MENU DE NAVIGATION -->
		<div class="boutonExpand" id="blocNavigationPourMobileIn" onclick="expandNav();">
			<div><img src="graphics/iconav.png" alt="Icone menu" /></div>
		</div>
		<div class="boutonExpand" id="blocNavigationPourMobileOut" onclick="unexpandNav();">
			<div><img src="graphics/iconav.png" alt="Icone menu" /></div>
		</div>
		<nav>
			<ul id="mainmenu">
	        	<li><a href="index.php?page=lire">Lire la nouvelle</a></li>
				<li onclick="expand('smHIS');" onmouseout="if(window.outerWidth > 840) {hideSM()};" onmouseover="expand('smHIS');"><a href="#">L'histoire</a>
					<ul class="sousmenu" id="smHIS">
						<li><a href="index.php?page=synopsis">Synopsis</a></li>
	                    <li><a href="index.php?page=univers">L'univers</a></li>
						<li><a href="index.php?page=personnages">Les personnages</a></li>
						<li><a href="index.php?page=parcours-initiatique">Le parcours initiatique</a></li>
					</ul>
				</li>
				<li><a href="index.php?page=et-apres">Et après</a></li>
				<li><a href="index.php?page=auteurs">Les auteurs</a></li>
	            <li onclick="expand('smBON');" onmouseout="if(window.outerWidth > 840) {hideSM()};" onmouseover="expand('smBON');"><a href="#">Bonus</a>
					<ul class="sousmenu" id="smBON">
						<li><a href="index.php?page=inspirations">Inspirations</a></li>
	                    <li><a href="index.php?page=recettes">Recettes du futur</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</header>