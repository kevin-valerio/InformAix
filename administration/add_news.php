<!DOCTYPE html> 
<html lang="fr"> 
        <head>
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
             <script type="text/javascript" src="../ckeditor/ckeditor.js"></script> 
        </head>
        <body id="corps">
            <section>
                <fieldset>
                    <legend align="center">Ajouter article</legend>
                        <div class="cadrecentrale">
                            <?php
                                include('../include/bdd.php');
                                if(isset($_POST["Valider"]))
                                {
                                    $titre = htmlspecialchars(stripcslashes(trim($_POST["titre"])));
                                    $image = stripcslashes($_POST["image"]);
                                    $description = htmlspecialchars(stripcslashes($_POST["description"]));
                                    $contenu = stripcslashes($_POST["contenu"]);
                                    if(empty($titre))
                                    {
                                        $alerte0 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de titre.</div>';
                                    }
                                    else if(empty($description))
                                    {
                                        $alerte1 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de description.</div>';
                                    }
                                    else if(empty($contenu))
                                    {
                                        $alerte2 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de contenu.</div>';
                                    }
                                    else if(empty($image))
                                    {
                                        $alerte4 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de lien image.</div>';
                                    }
                                    //Si tout est ok
                                    else
                                    { 
                                        $result = $bdd->prepare('INSERT INTO articles(titre, description, contenu, image, date_article) VALUES(?,?,?,?,CURDATE())');
                                        $result->execute(array($titre,$description,$contenu,$image));
                                        if (!$result) 
                                        {
                                            die('Requête invalide : ' . mysql_error());
                                        }
                                        else
                                        {
                                            $message_ok = '<div class="erreur"><a name="ok"></a><b>Page enregistr&eacute;e avec succ&egrave;s!</b></div>';
                                        }
                                    }
                                }   
                                if(isset($message_ok))
                                {
                                    header('Location: informations.php?id_code=10'); 
                                }
                            ?> 
                            <form action="#ok" method="post">
                                <?php 
                                    if(isset($alerte0))
                                    {
                                        echo $alerte0;
                                    }
                                ?>
                                
                                <p>Titre de la page :<br/>
                                <input name="titre" size="65" value="<?php if (!empty($_POST["titre"])) { echo stripcslashes(htmlspecialchars($_POST["titre"],ENT_QUOTES)); } ?>" type="text"/></p>
                                
                                <?php 
                                    if(isset($alerte4))
                                    {
                                        echo $alerte4;
                                    }
                                ?>
                                
                                <p>Lien image<br/>
                                <input name="image" size="65" value="<?php if (!empty($_POST["image"])) { echo stripcslashes(htmlspecialchars($_POST["image"],ENT_QUOTES)); } ?>" type="text"/><br>
                                <i>Hebergeur d'image : <a href="http://www.noelshack.com/">http://www.noelshack.com/</a></i><br><br></p>
                                
                                <?php 
                                    if(isset($alerte1))
                                    {
                                        echo $alerte1;
                                    }
                                ?>
                                
                                <p>Description de la page :<br/>
                                <textarea placeholder="tg" name="description" rows="10" cols="50" >
                                <?php
                                    if(!empty($_POST["description"])) 
                                    {
                                        echo stripcslashes(htmlspecialchars($_POST["description"],ENT_QUOTES));
                                    }
                                ?>
                                
                                </textarea></p>

                                <?php 
                                    if(isset($alerte2))
                                    {
                                    echo $alerte2;
                                    }
                                ?>

                                <p>Contenu de la page :<br/>
                                <textarea name="contenu" rows="10" cols="50" >

                                <?php
                                    if (!empty($_POST["contenu"])) 
                                    {
                                        echo stripcslashes(htmlspecialchars($_POST["contenu"],ENT_QUOTES));
                                    }
                                ?>
                                
                                </textarea>
                                <script type="text/javascript">
                                CKEDITOR.replace( 'contenu' );</script></p>
            
                                <?php 
                                    if(isset($alerte3))
                                    {
                                        echo $alerte3;
                                    }
                                ?>
                                <p><input name="Valider" value="Valider" type="submit"/>
                                <input name="Effacer" value="Effacer" type="reset"/></p>
                            </form>
                        </div>
                </fieldset>
            </section>
        </body>
        <footer>
        </footer>
</html>
