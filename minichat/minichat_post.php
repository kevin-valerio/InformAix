<?php
	session_start(); 

	include("../include/bdd.php"); 
	
		if (isset($_SESSION['id'])&&(isset($_POST['message'])))
		{
			$cpt_space = 0;
			for($i=0 ; $i < strlen($_POST['message']) ; $i++)
			{
				if ($_POST['message'][$i] == " ") $cpt_space++;
			}	
			if (strlen($_POST['message']) == $cpt_space || strlen($_POST['message']) > 500 ) ;
			else if (!empty($_POST['message']))
			{
			$req = $bdd->prepare('INSERT INTO minichat (nom, prenom, message, heure_msg) VALUES(?,?,?,?)');
			$req->execute(array($_SESSION['nom'], $_SESSION['prenom'], $_POST['message'], date("Y-m-d H:i:s")));
			$nbligne = $bdd->query('SELECT COUNT(*) FROM minichat'); 
			$resultat = $nbligne->fetch();
				if ($resultat['COUNT(*)']>20) 
				{
					$bdd->query('DELETE FROM minichat ORDER BY id_msg asc LIMIT 1');
				}
			header('Location: chat.php');
		}
					header('Location: chat.php');

	}

		
	
?>