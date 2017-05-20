<?php 
    include("../include/bdd.php");
    if(isset($_POST['send_mail']))
    {

        $req = $bdd->prepare('SELECT id, pass, cle FROM membres WHERE mail = :mail');
        $req->execute(array('mail' => $_POST['mail_connexion']));
        $resultat = $req->fetch();
        if(!$resultat)
        {
            header("Location: ../informations.php?id_code=18") ;
            
        }
        else 
        {   

            $email  = $_POST['mail_connexion'];
            $destinataire = $email;
            $sujet = "Réinitialiser votre mot de passe ! " ;
            $entete = "From: informaix13@gmail.com" ;
            $message = 'Veuillez suivre le lien suivant pour changer votre mot de passe : 
                     
                    http://informaix.com/membres/changer_mdp.php?log='.urlencode($resultat['cle']).'
                     
                     
                    ---------------
                    Ceci est un mail automatique, Merci de ne pas y répondre.';
     
            mail($_POST['mail_connexion'], $sujet, $message) ; 
           header('Location: ../informations.php?id_code=1'); 

        }
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
            <?php include("header.php") ?>
        </header>
        <body id="corps">
            <section>
                <form action="" method="post">
                    <fieldset>
                        <legend align="center">Mot de passe oublié</legend>
                                    <p><label>Adresse mail</label><input name="mail_connexion" type="email"  title="mail" required /></p>
                                    
                                    <p><input name="send_mail" value="Envoyer e-mail" type="submit" class="button" /></p>
                    </fieldset>
               
            </section>
        </body>
</html>
