<?php


	include'../connect.php';
  $id=$_GET['id'];
  $img = $_GET['img'];
  $path = "../post_pic/$img";
  unlink($path);
	$result = $db->prepare("DELETE FROM posts WHERE id= $id");
	$result->bindParam($id, $id);
       if($result->execute()){
      header("location:all_post.php?success=true");
        }else{
            header("location:all_post.php?failed=true");
        } 
		
?>