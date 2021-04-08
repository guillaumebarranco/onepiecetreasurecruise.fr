<?php

include('./app/model/equipe.php');
if(isset($_SESSION['login'])){
$delete = Equipe::deleteEquipe($dsn,$_GET['id']);

echo '<meta http-equiv="refresh" content="0;URL=index.php?page=equipe">';
}else{
	echo "Veuillez vous "?><a href="index.php?page=connexion">connecter</a><?php

}
?>