<?php

if(isset($_SESSION['login'])){
include('./app/model/profil.php');
include('./app/model/video.php');

$videos = Video::getAllVideo($dsn,$_SESSION['login']);

include('./app/view/page/video.php');
}

?>