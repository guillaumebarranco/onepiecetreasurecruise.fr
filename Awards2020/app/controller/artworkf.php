<?php
include('./app/model/vote.php');
if (isset($_POST['submit']))
{
$vote = $_POST['vote'];
$ip = $_SERVER['REMOTE_ADDR'];

Vote::artworkf($dsn,$vote,$ip);
echo "<script>alert(\"Vote envoyé. Merci pour votre participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
else{
	include('./app/view/page/artworkf.php');
}