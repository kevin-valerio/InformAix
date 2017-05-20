<?php
	$id_article = $_GET['id_article'] ; 
 	include("include/bdd.php") ; 
 	if(isset($_POST['supprimer_article']))
    {
        $req = $bdd->query('DELETE  FROM articles WHERE id_article = \''.$id_article.'\' ');
    }  
 	header('Location: index.php') ; 
 ?>