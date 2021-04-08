<?php
include('./app/model/profil.php');
if (isset($_POST['submit']))
{
$pseudo = $_POST['pseudo'];
$avatar = $_POST['avatar'];
$lvl = $_POST['lvl'];
$jour = $_POST['jour'];
$identifiant = $_POST['identifiant'];
$effectif = $_POST['effectif'];
$effectif6 = $_POST['effectif6'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];

Profil::inscription($dsn,$pseudo,$avatar,$lvl,$jour,$identifiant,$effectif,$effectif6,$login,$mdp);
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=connexion">';
}
else{
	include('./app/view/page/inscription.php');
}
