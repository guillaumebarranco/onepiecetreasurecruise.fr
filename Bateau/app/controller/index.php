<?php

include ('./app/model/index.php');
$personnage = Index::getAllPersonnage($dsn);
$foret = Index::getAllForet($dsn);
$mission = Index::getAllMission($dsn);
$evenement = Index::getAllEvenement($dsn);
$rayleigh = Index::getAllRayleigh($dsn);
$deblocable = Index::getAllDeblocable($dsn);
include ('./app/view/page/index.php');

?>