<?php

  $userid = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "pass");
  mysql_select_db("login");
  $sql = "SELECT image FROM register WHERE id=$userid";
  $result = mysql_query($sql);
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>
