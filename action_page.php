<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $uname = htmlspecialchars($_POST['say']);
  $password  = htmlspecialchars($_POST['to']);

  echo  $uname, ' ', $password;
?>
