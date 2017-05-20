<?php 
	include("../include/bdd.php") ;

	/* -- Vérification de la taille du mot de passe -- */

	if (strlen($_POST['pass']) >= 8)
	{ 
		
		/* -- Vérification des caractères du mot de passe -- */
		
		if(preg_match('#^[a-zA-Z0-9]*$#', $_POST['prenom'])&&preg_match('#^[a-zA-Z0-9]*$#', $_POST['nom'])) 
		{ 
			/* -- Vérification de la correspondance des mots de passe -- */
			if (strpos($_POST['mail'], "@etu.univ-amu") || strpos($_POST['mail'], "@univ-amu"))
			{
				if ($_POST['pass'] == $_POST['passconfirm'])
				{

					$mail = $_POST['mail'] ; 
					$sql = $bdd->query('SELECT mail FROM membres WHERE mail = \''.$mail.'\'');
					$res = $sql->fetch();

					if ($res)
					{
						header('Location: ../informations.php?id_code=9'); 
					}
					else 
					{
						$email = $_POST['mail'];
						$login = $_POST['nom'].$_POST['prenom'];
						$avatar = "unknown.png" ; 
						
						/* -- Création aléatoire d'une clé -- */

						$cle = md5(microtime(TRUE)*100000);

						/* -- Hachage du mot de passe -- */

						$pass_hache = sha1($_POST['pass']);

						$req = $bdd->prepare('INSERT INTO membres(prenom, nom, mail, pass, groupe, annee, cle, avatar, id_group, actif,  date_inscription) VALUES(?,?,?,?,?,?,?,?,1,0,CURDATE())');
						$req->execute(array($_POST['prenom'],$_POST['nom'], $_POST['mail'], $pass_hache, $_POST['group'], $_POST['annee'],$cle, $avatar));

                        /** Appel à l'envoi de mail de confirmation */
						fopen("https://mail.informaix.com/mail_to_valid.php?log=".urlencode($login)."&cle=".urlencode($cle)."&to=".urlencode($email), 'r');

                        /** Envoi de mon SMS <3 */
                        fopen("https://smsapi.free-mobile.fr/sendmsg?user=96187324&pass=ituQBtgiKdZZs6&msg=".$_POST['prenom']." ".$_POST['nom']." s'est enregistré sur Inform'Aix !", 'r');


						header('Location: ../informations.php?id_code=1'); 
					}
				}
				else 
				{
					header('Location: ../informations.php?id_code=3'); 
				}
			}
			else 
			{
				header('Location: ../informations.php?id_code=20'); 

			}
		} 
		else 
		{ 
			header('Location: ../informations.php?id_code=2');
		}
	}
	else
	{
		header('Location: ../informations.php?id_code=19');
	}
?>