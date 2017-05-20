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

						    $query=$bdd->prepare('SELECT nom, prenom, mail, groupe, annee, date_inscription, id_group, pass FROM membres WHERE id = :id ');
							$query->execute(array('id' => $_SESSION['id']));
						    $data=$query->fetch();
						  		
						    echo'<fieldset>
						    		<legend align="center">Modification de votre profil</legend>';
						       		
						?>

												
						</form>
						<?php
						switch($_GET['change'])
						{
							case "avatar" : 
									echo '<div id="connect_form"><form method="POST" action="" enctype="multipart/form-data">
											<p>Votre avatar ne doit pas dépasser 2Mo et sera automatiquement redimensionné (150px x 150px)</p><br>
											<label>Avatar : </label>
											<input type="file" name="avatar"><br>
											<p><input style="margin-left:50px;" type="submit" value="Mettre a jour profil"></p>
											
				                                 </form>' ;
				                            echo '<p><a href="afficher_profil.php?id='.$_SESSION['id'].'"><input style="margin-left:50px;" type="submit" value="Retour"></a></p>
				                            </div>';
									if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
										{
											$tailleMax = 2097152 ; 
											$extensionsValides = array('jpg', 'jpeg', 'gif', 'png'); 
											if($_FILES['avatar']['size'] <= $tailleMax)
											{
												$extensionsUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1)) ; 
												if(in_array($extensionsUpload, $extensionsValides))
												{
													$chemin = "avatar/".$_SESSION['id'].".".$extensionsUpload ; 
													$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin) ; 
													if($resultat)
													{
														$updateAvatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
														$updateAvatar->execute(array(
															'avatar' => $_SESSION['id'].".".$extensionsUpload,
															'id' => $_SESSION['id']
															)); 
														header('Location: afficher_profil.php?id='.$_SESSION['id'].'&amp;action=afficher'); 
													}
													else
													{
														header('Location: ../informations.php?id_code=16'); 
													}
												}
												else 
												{
													header('Location: ../informations.php?id_code=15'); 
												}
											}
											else 
											{
												header('Location: ../informations.php?id_code=14');
											}
										} break ; 
							
							case "group" : echo '<div id="connect_form">
												<form method="POST" action="">
													<p><label>Année d\'étude</label>
                                    				<select name="annee" size="1" >
			                                            <option>1
			                                            <option>2
                                          			</select></p>
				                                    <p><label>Groupe</label>
				                                    <select name="group" size="1" >
				                                            <option>1
				                                            <option>2
				                                            <option>3
				                                            <option>4
				                                       </select></p><br>
												<p><input style="margin-left:50px;" type="submit" value="Mettre a jour profil"></p>
											
				                                 </form>' ;
				                            echo '<p><a href="afficher_profil.php?id='.$_SESSION['id'].'"><input style="margin-left:50px;" type="submit" value="Retour"></a></p>
				                            </div>';
				                               ;
				                               if (isset($_POST['groupe']) || isset($_POST['annee']))
				                               {
				                               	$req = $bdd->query('UPDATE membres SET groupe = \''.$_POST['group'].'\' WHERE id = \''.$_SESSION['id'].'\'');
				                               	$req = $bdd->query('UPDATE membres SET annee = \''.$_POST['annee'].'\' WHERE id = \''.$_SESSION['id'].'\' ');
				                               	header('Location: afficher_profil.php?id='.$_SESSION['id'].'') ; 

												} 
							break ; 

							case "mail" : 
										echo '<div id="connect_form"><form method="POST" action="">
	                                    		<p><label>Email</label><input name="mail" type="email"  value="'.$data['mail'].'" required /></p><br>
												<input type="submit" value="Mettre a jour profil">
				                                 </form></div>' ;
				                            if (isset($_POST['mail']))
				                               {
				                               	$req = $bdd->query('UPDATE membres SET mail = \''.$_POST['mail'].'\' WHERE id = \''.$_SESSION['id'].'\'');
				                           
				                               	header('Location: afficher_profil.php?id='.$_SESSION['id'].'') ; 

												}  
							break ; 

							case "pass" : 
									echo '<div id="connect_form">
										<form method="POST" action="">
											
											<p><label>Mot de passe actuel</label><input name="current_password" type="password" " /></p><br>
	                                    	<p><label>Nouveau mot de passe</label><input name="new_pass" type="password"/></p><br>
                                    		<p><label>Confirmer le mot de passe</label><input name="passconfirm" type="password" "/></p><br><br>
											<p><input style="margin-left:50px;" type="submit" value="Mettre a jour profil"></p>
											
				                                 </form>' ;
				                            echo '<p><a href="afficher_profil.php?id='.$_SESSION['id'].'"><input style="margin-left:50px;" type="submit" value="Retour"></a></p>
				                            </div>';
				                            if (!empty($_POST['new_pass']) &&isset($_POST['new_pass'])&&isset($_POST['current_password']))
				                            {
				                            	$pass_hache = sha1($_POST['current_password']);

				                               	if ($pass_hache==$data['pass']) 
				                               	{

				                               		if ($_POST['new_pass']==$_POST['passconfirm'])	
				                               		{
				                               			$pass_hache2 = sha1($_POST['new_pass']);

				                               			$req = $bdd->query('UPDATE membres SET pass = \''.$pass_hache2.'\' WHERE id = \''.$_SESSION['id'].'\'');
				                        				header('Location: afficher_profil.php?id='.$_SESSION['id'].'') ;
				                        			} 
				                        			else
				                        			{
				                        				header('Location: ../informations.php?id_code=13'); 

				                        			}
				                                }
				                                else
				                                {
				                                	header('Location: ../informations.php?id_code=12'); 

				                                }		                               	

											}

							break ; 

							default : break ; 
						}
						

						echo'</fieldset>' ; 
						
						?>
					</div>
                </section>
        </body>
        <footer>
        	<?php include("../include/footer.php")  ?>
        </footer>
</html>

