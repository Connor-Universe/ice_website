<?php


	include'../connect.php';
  $id=$_GET['id'];
  $img = $_GET['img'];
  $path = "../ads_img/$img";
  unlink($path);
	$result = $db->prepare("DELETE FROM ads WHERE id= $id");
	$result->bindParam($id, $id);
       if($result->execute()){
      header("location:all_ads.php?success=true");
        }else{
            header("location:all_ads.php?failed=true");
        } 
		
?>