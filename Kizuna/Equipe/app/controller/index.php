<?php

include ('./app/model/recherche.php');
include ('./app/model/team.php');
$recherche = Recherche::getAllRecherche($dsn);
$team = Team::getAllTeam($dsn);
include ('./app/view/page/index.php');

?>