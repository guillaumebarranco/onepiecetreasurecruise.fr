<?php
session_start();

// if(
//   !empty($_POST["author"]) &&
//   !empty($_POST["content"])
// ) {
//   $connect = new PDO("mysql:host=91.216.107.219;dbname=onepi1059958_13gnpbm","onepi1059958" ,"qf1jkjntqe");

//   $dsn = $connect->prepare("INSERT INTO `messages` (`author`, `content`, `date`) VALUES(:author, :content, :created_time)");
//   $dsn->bindParam(":author", $_POST["author"], PDO::PARAM_STR);
//   $dsn->bindParam(":content", $_POST["content"], PDO::PARAM_STR);
//   $dsn->bindParam(":created_time", time());

//   $dsn->execute();

//   header("Location: index.php");
// } else {
//   echo '<div>Vous devez rentrer un pseudo et un message. <a href="index.php">Retour au livre d\'or</a></div>';
// }

?>
