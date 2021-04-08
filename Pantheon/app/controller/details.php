<?php

include('./app/model/profil.php');
include('./app/model/equipe.php');
include('./app/model/video.php');

$details = Profil::getAllDetails($dsn,$_GET['id']);
$equipes = Equipe::getEquipeByID($dsn,$_GET['id']);
$videos = Video::getVideoByID($dsn,$_GET['id']);

include('./app/view/page/details.php');

?>