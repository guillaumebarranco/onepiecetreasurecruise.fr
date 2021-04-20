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
      <img src="https://i.imgur.com/yOZlv6S.png" class="entetefond">
      <img src="https://i.imgur.com/VhPOSwk.png" class="newsboard">
      <img src="https://i.imgur.com/iTZRvAT.png" class="entetetop">
      <a href="/"><img src="https://i.imgur.com/1OcsZvS.png" class="logo"></a>
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
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark primary-color-dark">
      <img src="https://i.imgur.com/QvxN4d8.png" class="topnavbar">
<style>
.topnavbar
{
top: -1.5vw;
left: 0;
max-width: 100%;
width: 100%;
position: absolute;
}
</style>
  <a class="navbar-brand" href="/"><img src="https://imgur.com/SOSubWn.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../../Legendes.html">Personnages Sugo-Rare</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Guides
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item waves-effect waves-light" href="../../Coulisses.html">Comment les guides sont-ils rédigés ?</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Raids.html">Combats cruciaux</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Colisee.html">Colisées</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Arene.html">Arènes</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Attaque ennemie.html">Attaques ennemies</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Fortnight.html">Quêtes permanentes</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Special.html">Événements spéciaux</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Carte aux tresors/Prochaine Carte aux tresors.html">Prochaine Carte aux trésors</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Bataille cooperative/Prochaine bataille cooperative.html">Prochain combat de l'amitié</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Mode Aventure.html">Histoire principale</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Forets.html">Forêts d'entraînement</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Defi de Garp.html">Défi de Garp</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Crane.html">Quêtes pour les super évolutions</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Liste de personnages
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../LegendesBatch.html">Personnages du recrutement rare</a>
          <a class="dropdown-item" href="../../Carte aux tresors.html">Personnages des Cartes aux trésors</a>
          <a class="dropdown-item" href="../../Bataille cooperative.html">Personnages des combats de l'amitié</a>
          <a class="dropdown-item" href="../../Festival des pirates.html">Personnages de la fête des pirates</a>
          <a class="dropdown-item" href="../../LRR.html">Personnages limités au recrutement rare</a>
          <a class="dropdown-item" href="../../Soutien.html">Personnages limités au recrutement rare de soutien</a>
        </div>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Aide
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Bien debuter.html">Bien débuter</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Souhaits de Chopper Man.html">Souhaits de Chopper Man</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Taux des legendes.html">Taux des personnages Sugo-Rare</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Extension du depassement de limites.html">Extension du dépassement de limites</a>
          <a class="dropdown-item active waves-effect waves-light" href="../../Bateau/">Liste des bateaux</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Soutien.html">Effets de soutien spécifiques</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Fete des pirates.html">Personnages par style sur la fête des pirates</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Ile des collectionneurs.html">Île des collectionneurs</a>
          <a class="dropdown-item waves-effect waves-light" href="../../Debutant/Tier List.html">Tier Lists</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Progressions
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../RR.html">Liste à cocher des personnages du recrutement rare (version normale)</a>
          <a class="dropdown-item" href="../../RRBatch.html">Liste à cocher des personnages du recrutement rare (version par lot)</a>
          <a class="dropdown-item" href="../../Aventure.html">Liste à cocher des personnages de l'Histoire principale</a>
          <a class="dropdown-item" href="../../Avancee.html">Avancée des personnages Sugo-Rare</a>
          <a class="dropdown-item" href="../../AvanceeRR.html">Avancée des personnages du recrutement rare</a>
<a class="dropdown-item" href="../../AvanceeLRR.html">Avancée des personnages limités au recrutement rare</a>
          <a class="dropdown-item" href="../../AvanceeRaids.html">Avancée des combats cruciaux</a>
          <a class="dropdown-item" href="../../AvanceeColisee.html">Avancée des Colisées</a>
          <a class="dropdown-item" href="../../AvanceeAttaque.html">Avancée des attaques ennemies</a>
          <a class="dropdown-item" href="../../AvanceeCarte.html">Avancée des personnages des Cartes aux trésors</a>
          <a class="dropdown-item" href="../../AvanceeCombatAmitie.html">Avancée des personnages des combats de l'amitié</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../Artwork/">Artworks</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Événements
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../Creations.html">Créations de personnages</a>
          <a class="dropdown-item" href="../../Awards/">Awards 2019</a>
          <a class="dropdown-item" href="../../Awards2020/">Awards 2020</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Sites
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://optc-db.github.io/" target="_blank">OPTC Database</a>
          <a class="dropdown-item" href="https://lukforce.bitbucket.io/" target="_blank">OPTC Voyage Log</a>
          <a class="dropdown-item" href="https://www.nakama.network/" target="_blank">Nakama Network</a>
          <a class="dropdown-item" href="http://optc-tierlist.com/" target="_blank">Tier List Maker</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Remerciements
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../Remerciements.html">Remerciements</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UCaEa5qxzArxzhHs47zaoRyQ" target="_blank">Chaîne de Timinou</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UCP7bjlRx5f1o3CDlHnPc1_g" target="_blank">Chaîne de D. coza</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UCe09wTyZiAoK_Hjuw2suKsQ" target="_blank">Chaîne de Towercorner</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UCHl23TwRnU_uE4vin8mAbBw" target="_blank">Chaîne de Kaku OPTC</a>
          <a class="dropdown-item" href="https://www.youtube.com/user/Scaragnark9" target="_blank">Chaîne de Scaragnark</a>
          <a class="dropdown-item" href="https://www.youtube.com/user/basibidi" target="_blank">Chaîne de Basibidi</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UCxv6PfhXPez_1bMzogzvxxw" target="_blank">Chaîne de SkyTrick</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UCd1kIjGDgkd2xPTSShUZniQ" target="_blank">Chaîne de B-Bro</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://discord.gg/6bJvuT8" target="_blank">Discord</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form action="https://www.google.com" id="cse-search-box">
          <div id="searchbar">
            <input type="hidden" name="cx" value="011516564617436617087:3cpi9kq7ujc">
            <input type="hidden" name="ie" value="UTF-8">
            <input type="text" name="q" size="20" value="" id="search_area" placeholder="Rechercher" style="border: 1px solid rgb(126, 157, 185); margin-bottom: 5px; background: url(&quot;https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px;">
          </div>
          <input name="siteurl" type="hidden" value="onepiecetreasurecruise.fr"><input name="ref" type="hidden" value=""><input name="ss" type="hidden" value="">
        </form>
      </li>
    </ul>
  </div>
</nav>

	<header><a href="/"><img src="../../img/logo.png" alt="logo"></img></a></header>

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