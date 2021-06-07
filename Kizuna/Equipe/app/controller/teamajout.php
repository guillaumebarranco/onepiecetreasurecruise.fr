<?php

include('./app/model/team.php');
if (isset($_POST['submit']))
{
	$nomequipe = $_POST['nomequipe'];
	$nom = $_POST['nom'];
	$invitation = $_POST['invitation'];
	$commentaire = $_POST['commentaire'];
	$membre = $_POST['membre'];
	$contact = $_POST['contact'];
	$mdp = $_POST['mdp'];
	Team::addTeam($dsn,$nomequipe,$nom,$invitation,$commentaire,$membre,$contact,$mdp);
	echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
else{
	include('./app/view/page/teamajout.php');
}

?>