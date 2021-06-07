<?php
include('./app/model/team.php');
if(isset($_SESSION['nomequipe'])){
	$teams=Team::getTeamByID($dsn,$_SESSION['nomequipe']);
	if (isset($_POST['modifier'])){
		$id=$_GET['id'];
		$nomequipe = $_POST['nomequipe'];
		$nom = $_POST['nom'];
		$invitation = $_POST['invitation'];
		$commentaire = $_POST['commentaire'];
		$membre = $_POST['membre'];
		$contact = $_POST['contact'];
		$mdp = $_POST['mdp'];
		$_SESSION['nomequipe']= $_POST['nomequipe'];
		$_SESSION['nom']= $_POST['nom'];
		$_SESSION['invitation']= $_POST['invitation'];
		$_SESSION['commentaire']= $_POST['commentaire'];
		$_SESSION['membre']= $_POST['membre'];
		$_SESSION['contact']= $_POST['contact'];
		$_SESSION['mdp']= $_POST['mdp'];
		Team::editTeam($dsn,$nomequipe,$nom,$invitation,$commentaire,$membre,$contact,$mdp,$id);
		echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
		include('./app/view/page/gestion.php');
	}else{
		include('./app/view/page/gestion.php');
	}
}
else{
	echo "Veuillez vous "?><a href="index.php?page=connexion">connecter</a><?php

}


 ?>