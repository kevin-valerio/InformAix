<!DOCTYPE html> 
<html lang="fr"> 
        <head>
						 <script>
		 
		  
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-94130208-1', 'auto');
		  ga('send', 'pageview');

		</script>

            <style type="text/css">
            <style type="text/css"/>a:link{text-decoration:none}</style>
            <link id="Projet" rel="stylesheet" href="css/stylesheet.css"/>
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
                <div id="code_infos">
                    <?php 
                        switch ($_GET['id_code']) 
                        {
                            case '1': echo 'Un mail de confirmation vient de vous être envoyé ! <br>
                                            <a href="membres/connexion.php">Se connecter</a>'; break;
                            case '2': echo 'Votre nom ou votre prénom contient des caractères invalides.<br>
                                            <a href="membres/connexion.php">Réessayez</a>'; break;
                            case '3': echo '<p>Les deux mots de passes ne correspondent pas !</p><br>
                                            <a href="membres/connexion.php">Réessayez</a>'; break;
                            case '4':  echo 'Mauvais identifiant ou mot de passe !<br>
                                            <a href="membres/connexion.php">Réessayer</a>'; break;
                            case '5': echo 'Votre compte n\'est pas activé !<br>
                                            <a href="membres/connexion.php">Se connecter</a>'; break;
                            case '6': echo 'Votre compte a bien été activé !<br>
                                            <a href="membres/connexion.php">Se connecter</a>'; break;
                            case '7': echo 'Erreur ! Votre compte ne peut être activé...<br>
                                            <a href="membres/connexion.php">Réessayez</a>'; break;
                            case '8':  echo 'Votre compte est déja activé !<br>
                                            <a href="membres/connexion.php">Se connecter</a>'; break;
                            case '9':  echo 'Cette adresse mail est déja utilisée !<br>
                                            <a href="membres/connexion.php">Réessayez</a>'; break;
                            case '10':  echo 'Page enregistrée avec succès !<br>
                                            <a href="index.php">Retour au menu</a>'; break;
                            case '11':  echo 'Veuillez vous connecter !<br>
                                            <a href="membres/connexion.php">Se connecter</a>'; break;
                             case '12':  echo 'Le mot de passe actuel ne correspond pas !<br>
                                            <a href="membres/afficher_profil.php?id='.$_SESSION['id'].'">Retour au profil</a>'; break;
                            case '13':  echo 'Les deux nouveaux mot de passes ne correspondent pas !<br>
                                            <a href="membres/afficher_profil.php?id='.$_SESSION['id'].'">Retour au profil</a>'; break;
                            case '14':  echo 'La taille de votre fichier ne doit pas dépasser 2Mo !<br>
                                            <a href="membres/afficher_profil.php?id='.$_SESSION['id'].'">Retour au profil</a>'; break;
                            case '15':  echo 'Fichier invalide. Extensions acceptées (.png, .jpg, .jpeg, .gif)<br>
                                            <a href="membres/afficher_profil.php?id='.$_SESSION['id'].'">Retour au profil</a>'; break;
                            case '16':  echo 'Une erreur innatendu s\'est déroulée durant l\'importation de votre fichier.<br>
                                            <a href="membres/afficher_profil.php?id='.$_SESSION['id'].'">Retour au profil</a>'; break;
                            case '17':  echo 'Vous êtes connecté !<br>
                                            <a href="index.php">Retour au menu</a>'; header("refresh:3;url=index.php"); break;
                            case '18':  echo 'Adresse mail introuvable !<br>
                                            <a href="index.php">Retour au menu</a>'; break;
                            case '19':  echo 'Votre mot de passe doit contenir au moins 8 caractères !<br>
                                            <a href="membres/connexion.php">Réessayez</a>'; break;
                            case '20':  echo 'Seul les adresses de type "@etu.univ-amu.fr" sont autorisées !<br>
                                            <a href="membres/connexion.php">Réessayez</a>'; break;
                            default:
                                    break;
                        }($_GET) 
                    ?>
                </div>
            </section>
        </body>
</html>
