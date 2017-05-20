<?php 
session_start();  
?>
	<!-- ----JS----- -->

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script> 
		jQuery(document).ready(function() {
		jQuery('.toggle-nav').click(function(e) {
		jQuery(this).toggleClass('active');
		jQuery('.menu ul').toggleClass('active');
		e.preventDefault();
			});
		});
	</script>

	<!-- ----Logo----- -->
	
	<div id="top">
		<div title="Informaix" rel="home">
			<img id="logo" src="../img/LOGO_OFFICIEL_INFORMAIX.svg" alt="Informaix" />
		</div>
	</div> 
	<img id="logo_mobile" src="../img/logo.svg" alt="Informaix" />

	<!-- ----Menu----- -->

	<a class="toggle-nav" href="#">≡</a>
	<nav class="menu">
		<ul class="active">
			<li class="current-item"><a href="../index.php">Home</a></li>
			<li><a href="../planning.php"><span>Planning</span></a></li>
			<li><a href="../minichat/chat.php"><span>Chat</span></a></li>
			<li><a id="media" href="../projet.php"><span>Média</span></a></li>
			<li><a href="../battles.php"><span></span>Battles</a></li>
			<li><a href="../contact.php"><span>Contact</span></a></li>
	
	<!-- ----Session----- -->
	
			<?php
				if (isset($_SESSION['id']))
				{ 
					if (isset($_SESSION['nom'])&&isset($_SESSION['prenom']))
					{
						echo '<p><a href="afficher_profil.php?id='.$_SESSION['id'].'&amp;action=afficher">
								<img id="avatar_2" src="avatar/'.$_SESSION['avatar'].'" /></a></p>' ;
					}
					else 
					{
						echo '<a id="connexion" href="connexion.php"><p>' ; 
						echo 'Connexion</p></a>'; 
						echo '<a id="connexion" style="background:#EB6B56;" href="connexion.php"><p>' ; 	
						echo "Inscription</p></a>"; 
					}
				}
			?>
		</ul>
	</nav>