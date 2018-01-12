<?php
  //echo "From mail.php";
  //if(isset($_GET["username"]) && isset($_GET["emailAddr"]) && isset($_GET["phoneNumber"])){
    $username = $_GET["username"];
    $emailAddr = $_GET["emailAddr"];
    $phoneNo = $_GET["phoneNumber"];
    $comments = $_GET["comment"];
    submitMessage($username, $emailAddr, $phoneNo, $comments);
    echo "Thank you! I will get back to you shortly.";
  //}
  //else{
  //  echo "Uh.....Something went wrong";
  //}

  function submitMessage($name, $email, $phone, $message){
      $to = "yzhao333@gmail.com";
      $subj = "Email from Portfolio Site";
      $headers = 'From: ' . $email . PHP_EOL ;
      $msg = "Name: " . $name . "\n\nEmail: ". $email . "\n\nPhone: " . $phone . "\n\nMessage: " . $message;
      //this will not work locally
      //this needs to be tested on your hosting
      mail($to, $subj, $msg, $headers);
  }
?>
