<?php 
    include("../include/bdd.php") ; 
    $cle = $_GET['log'] ;
    if(isset($_POST['valider']))
    {
        if (!empty($_POST['new_pass']) &&isset($_POST['new_pass']))
        {
            if ($_POST['new_pass']==$_POST['passconfirm'])  
            {
                $pass_hache2 = sha1($_POST['new_pass']);
                $req = $bdd->query('UPDATE membres SET pass = \''.$pass_hache2.'\' WHERE cle = \''.$_GET['log'].'\'');
                header('Location: connexion.php') ;

            } 
            else
            {
               echo "Les deux mots de passe ne correspondent pas !"; 
            }
                                                   
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
            <form method="POST" action="">
                                            
    
                <p><label>Nouveau mot de passe</label><input name="new_pass" type="password"/></p><br>
                <p><label>Confirmer le mot de passe</label><input name="passconfirm" type="password" "/></p><br><br>
                <p><input name="valider" style="margin-left:50px;" type="submit" value="Envoyer"></p>
                                            
                                                 </form>
            </section>
        </body>
</html>
