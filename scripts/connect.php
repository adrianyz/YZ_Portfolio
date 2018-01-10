<?php   //This script will connect us to our database
  $user = "root";
  $pass = "root";
//$pass = "root";
  $url = "localhost";
  $db = "db_lightbox";

//ticket to access our db
  $link = mysqli_connect($url, $user, $pass, $db);//windows
  // $link - mysqli_connect($url, $user, $pass, $db "8889");

  //Check our connection if it fails
  if(mysqli_connect_error()){
      printf("Connect Failed: %s\n", mysqli_connect_error());
      exit();

  }
 ?>
