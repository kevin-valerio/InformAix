<?php
	/* -- Changement rôle  -- */
	include("../include/bdd.php") ;
		if(isset($_POST['membre']))
		{
			$req = $bdd->query('UPDATE membres SET id_group = "1" WHERE id = \''.$_GET['id'].'\'');
		}
		if(isset($_POST['moderateur']))
		{
			$req = $bdd->query('UPDATE membres SET id_group = "2" WHERE id = \''.$_GET['id'].'\'');
		}
		if(isset($_POST['administrateur']))
		{
			$req = $bdd->query('UPDATE membres SET id_group = "3" WHERE id = \''.$_GET['id'].'\'');
		}
		if(isset($_POST['professeur']))
		{
			$req = $bdd->query('UPDATE membres SET id_group = "4" WHERE id = \''.$_GET['id'].'\'');
		}
?>
<!DOCTYPE html> 
<html lang="fr"> 
        <head>
            <style type="text/css">
            <style type="text/css"/>a:link{text-decoration:none}</style>
            <link id="Projet" rel="stylesheet" href="../css/stylesheet.css"/>
            <meta name ="robots" content ="index , follow" />
            <title>Informaix</title>
            <meta name="description" content="Informaix" />
            <link rel="icon" href="img/favicon.ico" type="image/x-icon">
            <script src="../include/jquery.js"></script>
            <meta charset="utf-8">
            <meta name="keywords" content="">
        </head>
        <header id="header">
            <?php include("header.php")  ?>
		</header>
        <body id="corps">
            <section>
              	<div class="profil_view">
                   	<?php
						include("../include/bdd.php") ; 
						$titre="Profil";
						$membre = $_GET['id'] ; 
					    $query=$bdd->prepare('SELECT nom, prenom, mail, groupe, annee, date_inscription, id_group, avatar FROM membres WHERE id = :id ');
						$query->execute(array('id' => $membre));
					    $data=$query->fetch();
						echo'
					    <fieldset class="section">
							<legend align="center">Profil de '.stripslashes(htmlspecialchars($data['prenom'])).'</legend>';
						echo'
								<img id="avatar" src="avatar/'.$data['avatar'].'"> ';
						    	
								/* -- Si l'id correspond, on accède aux modifications possibles -- */

						    	if($_GET['id']==$_SESSION['id'])
								{
									echo'
									<a href="modifier_profil.php?change=avatar">
										<img id="settings" style="width:20px;" src="../img/settings.png">
									</a>';
								}
						     	
						     	/* -- Si professeur -- */

						       	if ($data['id_group']==4)
						       	{
						       		echo'
						       		<p style="color:purple;">
						       			<strong>Professeur</strong></p></br>'; 
						       	} 

								/* -- Si administrateur -- */
						       	
						       	if ($data['id_group']==3)
						       	{
						       		echo'
						       		<p style="color:red;">
						       			<strong>Administrateur</strong></p></br>'; 
						       	}
						       	
						    	/* -- Si modérateur -- */

						       	if ($data['id_group']==2)
						       	{
						       		echo'
						       		<p style="color:green;">
						       			<strong>Modérateur</strong></p></br>'; 
						       	} 

						       	/* -- Affichage des informations -- */

						       	echo '<p><strong>'.stripslashes(htmlspecialchars($data['nom'])).'<br>';
						       	echo ''.stripslashes(htmlspecialchars($data['prenom'])).'<br>';
								
								if ($data['id_group']!=4)	
								{
								echo 'Année n°'.stripslashes(htmlspecialchars($data['annee'])).' ';
						       	echo 'Groupe '.stripslashes(htmlspecialchars($data['groupe'])).'</strong>';
						       	}
						       	if ($data['id_group']!=4)	
							    { 
							    	if ($_GET['id']==$_SESSION['id'])
									{
										echo'
										<a href="modifier_profil.php?change=group">
											<img id="settings" style="width:20px;" src="../img/settings.png">
										</a>';
									}
								}
						       		
						     	echo'
						     		<p><b>Adresse E-Mail : </b><u>
						     		<a href="mailto:'.stripslashes($data['mail']).'">
						     			'.stripslashes(htmlspecialchars($data['mail'])).'
						     		</a></u>';
						       			
						       	if($_GET['id']==$_SESSION['id'])
								{
									echo '
									<a href="modifier_profil.php?change=mail">
										<img id="settings" style="width:20px;" src="../img/settings.png">
									</a>';
								}
						    		
						    	echo'</br>
						    		<p>Ce membre est inscrit depuis le <b>' .$data['date_inscription'].'</b></p>
						    		</br></br>' ; 
						    	
						    	if($_GET['id']==$_SESSION['id'])
								{
									echo '<p><u><a href="modifier_profil.php?change=pass">Modifier mot de passe</a></u></p>
									<br><br>';
									echo '<b><a style="color:red;" href="disconnect.php">Se déconnecter</a></b>';
								}

								/* -- Partie administrateur -- */

                        		if (isset($_SESSION['id']))
                        		{
                            		if ($_SESSION['id_group']==3)
                            		{
                            			echo '<hr>
                            				<p style="color:red"><b>/!\ Partie réservée aux administrateurs /!\</b></p>'; 
										$query=$bdd->query('SELECT id_group FROM membres WHERE id = \''.$_GET['id'].'\' ');
                            			$result = $query->fetch() ; 
                            			
                            			switch ($result['id_group'])
                            			{
                            				case '1': 
                            					echo'
                            					<form method="POST" action="">
													<input name="moderateur" value="Définir Modérateur" type="submit"/>
												</form>';
                            					echo'
                            					<form method="POST" action="">
													<input name="administrateur" value="Définir Administrateur" type="submit"/>
												</form>';
												echo'
                            					<form method="POST" action="">
													<input name="professeur" value="Définir Professeur" type="submit"/>
												</form>';
                            					break;
                            				
                            				case '2' :  
                            					echo'
                            					<form method="POST" action="">
													<input name="membre" value="Définir membre" type="submit"/>
												</form>';
                            					echo'
                            					<form method="POST" action="">
                            						<input name="administrateur" value="Définir Administrateur" type="submit" />
                            					</form>' ; 
                            					echo'
                            					<form method="POST" action="">
													<input name="professeur" value="Définir Professeur" type="submit"/>
												</form>'; 
                            					break ; 
                            				default:
                            					break;
                            			}
									}
                        		}
                    			echo '<fieldset>';
						     	$query->CloseCursor();
					?>
				</div>
            </section>
        </body>
        <footer>
        	<?php include("../include/footer.php")  ?>
        </footer>
</html>

