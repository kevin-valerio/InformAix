				 <script>
		 
		  
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-94130208-1', 'auto');
		  ga('send', 'pageview');

		</script>

<?php include("include/bdd.php") ;

    /* -- Ajout de points -- */

 if (isset($_POST['G1_add']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points+\''.$_POST['G1_val'].'\' WHERE groupe = 1');
 }
if (isset($_POST['G1_del']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points-\''.$_POST['G1_val'].'\' WHERE groupe = 1');
 }
if (isset($_POST['G2_add']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points+\''.$_POST['G2_val'].'\' WHERE groupe = 2');
 }
if (isset($_POST['G2_del']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points-\''.$_POST['G2_val'].'\' WHERE groupe = 2');
 }
if (isset($_POST['G3_add']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points+\''.$_POST['G3_val'].'\' WHERE groupe = 3');
 }
if (isset($_POST['G3_del']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points-\''.$_POST['G3_val'].'\' WHERE groupe = 3');
 }
if (isset($_POST['G4_add']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points+\''.$_POST['G4_val'].'\' WHERE groupe = 4');
 }
if (isset($_POST['G4_del']))
 {
    $req = $bdd->query('UPDATE battles SET nb_points=nb_points-\''.$_POST['G4_val'].'\' WHERE groupe = 4');
 }

    /* -- Historique de points -- */

if (isset($_POST['valider_points']))
 {
    if (isset($_POST['group'])&&isset($_POST['points_gagnes'])&&isset($_POST['motif']))
    {
        $result = $bdd->prepare('INSERT INTO historique_points(groupe, points_gagnes, motif) VALUES(?,?,?)');
        $result->execute(array($_POST['group'],$_POST['points_gagnes'],$_POST['motif']));
    }
 }


?>
<!DOCTYPE html> 
<html lang="fr"> 
        <head>
            <style type="text/css">
            <style type="text/css"/>a:link{text-decoration:none}</style>
            <link id="Projet" rel="stylesheet" href="css/stylesheet.css"/>
            <meta name ="robots" content ="index , follow" />
            <title>Inform'Aix</title>
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
                <div class="accueil-pics">
                    
                </div>
                <section>
                <div class="news">
                        <p>Les "Battles de groupes" ! Cette année, le BDE innove et permet aux premières années de s'affronter dans une bataille qui se déroulera toute l'année ! Différents évènements qui seront communiqués à l'avance permettront aux groupes de gagner des points, jusqu'à décrocher la récompense final ! A vos marques, prêts, partez ! </p>
                    </div>
                    <div class="battle_group">
                    <fieldset>
                        <legend align="center">G1</legend>
                        <?php
                            $reponse = $bdd->query("SELECT nb_points FROM battles WHERE groupe = 1");

                        if ($donnees = $reponse->fetch()) 
                            echo '<div class="battles_pts">';
                            echo $donnees['nb_points'];
                            echo '</div>';
                        ?>
                    </fieldset>
                    <?php
                        if (isset($_SESSION['id']))
                        {
                            if ($_SESSION['id_group']==3)
                            {
                    ?>
                    <form method="POST" action="">
                        <input name = G1_val type="number" />
                        <input name="G1_add" value="+" type="submit"/>
                        <input name="G1_del" value="-" type="submit"/>
                    </form>
                    <?php
                            } 
                        }
                    ?>
                    </div>
                    <div class="battle_group">
                    <fieldset>
                        <legend align="center">G2</legend>
                        <?php
                            $reponse = $bdd->query("SELECT nb_points FROM battles WHERE groupe = 2");

                        if ($donnees = $reponse->fetch()) 
                             echo '<div class="battles_pts">';
                            echo $donnees['nb_points'];
                            echo '</div>';
                        ?>
                    </fieldset>
                     <?php
                        if (isset($_SESSION['id']))
                        {
                            if ($_SESSION['id_group']==3 ||$_SESSION['id_group']==4)
                            {
                    ?>
                    <form method="POST" action="">
                        <input name = G2_val type="number" />
                        <input name="G2_add" value="+" type="submit"/>
                        <input name="G2_del" value="-" type="submit"/>
                    </form>
                    <?php
                            } 
                        }
                    ?>
                    </div>
                    <div class="battle_group">
                    <fieldset>
                        <legend align="center">G3</legend>
                        <?php
                            $reponse = $bdd->query("SELECT nb_points FROM battles WHERE groupe = 3");

                        if ($donnees = $reponse->fetch()) 
                             echo '<div class="battles_pts">';
                            echo $donnees['nb_points'];
                            echo '</div>';
                        ?>
                    </fieldset>
                     <?php
                        if (isset($_SESSION['id']))
                        {
                            if ($_SESSION['id_group']==3)
                            {
                    ?>
                    <form method="POST" action="">
                        <input name = G3_val type="number" />
                        <input name="G3_add" value="+" type="submit"/>
                        <input name="G3_del" value="-" type="submit"/>
                    </form>
                    <?php
                            } 
                        }
                    ?>
                    </div>
                    <div class="battle_group">
                    <fieldset>
                        <legend align="center">G4</legend>
                        <?php
                            $reponse = $bdd->query("SELECT nb_points FROM battles WHERE groupe = 4");

                        if ($donnees = $reponse->fetch()) 
                             echo '<div class="battles_pts">';
                            echo $donnees['nb_points'];
                            echo '</div>';
                        ?>
                    </fieldset>
                     <?php
                        if (isset($_SESSION['id']))
                        {
                            if ($_SESSION['id_group']==3)
                            {
                    ?>
                    <form method="POST" action="">
                        <input name = G4_val type="number" />
                        <input name="G4_add" value="+" type="submit"/>
                        <input name="G4_del" value="-" type="submit"/>
                    </form>
                    <?php
                            } 
                        }
                    ?>
                    </div>
                    
                    <fieldset>
                        <legend align="center">Historique des points</legend>
                        <?php
                            $reponse = $bdd->query("SELECT * FROM historique_points ORDER BY id_historique desc");
                                while($donnees = $reponse->fetch())
                                {
                                    echo'
                                    <p style="text-align:center;">
                                        Le Groupe <b style="color:black;">'.$donnees['groupe'].' 
                                        </b> remporte
                                        <b>'.$donnees['points_gagnes'].'</b> point(s) ! Motif : <b>'.$donnees['motif'].'</b>
                                    </p><hr>';
                                }
                            if (isset($_SESSION['id']))
                            {
                                if ($_SESSION['id_group']==3)
                                {
                                    echo '
                                    <form method="POST" action="">
                                        <p>Le groupe <input name ="group" type="number"/>
                                        remporte <input name="points_gagnes" type="number"/> point(s)
                                        : <input size="80" name="motif" type="text"/>
                                        <input name="valider_points" value="Valider" type="submit"/></p>
                                    </form>'    ;
                                }
                            }
                        ?>
                    </fieldset>
                        
                </section>

        </body>


</html>
