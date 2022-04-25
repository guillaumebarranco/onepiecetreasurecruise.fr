function getNavbar(level = 0) {
  let path = "";

  switch (level) {
    case 0:
      path = "";
      break;
    case 1:
      path = "../";
      break;
    case 2:
      path = "../../";
      break;
    default:
      break;
  }

  return `
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark primary-color-dark">
      <img class="topnavbar" src="https://i.imgur.com/QvxN4d8.png" />

      <a class="navbar-brand" href="${path}/"><img src="https://imgur.com/SOSubWn.png" /></a>

      <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li id="menu-element-legends" class="nav-item">
            <a class="nav-link" href="${path}Legende.html">Personnages Sugo-Rare</a>
          </li>
          <li id="menu-element-guides" class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle waves-effect waves-light"
              data-toggle="dropdown" id="navbarDropdownMenuLink">Guides</a>
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-secondary">
              <a id="menu-sub-element-guides__grand_voyage" class="dropdown-item waves-effect waves-light" href="${path}GrandVoyage.html">Grand Voyage</a>
              <a id="menu-sub-element-guides__raids" class="dropdown-item waves-effect waves-light" href="${path}Raid.html">Combats cruciaux</a>
              <a id="menu-sub-element-guides__colos" class="dropdown-item waves-effect waves-light" href="${path}Colisee.html">Colisées</a>
              <a id="menu-sub-element-guides__arenas" class="dropdown-item waves-effect waves-light" href="${path}Arene.html">Arènes</a>
              <a id="menu-sub-element-guides__ambushes" class="dropdown-item waves-effect waves-light" href="${path}Invasion.html">Attaques ennemies</a>
              <a id="menu-sub-element-guides__fn" class="dropdown-item waves-effect waves-light" href="${path}Fortnight.html">Quêtes permanentes</a>
              <a id="menu-sub-element-guides__special" class="dropdown-item waves-effect waves-light" href="${path}Special.html">Évènements spéciaux</a>
              <a id="menu-sub-element-guides__story" class="dropdown-item waves-effect waves-light" href="${path}Histoire.html">Histoire principale</a>
              <a id="menu-sub-element-guides__forests" class="dropdown-item waves-effect waves-light" href="${path}Foret.html">Forêts d'entraînement</a>
              <a id="menu-sub-element-guides__gc" class="dropdown-item waves-effect waves-light" href="${path}Defi_de_Garp.html">Défi de Garp</a>
              <a id="menu-sub-element-guides__skulls" class="dropdown-item waves-effect waves-light" href="${path}Crane.html">Quêtes pour les super évolutions</a>
            </div>
          </li>
          <li id="menu-element-lists" class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
              id="navbarDropdownMenuLink">Liste de personnages</a>
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-secondary">
              <a id="menu-sub-element-lists__rr" class="dropdown-item" href="${path}PageRR.html">Personnages du recrutement rare</a>
              <a id="menu-sub-element-lists__tm" class="dropdown-item" href="${path}Carte_aux_tresors.html">Personnages des Cartes aux trésors</a>
              <a id="menu-sub-element-lists__kizuna" class="dropdown-item" href="${path}Kizuna.html">Personnages des Combats de l'amitié</a>
              <a id="menu-sub-element-lists__pvp" class="dropdown-item" href="${path}Fete_des_pirates.html">Personnages de la Fête des pirates</a>
              <a id="menu-sub-element-lists__lrr" class="dropdown-item" href="${path}LRR.html">Personnages limités au recrutement rare</a>
              <a id="menu-sub-element-lists__support" class="dropdown-item" href="${path}Soutien.html">Personnages limités au recrutement rare de soutien</a>
            </div>
          </li>
          <li id="menu-element-beginner" class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
              id="navbarDropdownMenuLink">Aide</a>
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-secondary">
              <a id="menu-sub-element-beginner__supports" class="dropdown-item waves-effect waves-light" href="${path}Debutant/Soutien.html">Effets de soutien spécifiques</a>
              <a id="menu-sub-element-beginner__lvl-lb" class="dropdown-item waves-effect waves-light"
                href="${path}Debutant/Level_Limit_Break.html">Level Limit Break</a>
              <a id="menu-sub-element-beginner__lb-plus" class="dropdown-item waves-effect waves-light"
                href="${path}Debutant/Extension%20du%20depassement%20de%20limites.html">Extension du dépassement de limites</a>
              <a id="menu-sub-element-beginner__cm" class="dropdown-item waves-effect waves-light"
                href="${path}Debutant/Souhaits%20de%20Chopper%20Man.html">Souhaits de Chopper Man</a>
              <a id="menu-sub-element-beginner__tl" class="dropdown-item waves-effect waves-light" href="${path}Debutant/Tier%20List.html">Tier Lists</a>
              <a id="menu-sub-element-beginner__island" class="dropdown-item waves-effect waves-light" href="${path}Debutant/Ile%20des%20collectionneurs.html">Île des collectionneurs</a>
              <a id="menu-sub-element-beginner__ships" class="dropdown-item waves-effect waves-light" href="${path}Bateau/index.html">Liste des bateaux</a>
            </div>
          </li>
          <li id="menu-element-progress" class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
              id="navbarDropdownMenuLink">Progressions</a>
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-secondary">
              <a id="menu-sub-element-progress__list-rr" class="dropdown-item" href="${path}RR.html">Liste à cocher des personnages du recrutement rare (version normale)</a>
              <a id="menu-sub-element-progress__list-story" class="dropdown-item" href="${path}Aventure.html">Liste à cocher des personnages de l'Histoire principale</a>
              <a id="menu-sub-element-progress__avancee-legend" class="dropdown-item" href="${path}Avancee.html">Avancée des personnages Sugo-Rare</a>
              <a id="menu-sub-element-progress__avancee-rr" class="dropdown-item" href="${path}AvanceeRR.html">Avancée des personnages du recrutement rare</a>
              <a id="menu-sub-element-progress__avancee-lrr" class="dropdown-item" href="${path}AvanceeLRR.html">Avancée des personnages limités au recrutement rare</a>
              <a id="menu-sub-element-progress__avancee-raid" class="dropdown-item" href="${path}AvanceeRaid.html">Avancée des combats cruciaux</a>
              <a id="menu-sub-element-progress__avancee-colo" class="dropdown-item" href="${path}AvanceeColisee.html">Avancée des Colisées & Arènes</a>
              <a id="menu-sub-element-progress__avancee-ambush" class="dropdown-item" href="${path}AvanceeAttaque.html">Avancée des attaques ennemies</a>
              <a id="menu-sub-element-progress__avancee-tm" class="dropdown-item" href="${path}AvanceeCarte.html">Avancée des personnages des Cartes aux trésors</a>
              <a id="menu-sub-element-progress__avancee-pvp" class="dropdown-item" href="${path}AvanceeFetePirates.html">Avancée des personnages de la Fête des Pirates</a>
              <a id="menu-sub-element-progress__avancee-kizuna" class="dropdown-item" href="${path}AvanceeCombatAmitie.html">Avancée des personnages des combats de l'amitié</a>
            </div>
          </li>
          <li id="menu-element-website-events" class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
              id="navbarDropdownMenuLink">Évènements</a>
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-secondary">
              <a id="menu-sub-element-website-events__creations" class="dropdown-item" href="${path}Creations.html">Créations de personnages</a>
              <a id="menu-sub-element-website-events__awards-2019" class="dropdown-item" href="${path}Awards/">Awards 2019</a>
              <a id="menu-sub-element-website-events__awards-2020" class="dropdown-item" href="${path}Awards2020/">Awards 2020</a>
            </div>
          </li>
          <li id="menu-element-other-websites" class="nav-item dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
              id="navbarDropdownMenuLink">Sites</a>
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-secondary">
              <a class="dropdown-item" href="https://optc-db.github.io/" target="_blank">OPTC Database</a>
              <a class="dropdown-item" href="https://lukforce.bitbucket.io/" target="_blank">OPTC Voyage Log</a>
              <a class="dropdown-item" href="https://www.nakama.network/" target="_blank">Nakama Network</a>
              <a class="dropdown-item" href="http://optc-tierlist.com/" target="_blank">Tier List Maker</a>
            </div>
          </li>
          <li id="menu-element-thanks" class="nav-item">
            <a class="nav-link" href="${path}Remerciements.html">Remerciements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://discord.gg/6bJvuT8" target="_blank">Discord</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form action="https://www.google.com" id="cse-search-box" name="cse-search-box">
              <div id="searchbar">
                <input name="cx" type="hidden" value="011516564617436617087:3cpi9kq7ujc" />
                <input name="ie" type="hidden" value="UTF-8" />
                <input id="search_area" name="q" placeholder="Rechercher" size="20" style="
                      border: 1px solid rgb(126, 157, 185);
                      margin-bottom: 5px;
                      background: url('https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png')
                        left center no-repeat rgb(255, 255, 255);
                      text-indent: 48px;
                    " type="text" value="" />
              </div>
              <input name="siteurl" type="hidden" value="onepiecetreasurecruise.fr" /><input name="ref" type="hidden"
                value="" /><input name="ss" type="hidden" value="" />
            </form>
          </li>
        </ul>
      </div>
    </nav>
  `;
}

/*
legends
guides
__how
__raids
__colos
__arenas
__ambushes
__fn
__special
__next-tm
__next-kizuna
__story
__forests
__gc
__skulls
lists
__rr
__tm
__kizuna
__pvp
__lrr
__support
beginner
__begin
__cm
__rates
__lb-plus
__ships
__supports
__pvp-style
__island
__tl
progress
__list-rr
__list-story
__avancee-legend
__avancee-rr
__avancee-lrr
__avancee-raid
__avancee-colo
__avancee-ambush
__avancee-tm
__avancee-pvp
__avancee-kizuna
artworks
website-events
other-websites
thanks
*/

function addNavbar(parentElement, subElement = null, level = 0) {
  const navbar = getNavbar(level);

  $("#optcnavbar").append(navbar);
  $(`#menu-element-${parentElement}`).addClass("active");

  if (subElement) {
    $(`#menu-sub-element-${parentElement}__${subElement}`).addClass("active");
  }
}
