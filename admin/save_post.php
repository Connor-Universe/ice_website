<?php



   // define variables and set to empty values
   $category_err = "";
   $post_name = $post_detail = $category_name  = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }
     $post_name = $_POST['post_name'];

     $post_detail = $_POST['post_detail'];
     $post_date = $_POST['post_date'];
 
     $category_name = $_POST['category_name'];

 
     function getCode(){
        return substr(sha1(time()), 0, 30);

     }
     $pic = getCode();
     $post = $_FILES['post_pic']['name'];
 
     $post_tmp = $_FILES['post_pic']['tmp_name'];
     
     $post_pic =  $pic.$post;
 
        
     if($_POST['category_name'] == "select"){
         $category_err = "<span class='error text-danger'>Please Choose a Category</span>";
     }

     
    
      if ( $category_err == ""){
        move_uploaded_file($post_tmp,"../post_pic/$post_pic");
          
        
   $insert_song = "INSERT INTO posts (name,detail,category,date,picture) VALUES 
    ('$post_name','$post_detail','$category_name','$post_date','$post_pic')";

$run_song = mysqli_query($conn,$insert_song);
   
         }
         
     
   }
   
   
    
   
   
   
   
   
   ?>
?>