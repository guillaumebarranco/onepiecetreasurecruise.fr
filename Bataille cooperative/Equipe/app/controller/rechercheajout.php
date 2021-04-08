<?php

include('./app/model/recherche.php');
if (isset($_POST['submit']))
{
	$nom = $_POST['nom'];
	$gameid = $_POST['gameid'];
	$commentaire = $_POST['commentaire'];
	$contact = $_POST['contact'];
	Recherche::addRecherche($dsn,$nom,$gameid,$commentaire,$contact);
	echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
else{
	include('./app/view/page/rechercheajout.php');
}

?>