<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Livre d'or pour Anlord</title>

    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../shared/generic.css" />
    <link rel="stylesheet" href="../shared/backgrounds.css" />
    <link rel="stylesheet" href="../shared/fiches.css" />

    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127847674-1"></script>
    <script src="../shared/analytics.js"></script>
    <style>
      .container {
        text-align: center;
      }

      form label {
        display: block;
      }

      .pages a {
        padding: 3px 3px 5px 6px;
      }

      .active-page {
        border: solid 1px black;
      }

      .message_author {
        border: solid 1px black;
        padding: 7px;
      }
    </style>
  </head>

  <body id="PSY">
    <div class="entete">
      <img src="https://i.imgur.com/adWoClY.png" class="entetefond">
      <!-- <img src="https://i.imgur.com/VhPOSwk.png" class="newsboard"> -->
      <img src="https://i.imgur.com/iTZRvAT.png" class="entetetop">
      <a href="/"><img src="https://i.imgur.com/g0NAqri.png" class="logo" style="opacity: 0;"></a>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark primary-color-dark">
      <img src="https://i.imgur.com/QvxN4d8.png" class="topnavbar">
      <a class="navbar-brand" href="/"><img src="https://imgur.com/SOSubWn.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../Legende.html">Personnages Sugo-Rare</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Guides
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item waves-effect waves-light" href="../Coulisses.html">Comment les guides sont-ils rédigés ?</a>
              <a class="dropdown-item waves-effect waves-light" href="../Raid.html">Combats cruciaux</a>
              <a class="dropdown-item waves-effect waves-light" href="../Colisee.html">Colisées</a>
              <a class="dropdown-item waves-effect waves-light" href="../Arene.html">Arènes</a>
              <a class="dropdown-item waves-effect waves-light" href="../Invasion.html">Attaques ennemies</a>
              <a class="dropdown-item waves-effect waves-light" href="../Fortnight.html">Quêtes permanentes</a>
              <a class="dropdown-item waves-effect waves-light" href="../Special.html">Évènements spéciaux</a>
              <a class="dropdown-item waves-effect waves-light" href="../Carte_aux_tresors/Prochaine_carte_aux_tresors.html">Prochaine Carte aux trésors</a>
              <a class="dropdown-item waves-effect waves-light" href="../Kizuna/Prochain_Kizuna.html">Prochain combat de l'amitié</a>
              <a class="dropdown-item waves-effect waves-light" href="../Histoire.html">Histoire principale</a>
              <a class="dropdown-item waves-effect waves-light" href="../Foret.html">Forêts d'entraînement</a>
              <a class="dropdown-item waves-effect waves-light" href="../Defi_de_Garp.html">Défi de Garp</a>
              <a class="dropdown-item waves-effect waves-light" href="../Crane.html">Quêtes pour les super évolutions</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Liste de personnages
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../LegendeBatch.html">Personnages du recrutement rare</a>
              <a class="dropdown-item" href="../Carte_aux_tresors.html">Personnages des Cartes aux trésors</a>
              <a class="dropdown-item" href="../Kizuna.html">Personnages des combats de l'amitié</a>
              <a class="dropdown-item" href="../Fete_des_pirates.html">Personnages de la fête des pirates</a>
              <a class="dropdown-item" href="../LRR.html">Personnages limités au recrutement rare</a>
              <a class="dropdown-item" href="../Soutien.html">Personnages limités au recrutement rare de soutien</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Aide
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Bien debuter.html">Bien débuter</a>
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Souhaits de Chopper Man.html">Souhaits de Chopper Man</a>
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Taux.html">Taux des personnages Sugo-Rare</a>
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Extension du depassement de limites.html">Extension du dépassement de limites</a>
              <a class="dropdown-item waves-effect waves-light" href="../Bateau/">Liste des bateaux</a>
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Soutien.html">Effets de soutien spécifiques</a>
              <a class="dropdown-item waves-effect waves-light" href="../Fete_des_pirates0.html">Personnages par style sur la fête des pirates</a>
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Ile des collectionneurs.html">Île des collectionneurs</a>
              <a class="dropdown-item waves-effect waves-light" href="../Debutant/Tier List.html">Tier Lists</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Progressions
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../RR.html">Liste à cocher des personnages du recrutement rare (version normale)</a>
              <a class="dropdown-item" href="../RRBatch.html">Liste à cocher des personnages du recrutement rare (version par lot)</a>
              <a class="dropdown-item" href="../Aventure.html">Liste à cocher des personnages de l'Histoire principale</a>
              <a class="dropdown-item" href="../Avancee.html">Avancée des personnages Sugo-Rare</a>
              <a class="dropdown-item" href="../AvanceeRR.html">Avancée des personnages du recrutement rare</a>
              <a class="dropdown-item" href="../AvanceeLRR.html">Avancée des personnages limités au recrutement rare</a>
              <a class="dropdown-item" href="../AvanceeRaid.html">Avancée des combats cruciaux</a>
              <a class="dropdown-item" href="../AvanceeColisee.html">Avancée des Colisées</a>
              <a class="dropdown-item" href="../AvanceeAttaque.html">Avancée des attaques ennemies</a>
              <a class="dropdown-item" href="../AvanceeCarte.html">Avancée des personnages des Cartes aux trésors</a>
              <a class="dropdown-item" href="../AvanceeFetePirates.html">Avancée des personnages de la Fête des Pirates</a>
              <a class="dropdown-item" href="../AvanceeCombatAmitie.html">Avancée des personnages des combats de l'amitié</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Artwork/">Artworks</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Évènements
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../Creations.html">Créations de personnages</a>
              <a class="dropdown-item" href="../Awards/">Awards 2019</a>
              <a class="dropdown-item" href="../Awards2020/">Awards 2020</a>
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
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Remerciements
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item active" href="../Remerciements.html">Remerciements</a>
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

    <div class="container">
      <h1>Livre d'or en hommage pour Anlord</h1>

      <!-- <div>
        <form action="insert.php" method="post">
          <div>
            <label>Pseudo</label>
            <input type="text" name="author">
          </div>

          <br>

          <div>
            <label>Message</label>
            <textarea name="content" cols="30" rows="10"></textarea>
          </div>

          <input type="submit" value="Envoyer">
        </form>
      </div> -->

      <br><br>

      <h3>Derniers messages</h3>

      <div>
        <?php foreach($displayed_messages as $key => $message) { ?>
          <div class="message_author">
            <div><strong>Auteur : <?php echo $message["author"]; ?></strong></div>
            <br>
            <div><?php echo $message["content"]; ?></div>
          </div>
        <?php } ?>
      </div>

      <br><br>
      <div class="pages">
        <?php for ($i=0; $i < $count_pages; $i++) { ?>
          <a class="<?php if($i === $page) echo 'active-page'; ?>" href="index.php?page=<?php echo $i; ?>"><?php echo $i+1; ?></a>
        <?php } ?>
      </div>
    </div>

    <div id="scrollUp">
      <a href="#top"><img src="https://i.imgur.com/0f85aFb.png" height="60%" width="60%"/></a>
    </div>

    <div class="baspage">
      <img src="https://i.imgur.com/zGoXmaU.png" class="baspage">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="../Accueil/js/popper.min.js"></script>
    <script type="text/javascript" src="../Accueil/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Accueil/js/mdb.js"></script>
  </body>
</html>
