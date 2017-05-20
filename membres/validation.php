<?php
    include("../include/bdd.php"); 
    $login = $_GET['log'];
    $cle = $_GET['cle'];
    $req = $bdd->prepare('SELECT cle, actif FROM membres WHERE cle = :cle AND  \''.$login.'\' = CONCAT(nom,prenom)');
    $req->execute(array('cle' => $cle));
    $resultat = $req->fetch();
    if (!$resultat)
    {
        header('Location: ../informations.php?id_code=7');
    }
    else 
    {
        $clebdd = $resultat['cle'];  
        $actif = $resultat['actif']; 
        if($actif == '1') // Si le compte est déjà actif on prévient
        {
            header('Location: ../informations.php?id_code=8');
        }
        else 
        {
            if($cle == $clebdd) // On compare nos deux clés	
            {
              $bdd->query('UPDATE membres SET actif = 1 WHERE \''.$cle.'\' = cle AND  \''.$login.'\' = CONCAT(nom,prenom)');
              header('Location: ../informations.php?id_code=6');
            }
            else
            {
            header('Location: ../informations.php?id_code=7');
            }
        }
    }
?> 