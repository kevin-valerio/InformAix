<?php 
session_start();

if (isset($_SESSION['id'])) 
{
include("../include/bdd.php"); 
$reponse = $bdd->query('SELECT nom, prenom, message, heure_msg FROM minichat ORDER BY id_msg DESC LIMIT 0, 20');
		    while ($donnees = $reponse->fetch())
		    {
		    	$personne = $bdd->query('SELECT id, id_group, avatar FROM membres WHERE \''.$donnees['nom'].'\'= nom AND \''.$donnees['prenom'].'\'=prenom '); 
		        $data = $personne->fetch(); 
		        echo 
		        	'<div id="msg">
		        		<div id="time">
		        			<span><a href="../membres/afficher_profil.php?id='.$data['id'].'">@' ; 
			            	if ($data['id_group']==4)
			                {
			                   	echo '<b style="color:purple;">';
			                }
			                else if ($data['id_group']==3)
			                {
			                   	echo '<b style="color:red;">';
			                }
			                else if ($data['id_group']==2)
			                {
			                   	echo '<b style="color:green;">';
			                }
			                else 
			                {
			                   	echo '<b>' ; 
			                }
			                echo ''. htmlspecialchars($donnees['prenom']) .' 
			                     ' . htmlspecialchars($donnees['nom']) .' </b></a></span>'. htmlspecialchars($donnees['heure_msg']).'
		        		</div>


			                
		                <div id="member_posting">
			                <p><img id="avatar" src="../membres/avatar/'.$data['avatar'].'" /> : ' . htmlspecialchars($donnees['message']) .'</p>
						</div>
		                     
		        
		          	</div>';
			}
		$reponse->closeCursor(); 
		}
		else
			echo "VEUILLEZ VOUS CONNECTER POUR ACCEDER AU CHAT !"?>