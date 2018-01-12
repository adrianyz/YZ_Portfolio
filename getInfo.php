<?php
  require("./scripts/connect.php");
  if(isset($_GET["getImage"])){
    $selectImg = $_GET["getImage"];
    $getImgList = $link->query("SELECT img_category, img_item, img_desc FROM tbl_img WHERE img_category = '$selectImg'");
    if($getImgList->num_rows > 0){
      $imgContent = array();
      while($row = $getImgList->fetch_assoc()){
        array_push($imgContent, $row);
      }
      echo json_encode($imgContent);
    }
  }
 ?>
