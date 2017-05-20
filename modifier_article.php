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
             <script type="text/javascript" src="../ckeditor/ckeditor.js"></script> 
        </head>
<?php
$id_article = $_GET['id_article'] ; 
include("include/bdd.php") ; 
 	if (isset($_POST['modifier']))
	{

		$result = $bdd->query('UPDATE articles SET titre = \''.$_POST['titre'].'\' WHERE id_article = \''.$id_article.'\'');
		$result = $bdd->query('UPDATE articles SET image = \''.$_POST['image'].'\' WHERE id_article = \''.$id_article.'\'');
		$result = $bdd->query('UPDATE articles SET description = \''.addslashes($_POST['description']).'\' WHERE id_article = \''.$id_article.'\'');
		$result = $bdd->query('UPDATE articles SET contenu = \''.addslashes($_POST['contenu']).'\' WHERE id_article = \''.$id_article.'\'');







		header('Location: informations.php?id_code=10'); 

	}
 if(isset($_POST['modifier_article']))
    {
        $req = $bdd->query('SELECT * FROM articles WHERE id_article = \''.$id_article.'\' ');
        $result = $req -> fetch() ; 
        $contenu = $result['contenu'] ;
        $description = $result['description'] ;

        echo '<fieldset style="text-align:center;"><legend align="center">Modifier article</legend>
        		<form method="post" action="">
        	  	
        	  	<p>Titre : <br><input name="titre" size="65" value="'.$result['titre'].'" type="text"/></p><br>
        	  	<p>Lien image : <br><input name="image" size="65" value="'.$result['image'].'" type="text"/><br><br>
        	  	<p>Description de la page : <br> <textarea name="description" rows="20" cols="80" >'; echo''.$description.''; echo '</textarea>
        	  	<p>Contenu de la page : <p style="color:red;">(Mettre la balise < br > pour sauter une ligne !)</p><br/>
                                <textarea name="contenu" rows="20" cols="80" >'; echo''.$contenu.''; echo '</textarea><br><br>
                <input style="width:40%;height:50px ; " name="modifier" value="Modifier" type="submit"/>

      		  </form></fieldset>
			';


    }  


 ?>

