<?php
include('./app/model/vote.php');
include('./app/model/vote2.php');
include('./app/model/vote3.php');
if (isset($_POST['submit']))
{
$pseudo = $_POST['pseudo'];
$vote = $_POST['vote'];
$ip = $_SERVER['REMOTE_ADDR'];

Vote::index($dsn,$pseudo,$vote,$ip);
echo "<script>alert(\"Vote envoyé. Merci pour votre participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
elseif (isset($_POST['submit2']))
{
$pseudo = $_POST['pseudo'];
$vote = $_POST['vote'];
$ip = $_SERVER['REMOTE_ADDR'];

Vote2::index2($dsn,$pseudo,$vote,$ip);
echo "<script>alert(\"Vote envoyé. Merci pour votre participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
elseif (isset($_POST['submit3']))
{
$pseudo = $_POST['pseudo'];
$vote = $_POST['vote'];
$ip = $_SERVER['REMOTE_ADDR'];

Vote3::index3($dsn,$pseudo,$vote,$ip);
echo "<script>alert(\"Vote envoyé. Merci pour votre participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index">';
}
else{
	include('./app/view/page/index.php');
}
