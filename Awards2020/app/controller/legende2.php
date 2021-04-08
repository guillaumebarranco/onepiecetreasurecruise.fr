<?php
include('./app/model/vote.php');
if (isset($_POST['submit']))
{
$vote = $_POST['vote'];
$ip = $_SERVER['REMOTE_ADDR'];

Vote::legende($dsn,$vote,$ip);
echo "<script>alert(\"Vote sent. Thank you for your participation.\")</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php?page=index2">';
}
else{
	include('./app/view/page/legende2.php');
}
