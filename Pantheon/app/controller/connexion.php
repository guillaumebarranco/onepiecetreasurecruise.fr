<?php
    include('./app/view/page/connexion.php');
    include('./app/model/profil.php');
    

    if (!empty($_POST['login']) && !empty($_POST['mdp'])) 
    {
            $loginOK = $_POST['login'];
            $mdpOK = $_POST['mdp'];

            $login_valide = Profil::getProfilByID($dsn,$loginOK);
            if (!empty($loginOK) && !empty($mdpOK))
            {
                if (!empty($login_valide) && $login_valide->getLogin() == $_POST['login'] && $login_valide->getMdp() == $_POST['mdp']) 
                {          
                    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['mdp'] = $_POST['mdp'];
                    $_SESSION['pseudo'] = $login_valide->getPseudo();
                    $_SESSION['avatar']= $login_valide->getAvatar();
                    $_SESSION['lvl'] = $login_valide->getLVL();
                    $_SESSION['jour']= $login_valide->getJour();
                    $_SESSION['identifiant']= $login_valide->getIdentifiant();
                    $_SESSION['effectif']= $login_valide->getEffectif();
                    $_SESSION['effectif6']= $login_valide->getEffectif6();
                    $_SESSION['id']= $login_valide->getID();
                }
                else
                {  
                    echo '<body onLoad="alert(\'Connexion échouée\')">';
                    echo '<meta http-equiv="refresh" content="0;URL=index.php?page=connexion">';
                }

            }
            else{
                echo '<body onLoad="alert(\'Connexion échouée\')">';
                echo '<meta http-equiv="refresh" content="0;URL=index.php?page=connexion">';
            }
        
    	
    }
    
    
    ?>