 <?php 
    include("../include/bdd.php"); 
	$pass_hache = sha1($_POST['pass']);
	$req = $bdd->prepare('SELECT id, nom, prenom, groupe,actif, id_group, annee, avatar FROM membres WHERE mail = :mail AND pass = :pass');
	$req->execute(array('mail' => $_POST['mail'],'pass' => $pass_hache));
	$resultat = $req->fetch();
	if (!$resultat)
	{
		header('Location: ../informations.php?id_code=4'); 
	}
	else
	{
		if ($resultat['actif']==1)
		{ 
			session_start();
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
			$_SESSION['groupe'] = $resultat['groupe'];
			$_SESSION['id_group'] = $resultat['id_group'];
			$_SESSION['annee'] = $resultat['annee'];
			$_SESSION['avatar'] = $resultat['avatar'];
			header('Location: ../index.php');
		}
		else
			header('Location: ../informations.php?id_code=5'); 
	}			

?>
