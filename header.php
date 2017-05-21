<?php 
   session_start();
?>
    <meta charset="UTF-8">

<?php
	if(isset($_GET['m']) && $_GET['m'] == '1'){
						
		echo("<header id=\"header\" style=\"width: 152%;\">");
		}
					
		else{
		
		echo("<header>");
						
			}
						
?>
<head>
<link rel="stylesheet" type="text/css" href="hover.css">

</head>
<div id="top">
   <a href="index.php">
      <div title="Inform'Aix" rel="home"><img id="logo" src="img/LOGO_OFFICIEL_INFORMAIX.svg" alt="Inform'Aix" /></div>
   </a>
</div>



<a href="index.php"><img id="logo_mobile" src="img/logo.svg" onclick="window.location.replace('index.php');" alt="Inform'Aix"

<?php

	if(isset($_GET['m']) && $_GET['m'] == '1'){
		echo("style=\"margin-left: 28%;\""); 
	}
?>

 /></a>




<a class="toggle-nav" style="font-size:100px" href="#">≡</a>
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
   <ul class="active"
   
   <?php

	if(isset($_GET['m']) && $_GET['m'] == '1'){
		echo("style=\"width: 150%; margin-top: -18px\""); 
	}
?>

>
		<div class="all_nav">
		  <div id="first_nav">
			 <li class="current-item"><a href="index.php">
			 
			  <?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   if($pageName == "index.php"){ 
				   ?>		
				<b>Home</b>
				<?php } else {?>
				Home <?php } ?>
			 
			 </a></li>
 			 <li><a href="planning.php"><span class="hvr-underline-from-left">
				<?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   if($pageName == "planning.php"){ 
				   ?>		
				<b>Planning global</b>
				<?php } else {?>
				Planning global <?php } ?>
				</span></a>
			 </li>


 			 <li><a href="planning-defaut.php"><span class="hvr-underline-from-left">
				<?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   if($pageName == "planning-defaut.php"){ 
				   ?>		
				<b>Mon planning</b>
				<?php } else {?>
				Mon planning <?php } ?>
				</span></a>
			 </li>


			 
			 <li><a href="minichat/chat.php"><span class="hvr-underline-from-left">
				<?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   ?>
				   <?php
				   if($pageName == "chat.php"){ 
				   ?>		
				<b>Chat</b>
				<?php } else {?>
				Chat <?php } ?>
				</span></a>
			 </li>
		  </div>
		  <div id="second_nav">
			 <li><a href="projet.php"><span>
				<?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   if($pageName == "projet.php"){ 
				   ?>		
				<b>Média</b>
				<?php } else {?>
				Média <?php } ?>
				</span></a>
			 </li>
			  <li><a href="battles.php"><span></span>
			  
			   <?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   if($pageName == "battles.php"){ 
				   ?>		
				<b>Battles</b>
				<?php } else {?>
				Battles <?php } ?>
			  
			  </a></li>
			 <li><a href="contact.php"><span>
			 
			   
			   <?php 
				   $pageName = basename($_SERVER['PHP_SELF']);
				   if($pageName == "contact.php"){ 
				   ?>		
				<b>Contact</b>
				<?php } else {?>
				Contact <?php } ?>
			  
			 
			 </span></a></li>
		  </div>
	 </div> 
      <?php 
         if (isset($_SESSION['id']))
         { ?>
      <p>	
         <?php  
            if (isset($_SESSION['nom'])&&isset($_SESSION['prenom']))
            
            	echo '<a href="membres/afficher_profil.php?id='.$_SESSION['id'].'&amp;action=afficher"><img id="avatar_2" src="membres/avatar/'.$_SESSION['avatar'].'" /></a>' ; 
            	echo '</p>';
            ?>
      </p>
      <?php 
         }
         else 
         { ?>
      <a id="connexion" href="membres/connexion.php">
         <p>Connexion</p>
      </a>
      <?php echo '<a id="connexion" style="background:#EB6B56;" href="membres/connexion.php"><p>Inscription</p></a>' ?>
      <?php
         }
         ?>
   </ul>
</nav>