<?php 
session_start();
try {
    $dsn = new PDO('mysql:host=91.216.107.219;dbname=onepi1059958',"onepi1059958" ,"qf1jkjntqe",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

if(isset($_GET['page']))
{
	include("app/controller/".$_GET['page'].".php");
}
else
{
	include("app/controller/index.php");
}
?>
