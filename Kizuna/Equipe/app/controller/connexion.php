<?php
    include('./app/view/page/connexion.php');
    include('./app/model/team.php');
    

    if (!empty($_POST['nomequipe']) && !empty($_POST['mdp'])) 
    {
            $loginOK = $_POST['nomequipe'];
            $mdpOK = $_POST['mdp'];

            $login_valide = Team::getTeamByID($dsn,$loginOK);
            if (!empty($loginOK) && !empty($mdpOK))
            {
                if (!empty($login_valide) && $login_valide->getNomEquipe() == $_POST['nomequipe'] && $login_valide->getMdp() == $_POST['mdp']) 
                {          
                    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                    $_SESSION['nomequipe'] = $_POST['nomequipe'];
                    $_SESSION['mdp'] = $_POST['mdp'];
                    $_SESSION['nom'] = $login_valide->getNom();
                    $_SESSION['invitation']= $login_valide->getInvitation();
                    $_SESSION['commentaire'] = $login_valide->getCommentaire();
                    $_SESSION['membre'] = $login_valide->getMembre();
                    $_SESSION['contact']= $login_valide->getContact();
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