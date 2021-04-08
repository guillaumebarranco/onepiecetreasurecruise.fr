<?php
include('./app/model/vote.php');
if (isset($_POST['submit']))
{
$pseudo = $_POST['pseudo'];
$vote = $_POST['vote'];

Vote::sugo($dsn,$pseudo,$vote);
echo "<script>alert(\"Vote envoyé. Merci pour votre participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
else{
	include('./app/view/page/sugo.php');
}
