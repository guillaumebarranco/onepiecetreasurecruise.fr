<?php

include('./app/model/video.php');
if(isset($_SESSION['login'])){
if (isset($_POST['submit']))
{
	$lien = $_POST['lien'];
	$description = $_POST['description'];
	$profilID = $_SESSION['id'];
	Video::addVideo($dsn,$lien,$description,$profilID);
	echo '<meta http-equiv="refresh" content="0;URL=index.php?page=video">';
}
else{
	include('./app/view/page/videoajout.php');
}
}else{
	echo "Veuillez vous "?><a href="index.php?page=connexion">connecter</a><?php

}

?>