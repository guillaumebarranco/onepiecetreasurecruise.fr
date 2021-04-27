<?php
session_start();

try {
  $connect = new PDO('mysql:host=91.216.107.219;dbname=onepi1059958_13gnpbm',"onepi1059958" ,"qf1jkjntqe");

  $page = isset($_GET['page']) ? intval($_GET['page']) : 0;

  $query = "SELECT * FROM messages ORDER BY `date` desc";
  $dsn = $connect->query($query);

  $messages = $dsn->fetchAll();

  $count_pages = round(count($messages) / 10, 0);

  $offset = $page === 0 ? 0 : $page * 10;

  $displayed_messages = count($messages) > 9 ? array_slice($messages, $offset, 10) : $messages;

} catch (\Throwable $th) {
  var_dump($th);
}

include("view.php");
?>
