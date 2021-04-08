<?php
include('./app/model/index.php');
if (isset($_POST['submit']))
{
$pseudo = $_POST['pseudo'];
$nouveaute = $_POST['nouveaute'];
$moment = $_POST['moment'];
$difficile = $_POST['difficile'];
$sugo = $_POST['sugo'];
$gratuit = $_POST['gratuit'];
$lot = $_POST['lot'];
$supevo = $_POST['supevo'];
$legende = $_POST['legende'];

Index::envoi($dsn,$pseudo,$nouveaute,$moment,$difficile,$sugo,$gratuit,$lot,$supevo,$legende);
echo "<script>alert(\"Propositions envoyées. Merci pour votre participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
else{
	include('./app/view/page/index.php');
}
