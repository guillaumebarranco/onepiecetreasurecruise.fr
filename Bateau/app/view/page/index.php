<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    	<!-- Global site tag (gtag.js) - Google Analytics -->
    	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127847674-1"></script>
    	<script>
    		window.dataLayer = window.dataLayer || [];
    		function gtag(){dataLayer.push(arguments);}
    		gtag('js', new Date());
    		gtag('config', 'UA-127847674-1');
    	</script>
        <title>Liste des bateaux</title>
        <link href="app/view/assets/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="app/view/assets/style.css" />
        <link rel="stylesheet" href="../../shared/generic.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://i.imgur.com/qX3dfaM.png" type="image/png">
<link rel="icon" sizes="32x32" href="https://i.imgur.com/8878Ai5.png" type="image/png">
<link rel="icon" sizes="64x64" href="https://i.imgur.com/g9Z1vTh.png" type="image/png">
<link rel="icon" sizes="96x96" href="https://i.imgur.com/JrwHqpx.png" type="image/png">
<link rel="icon" sizes="196x196" href="https://i.imgur.com/RlxE1HW.png" type="image/png">
<link rel="apple-touch-icon" sizes="152x152" href="https://i.imgur.com/JLXSWVX.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://i.imgur.com/Qu453Fa.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://i.imgur.com/Axrgthf.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://i.imgur.com/lrkVWWl.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://i.imgur.com/dQsf6vt.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://i.imgur.com/fayMNRr.png">
<meta name="msapplication-TileImage" content="https://i.imgur.com/0Rbziea.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script src="app/view/assets/script.js"></script>
    </head>

    <div class="entete">
      <img src="https://i.imgur.com/adWoClY.png" class="entetefond">
      <img src="https://i.imgur.com/VhPOSwk.png" class="newsboard">
      <img src="https://i.imgur.com/iTZRvAT.png" class="entetetop">
      <a href="/"><img src="https://i.imgur.com/g0NAqri.png" class="logo"></a>
    </div>
    <style>
      .entetetop
      {
        position: relative;
        top: 0;
        max-width: 100%;
        width: 100%;
      }
      .entetefond
      {
        position: absolute;
        top: 0;
        max-width: 100%;
        width: 100%;
      }
      .logo
      {
        width: 40vw;
        top: 0;
        left: 30%;
        position: relative;
      }
      .newsboard
      {
        top: 0;
        right: 1vw;
        max-width: 25%;
        width: 25%;
        position: absolute;
      }
    </style>
    <div id="optcnavbar"></div>
	<header><a href="/"><img src="https://i.imgur.com/V3e73Tf.png" height="50" width="50" alt="logo"></img></a></header>

    <body>
    	<h1><center><u>Liste des bateaux</u></center></h1>
      <!-- <p style="text-align: right"><script async src="https://cse.google.com/cse.js?cx=fa29c101677956b6f"></script><div class="gcse-search"></div></p> -->
  <div class="col-sm-12">
  <center><h2><u>Bateaux de l'Aventure</u></h2></center>
  <div class="row">
  <?php foreach ($personnage as $psn ) { ?>
  <div class="col-sm-4">
  <div class="card">
    <center><img class="card-img-top" src="<?=$psn->getImage()?>" alt="Card image cap"></center>
    <div class="card-body">
        <h3 class="card-title"><center><?=$psn->getNom()?></center></h3><p class="card-text"><center><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#<?=$psn->getTarget()?>"><b>Voir les capacités</b></button></center><br><center><div id="<?=$psn->getTarget()?>" class="collapse"><?=$psn->getCapacite()?></div></center><br><center><a href="https://onepiecetreasurecruise.fr/Bateau/app/view/assets/img/<?=$psn->getTelechargement()?>.png" download="<?=$psn->getID()?>.png"><button class="btn"><i class="fa fa-download"></i> Télécharger</button></a></center></p>
</div></div><br></div>
   <?php
}
?></div>
  <center><h2><u>Bateaux des forêts d'entraînement</u></h2></center>
  <div class="row">
  <?php foreach ($foret as $frt ) { ?>
  <div class="col-sm-4">
  <div class="card">
    <center><img class="card-img-top" src="<?=$frt->getImage()?>" alt="Card image cap"></center>
    <div class="card-body">
        <h3 class="card-title"><center><?=$frt->getNom()?></center></h3><p class="card-text"><center><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#<?=$frt->getTarget()?>"><b>Voir les capacités</b></button></center><br><center><div id="<?=$frt->getTarget()?>" class="collapse"><?=$frt->getCapacite()?></div></center><br><center><a href="https://onepiecetreasurecruise.fr/Bateau/app/view/assets/img/<?=$frt->getTelechargement()?>.png" download="<?=$frt->getID()?>.png"><button class="btn"><i class="fa fa-download"></i> Télécharger</button></a> <?php if($frt->getLien()!="0"){?><a href="<?=$frt->getLien()?>" target="_blank"><button class="btn btn-primary">Fiche de la forêt d'entraînement</button></a></center></p><?php }else{?><button class="btn btn-gray">Fiche indisponible</button><?php }?></center></p>
</div></div><br></div>
   <?php
}
?></div>
  <center><h2><u>Bateaux des missions</u></h2></center>
  <div class="row">
  <?php foreach ($mission as $msn ) { ?>
  <div class="col-sm-4">
  <div class="card">
    <center><img class="card-img-top" src="<?=$msn->getImage()?>" alt="Card image cap"></center>
    <div class="card-body">
        <h3 class="card-title"><center><?=$msn->getNom()?></center></h3><p class="card-text"><center><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#<?=$msn->getTarget()?>"><b>Voir les capacités</b></button></center><br><center><div id="<?=$msn->getTarget()?>" class="collapse"><?=$msn->getCapacite()?></div></center><br><center><a href="https://onepiecetreasurecruise.fr/Bateau/app/view/assets/img/<?=$msn->getTelechargement()?>.png" download="<?=$msn->getID()?>.png"><button class="btn"><i class="fa fa-download"></i> Télécharger</button></a></center></p>
</div></div><br></div>
   <?php
}
?></div>
  <center><h2><u>Bateaux des événements</u></h2></center>
  <div class="row">
  <?php foreach ($evenement as $evn ) { ?>
  <div class="col-sm-4">
  <div class="card">
    <center><img class="card-img-top" src="<?=$evn->getImage()?>" alt="Card image cap"></center>
    <div class="card-body">
        <h3 class="card-title"><center><?=$evn->getNom()?></center></h3><p class="card-text"><center><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#<?=$evn->getTarget()?>"><b>Voir les capacités</b></button></center><br><center><div id="<?=$evn->getTarget()?>" class="collapse"><?=$evn->getCapacite()?></div></center><br><center><a href="https://onepiecetreasurecruise.fr/Bateau/app/view/assets/img/<?=$evn->getTelechargement()?>.png" download="<?=$evn->getID()?>.png"><button class="btn"><i class="fa fa-download"></i> Télécharger</button></a> <?php if($evn->getLien()!="0"){?><a href="<?=$evn->getLien()?>" target="_blank"><button class="btn btn-primary">Fiche du combat crucial</button></a></center></p><?php }else{?><?php }?></center></p>
</div></div><br></div>
   <?php
}
?></div>
  <center><h2><u>Bateaux du bazar de Rayleigh</u></h2></center>
  <div class="row">
  <?php foreach ($rayleigh as $rlg ) { ?>
  <div class="col-sm-4">
  <div class="card">
    <center><img class="card-img-top" src="<?=$rlg->getImage()?>" alt="Card image cap"></center>
    <div class="card-body">
        <h3 class="card-title"><center><?=$rlg->getNom()?></center></h3><p class="card-text"><center><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#<?=$rlg->getTarget()?>"><b>Voir les capacités</b></button></center><br><center><div id="<?=$rlg->getTarget()?>" class="collapse"><?=$rlg->getCapacite()?></div></center><br><center><a href="https://onepiecetreasurecruise.fr/Bateau/app/view/assets/img/<?=$rlg->getTelechargement()?>.png" download="<?=$rlg->getID()?>.png"><button class="btn"><i class="fa fa-download"></i> Télécharger</button></a></center></p>
</div></div><br></div>
   <?php
}
?></div>
  <center><h2><u>Bateaux des quêtes déblocables</u></h2></center>
  <div class="row">
  <?php foreach ($deblocable as $dbc ) { ?>
  <div class="col-sm-4">
  <div class="card">
    <center><img class="card-img-top" src="<?=$dbc->getImage()?>" alt="Card image cap"></center>
    <div class="card-body">
        <h3 class="card-title"><center><?=$dbc->getNom()?></center></h3><p class="card-text"><center><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#<?=$dbc->getTarget()?>"><b>Voir les capacités</b></button></center><br><center><div id="<?=$dbc->getTarget()?>" class="collapse"><?=$dbc->getCapacite()?></div></center><br><center><a href="https://onepiecetreasurecruise.fr/Bateau/app/view/assets/img/<?=$dbc->getTelechargement()?>.png" download="<?=$dbc->getID()?>.png"><button class="btn"><i class="fa fa-download"></i> Télécharger</button></a></center></p>
</div></div><br></div>
   <?php
}
?></div>

</div>
        <br><br><br>
        <script type="text/javascript" src="../../Accueil/js/jquery-3.3.1.min.js"></script>
        <script src="../../shared/navbar.js"></script>
        <script>
          addNavbar("beginner", 'ships', 1);
        </script>
        <script type="text/javascript" src="../../Accueil/js/popper.min.js"></script>
        <script type="text/javascript" src="../../Accueil/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../Accueil/js/mdb.js"></script>
        <div class="baspage">
          <img src="https://i.imgur.com/zGoXmaU.png" class="baspage">
        </div>
        <style>
          .baspage
          {
            position: relative;
            bottom: -1vw;
            max-width: 100%;
            width: 100%;
          }
        </style>
    </body>
</html>