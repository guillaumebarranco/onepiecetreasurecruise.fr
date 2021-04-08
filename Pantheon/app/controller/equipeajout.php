<?php

include('./app/model/equipe.php');
if(isset($_SESSION['login'])){
if (isset($_POST['submit']))
{
	$image = $_POST['image'];
	$description = $_POST['description'];
	$profilID = $_SESSION['id'];
	Equipe::addEquipe($dsn,$image,$description,$profilID);
	echo '<meta http-equiv="refresh" content="0;URL=index.php?page=equipe">';
}
else{
	include('./app/view/page/equipeajout.php');
}
}else{
	echo "Veuillez vous "?><a href="index.php?page=connexion">connecter</a><?php

}

?>