<?php
  $user = "adryzhao";
  $pass = "290703joel";
  $url = "localhost";
  $db = "yz333_lightBox";

  $link = mysqli_connect($url, $user, $pass, $db);

  if(mysqli_connect_error()){
      printf("Connect Failed: %s\n", mysqli_connect_error());
      exit();
  }
 ?>
