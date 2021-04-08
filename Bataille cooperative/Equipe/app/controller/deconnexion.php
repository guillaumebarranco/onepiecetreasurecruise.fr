<?php

session_destroy();
echo '<body onLoad="alert(\'Vous êtes déconnecté\')">';
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';

?>