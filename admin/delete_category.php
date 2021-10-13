<?php


	include'../connect.php';
  $id=$_GET['id'];
  $img = $_GET['img'];
  $path = "../category_pic/$img";
  unlink($path);
	$result = $db->prepare("DELETE FROM category WHERE id= $id");
	$result->bindParam($id, $id);
       if($result->execute()){
      header("location:all_category.php?success=true");
        }else{
            header("location:all_category.php?failed=true");
        } 
		
?>