<?php

if(isset($_SESSION['login'])){
include('./app/model/profil.php');
include('./app/model/equipe.php');

$equipes = Equipe::getAllEquipe($dsn,$_SESSION['login']);

include('./app/view/page/equipe.php');
}

?>