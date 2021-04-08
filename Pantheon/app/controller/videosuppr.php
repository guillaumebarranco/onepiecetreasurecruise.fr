<?php

include('./app/model/video.php');
if(isset($_SESSION['login'])){
$delete = Video::deleteVideo($dsn,$_GET['id']);

echo '<meta http-equiv="refresh" content="0;URL=index.php?page=video">';
}else{
	echo "Veuillez vous "?><a href="index.php?page=connexion">connecter</a><?php

}
?>