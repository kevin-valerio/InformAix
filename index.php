<?php
include("include/bdd.php") ;
    if(isset($_POST['new_evenement']))
    {
        $result = $bdd->prepare('INSERT INTO evenement(date_evenement, nom_evenement) VALUES(?,?)');
        $result->execute(array($_POST['date_evenement'],$_POST['nom_evenement']));
    }
?>

 <script>
 
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-94130208-1', 'auto');
  ga('send', 'pageview');

</script>


<script>

if( (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) && window.location.href !=='https://informaix.com/index.php?m=1'  ) {
	window.location.href = 'index.php?m=1';
}


</script>

<!DOCTYPE html> 
<html lang="fr"> 
        <head>
            <style type="text/css">
            <style type="text/css"/>a:link{text-decoration:none}</style>
            <link id="Projet" rel="stylesheet" href="css/stylesheet.css"/>
            <meta name ="robots" content ="index , follow" />
            <title>Inform'Aix</title>
            <meta name="description" content="Inform'Aix" />
            <link rel="icon" href="img/favicon.ico" type="image/x-icon">
            <script src="../include/jquery.js"></script>
            <meta charset="UTF-8">
            <meta name="keywords" content="">
        </head>
        <header id="header">
            <?php include("header.php")  ?>
            
        </header>
        <body id="corps">
            <?php
                if (isset($_SESSION['id']))
                {
                    if ($_SESSION['id_group']==2 || $_SESSION['id_group']==3)
                    {
                        echo' <a id="add" href="add_news.php">+</a>' ; 
                    } 
                }
            ?>
			
 			
	 
				<?php
					if(isset($_GET['m']) && $_GET['m'] == '1'){
						
					echo("<center style=\"margin-left: 0%; margin-right: -50%; \">");
					}
				?>
			 
			</script>
            <section>
                <div class="news">
                    <p>Bienvenue sur le site d'Inform'Aix, le Bureau des Etudiants du département informatique de l'IUT Aix-Marseille ! Ici, vous pourrez trouver toutes les informations nécéssaires à notre association, les évènements à venir, ou encore les différents projets des étudiants ! Cette année, vous pourrez également participer à la "Battle des groupes" ! Quel groupe sera sacré "Groupe de l'année" ? A vous de nous le dire ! </p>
                </div>
                <div class="coming_soon">
                    <fieldset>
                        <legend align="center">À venir !</legend>
                        <?php 
                            include("include/bdd.php") ; 
                                if (isset($_SESSION['id']))
                                {
                                    if ($_GET['heyho']=="heyhey")
                                    {
                                        echo'
                                        <div>
                                            <form  method="post" action="">
                                                <input type="date" name="date_evenement">
                                                <input name="nom_evenement" type="text">
                                                <input name="new_evenement" value="Envoyer" type="submit"/>
                                            </form>
                                        </div>';
                                    }
                                }
                                
                                $reponse = $bdd->query("SELECT * FROM evenement ORDER BY date_evenement desc");
                                while($donnees = $reponse->fetch())
                                {
                                    echo'
                                    <p style="text-align:left;">
                                        <b style="color:black;">'.date("d/m/Y", strtotime($donnees['date_evenement'])).' : 
                                        </b>
                                        <b>'.$donnees['nom_evenement'].'
                                        </b>
                                    </p>';
                                }
                        ?>
                    </fieldset>
                    <fieldset>
                        <legend style="font-size:20px;" vertical-align="center" align="center">Réseaux Sociaux</legend>
                            <p><strong>Inform'Aix</strong> est aussi sur les réseaux sociaux ! Rejoins nous !</p>
                            <a href="https://www.facebook.com/Inform'Aix/?fref=ts">
                                <img id="social" src="img/fb.png" />
                            </a>
                            <a href="https://twitter.com/Inform'Aix">
                                <img style="top:50px;" id="social" src="img/twt.png" />
                            </a>
                            <a href="https://www.youtube.com/channel/UCXEDbzxXz3QP8Ixwb4UAkng">
                                <img style="top:50px;" id="social" src="img/yt.png" />
                            </a>
                    </fieldset>
                     <fieldset >
                        <legend align="center">Bon plan</legend>
                            <p>Le paiement en toute simplicité débarque chez Inform'Aix !<br>
                            <img style="width:90%;text-align:center;" src="img/fivory_logo_horizontal.png"><br>
                            <a href="https://itunes.apple.com/fr/app/id824967438"><img src="img/apple_store.png"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.fivory.prod"><img src="img/google_play.png"></a>
                            <p>Téléchargez l'application <b style="color:#FFA556;">Fivory</b> et profitez de nombreuses réductions sur vos produits.<br>
                            5€ offerts avec le <u>code promo</u> : <b style="color:#FFA556;">1D559</b></p>
                            <p>Pour chaque achat de <b style="color:#FFA556;">2,50€</b>, <b style="color:#FFA556;">1€</b> vous est offert !</p>
                    </fieldset>
                    <fieldset >
                        <legend align="center">Sweats</legend>
                            <p>Venez récupérer votre sweat IUT info à l'ASSO !<br>
                            Prix : <b>20€</b><br>
                            XL - L - M - S</p>
                            <img style="width:90%;text-align:center;" src="img/sweat.png">
                    </fieldset>
                    <fieldset >
                        <legend align="center">Buvette</legend>
                            <p>Une petite soif ? Un petit creux ? L'ASSO propose à boire et à manger durant les pauses !<br> 
                            Allez, un Kinder Bueno ça se refuse pas... <br><br>
                            <img style="width:90%;text-align:center;" src="img/buvette.jpg">
                    </fieldset>
                </div>

                    <!-- ----Affichage des articles----- -->

                    <?php include("include/bdd.php") ; 
                        $reponse = $bdd->query("SELECT * FROM articles ORDER BY date_article desc");
                        while($donnees = $reponse->fetch())
                        {
                    ?>
                            <div class="news_edit">
                            <fieldset>
                                <legend align="center"><?php echo $donnees['titre']; ?></legend>
                                <i><?php echo 'Par <b style="color:red;">'.$donnees['auteur'].'</b><br>le '.$donnees['date_article'].'' ?></i>
                                <p><?php echo '<b style="margin-top:40px;">'.$donnees['description'].'</b>' ; ?></p>
                                <?php echo '<img class="img_news" src="img/articles/'.$donnees['image'].'">' ?>
                                <p style="margin-top:10px;padding-bottom:10px;"><?php echo $donnees['contenu']; ?></p>
                                <?php 
                                    if (isset($_SESSION['id']))
                                    {
                                        /* -- Accès modification/suppression articles -- */ 

                                        if ($_SESSION['id_group']==3 || $_SESSION['id_group']==2)
                                        {
                                            echo '
                                                <div id="update_articles">
                                                    <form method="post" action="modifier_article.php?id_article='.$donnees['id_article'].'">
                                                        <input src="img/edit.png" style="float:right;" name="modifier_article" value="submit" type="image"/>
                                                    </form>';
                                            echo '
                                                    <form method="post" action="supprimer_article.php?id_article='.$donnees['id_article'].'">
                                                        <input src="img/delete.png" style="float:right;" name="supprimer_article" value="submit" type="image"/>
                                                    </form>
                                                </div>';

                                        }
                                    }
                                ?>
                            </fieldset>
                        </div>
                        <?php
                        }
                            $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </section>
					<?php
					if(isset($_GET['m']) && $_GET['m'] == '1'){
						
						echo("</center>");
					}
				?>
		 
        </body>
        <footer>
            <?php include("include/footer.php") ?>
        </footer>
</html>
