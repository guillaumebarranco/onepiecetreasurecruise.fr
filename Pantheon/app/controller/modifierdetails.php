<?php
include('./app/model/profil.php');
if(isset($_SESSION['login'])){
	$profils=Profil::getProfilByID($dsn,$_SESSION['login']);
	if (isset($_POST['modifier'])){
		$id=$_GET['id'];
		$pseudo = $_POST['pseudo'];
		$avatar = $_POST['avatar'];
		$lvl = $_POST['lvl'];
		$jour = $_POST['jour'];
		$identifiant = $_POST['identifiant'];
		$effectif = $_POST['effectif'];
		$effectif6 = $_POST['effectif6'];
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		$_SESSION['pseudo']= $_POST['pseudo'];
		$_SESSION['avatar']= $_POST['avatar'];
		$_SESSION['lvl']= $_POST['lvl'];
		$_SESSION['jour']= $_POST['jour'];
		$_SESSION['identifiant']= $_POST['identifiant'];
		$_SESSION['effectif']= $_POST['effectif'];
		$_SESSION['effectif6']= $_POST['effectif6'];
		$_SESSION['login']= $_POST['login'];
		$_SESSION['mdp']= $_POST['mdp'];
		Profil::editDetails($dsn,$pseudo,$avatar,$lvl,$jour,$identifiant,$effectif,$effectif6,$login,$mdp,$id);
		echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
		include('./app/view/page/modifierdetails.php');
	}else{
		include('./app/view/page/modifierdetails.php');
	}
}
else{
	echo "Veuillez vous "?><a href="index.php?page=connexion">connecter</a><?php

}


 ?>