<?php 
session_start();  
?>
				   
			 <div id="top">
				<div title="Informaix" rel="home"><img id="logo" src="../img/LOGO_OFFICIEL_INFORMAIX.svg" alt="Informaix" /></div>
			</div> 
			<img id="logo_mobile" src="../img/logo.svg" alt="Informaix" />

				<a class="toggle-nav" style="font-size:100px" href="#">≡</a>
			</nav>
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
<nav class="menu">
				<ul class="active">
						<li class="current-item"><a href="../index.php">Home</a></li>
						<li><a href="../planning.php"><span>Planning</span></a></li>
						<li><a href="chat.php"><span>Chat</span></a></li>
						<li><a id="media" href="../projet.php"><span>Média</span></a></li>
						<li><a href="../battles.php"><span></span>Battles</a></li>
						<li><a href="../contact.php"><span>Contact</span></a></li>

					<!--<a href="https://www.facebook.com/InformAix/?fref=ts"><img style="left:10px" id="social" src="../img/fb.svg" /></a>
					<a href="https://twitter.com/InformAix"><img style="left:70px" id="social" src="../img/twt.svg" /></a>
					<a href="https://www.youtube.com/channel/UCXEDbzxXz3QP8Ixwb4UAkng"><img style="left:130px" id="social" src="../img/yt.svg" /></a>-->

									<?php 
					if (isset($_SESSION['id']))
					{ ?>
						<p>	
						<?php  
							if (isset($_SESSION['nom'])&&isset($_SESSION['prenom']))
	
								echo '<a href="../membres/afficher_profil.php?id='.$_SESSION['id'].'&amp;action=afficher"><img id="avatar_2" src="../membres/avatar/'.$_SESSION['avatar'].'" /></a>' ; 
								echo '</p>';
						?>
						</p>
					<?php 
					}
					else 
					{ ?>
						<a id="connexion" href="../membres/connexion.php"><p>	
						<?php
							echo "Connexion"; 
	 					?></p></a>
	 					<a id="connexion" style="background:#EB6B56;" href="../membres/connexion.php"><p>	
						<?php
							echo "Inscription"; 
	 					?></p></a>
	 				<?php
	 			}
			?>
				   
			</ul>
			</nav>

