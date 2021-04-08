<?php

include ('./app/model/profil.php');
$profil = Profil::getAllProfil($dsn);
include ('./app/view/page/index.php');

?>