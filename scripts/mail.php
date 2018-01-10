<?php

function redirect_to($location){
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}
  //echo "From mail.php";
  function submitMessage($name, $email, $message){
      $to = "yzhao333@gmail.com";
      $subj = "Email from Portfolio Site";
      $extra = "Reply-to:{$email}";
      $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMassage: ".$message;
      //this will not work locally
      //this needs to be tested on your hosting
      //mail($to, $subj. $msg, $extra);
      $direct = $direct."?name={$name}";
      redirect_to($direct);
  }
?>
