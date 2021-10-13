<?php



   // define variables and set to empty values

   $category_name = $category_detail = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
     $category_name = $_POST['category_name'];
     $category_detail = $_POST['category_detail'];
 
     function getCode(){
        return substr(sha1(time()), 0, 30);

     }
     $pic = getCode();
     $category = $_FILES['category_pic']['name'];
 
     $category_tmp = $_FILES['category_pic']['tmp_name'];
     
     $category_pic =  $pic.$category;

    move_uploaded_file($category_tmp,"../category_pic/$category_pic");
          
        
   $insert_song = "INSERT INTO category (name,detail,picture) VALUES 
    ('$category_name','$category_detail','$category_pic')";

$run_song = mysqli_query($conn,$insert_song);
   
         }
         

   
   
    
   
   
   
   
   
   ?>
?>