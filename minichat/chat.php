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
        <script type="text/<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript">
    setInterval(function(){ 
    $('#chat_msg').load('chat_msg.php');
    },800);
    </script>
        <header id="header">
            <?php include("header.php")  ?>
        </header>
        <body id="corps">
            <section>
                <fieldset id="fieldset_chat">
                    <legend align="center">Mini-Chat</legend>
                        <div id="chat">                                     
                            <?php

                                if (!isset($_SESSION['id']))
                                    echo '<p><i style="color:red;">Veuillez vous connecter pour pouvoir poster dans le chat !</i></p>';
                                if (isset($_SESSION['id']))
                                {
                                    $nom = $_SESSION['nom'] ; 
                                    $prenom = $_SESSION['prenom'];
                                    echo
                                    '<form action="minichat_post.php" method="post">
                                        <p><input type="text" name="message" id="message" />
                                        <input id="button" type="submit" value="Envoyer" /></p>
                                    </form>' ; 

                                } 
                            
                            ?>
                            <div id="chat_msg">
                            
                            </div>
                       </div>
                </fieldset>
            </section>
    </body>
    <footer>
        <?php include("../include/footer.php") ?>
    </footer>
</html>
