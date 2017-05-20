<?php 
                    if (isset($_POST['mail_connexion'])&&isset($_POST['pass_connexion']))
                    {
                        include("../include/bdd.php"); 
                        $pass_hache = sha1($_POST['pass_connexion']);
                        $req = $bdd->prepare('SELECT id, nom, prenom, groupe,actif, id_group, annee, avatar FROM membres WHERE mail = :mail AND pass = :pass');
                        $req->execute(array('mail' => $_POST['mail_connexion'],'pass' => $pass_hache));
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
                                header('Location: ../informations.php?id_code=17'); 
                            }
                            else
                                header('Location: ../informations.php?id_code=5'); 
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
            <section id="all_form">
                <form id="form_connect" action="" method="post">
                    <fieldset>
                        <legend align="center"> Connexion </legend>
                                <div id="connect_form">
                                    <p><label>Adresse mail</label><input name="mail_connexion" type="email"  title="mail" required /></p>
                                    <p><label>Mot de passe</label><input name="pass_connexion" type="password"  title="Mot de passe" /></p><br>
                                    <u><a href="mdp_oublie.php"><p style="font-size:12px;margin-left:5%;">Mot de passe oublié ?</p></a></u>
                                    <p><input type="submit" class="button" /></p>
                                </div>
                    </fieldset>
                </form>
                 <div id="members_connexion">
                </div>

                <form id="form_suscribe" action="save_members.php" method="POST">
                        <fieldset>
                            <legend align="center">Pas encore de compte ?</legend>
                                <div id="connect_form">
                                    <p><label>Prénom</label><input name="prenom" type="text"  title="prenom" required /><br></p>
                                    <p><label>Nom</label><input name="nom" type="text"  title="nom" required /></p>
                                    <p><label>Email</label><input name="mail" type="email"  title="mail" required /></p>
                                    <p><label>Mot de passe</label><input name="pass" type="password"  title="Mot de passe" /></p>
                                    <p><label>Confirmer le mot de passe</label><input name="passconfirm" type="password"  title="Mot de passe" /></p><br>
                                    <p><label>Année d'étude</label>
                                    <select name="annee" title="annee" size="1" required>
                                            <option>1
                                            <option>2
                                          </select></p>
                                    <p><label>Groupe</label>
                                    <select name="group" title="group" size="1" required>
                                            <option>1
                                            <option>2
                                            <option>3
                                            <option>4
                                            <option>5
                                        </select></p>
                                    <p><input type="submit" class="button" /></p>
                                </div>
                        </fieldset>
                </form>
            </section>
        </body>
</html>
