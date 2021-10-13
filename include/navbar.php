
<?php include"connect.php";?>

<div class="nav-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
            <a href="index.php"><p>Ice24Updates</p></a>
             
            </div>
            <div class="col-lg-8">
            <?php
             
              $get_ads = "select * from ads";
              $run_ads = mysqli_query($conn,$get_ads);
              $row_ads = mysqli_fetch_array($run_ads);
              $ads_img = $row_ads['picture'];
              $ads_link = $row_ads['link'];
              echo"<a href='$ads_link'><img src='ads_img/$ads_img' class='ads'></a>";
            ?>
   
            </div>
        </div>
    </div>

</div>
<!--ending of nav one -->
<!-- start of nav two --> 
<?php
    
    $get_info = "select * from settings";
    $run_info = mysqli_query($conn,$get_info);
    $row_info = mysqli_fetch_array($run_info);

    $face = $row_info['facebook'];
    $email = $row_info['email'];
    $twitter = $row_info['twitter'];
    $instagram = $row_info['linkedin'];
    $whatsapp = $row_info['phone'];
  ?>
<div class="nav-two">
<nav class="navbar navbar-expand-xl">
  <!-- Brand -->
  <a class="navbar-brand home" href="index.php">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class="fa fa-align-center" style="color:white; font-size:2em;"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <?php
         $get_categories = "select * from category order by rand() limit 3;";
         $run_categories = mysqli_query($conn,$get_categories);
         while($row_categories = mysqli_fetch_array($run_categories)){
           $categories_name = $row_categories['name'];
           echo"
             <li class='nav-item'>
                <a class='nav-link' href='category.php?type=$categories_name'>$categories_name</a>
             </li>
           ";
         }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="all_category.php">More Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline form" name="search_form" method="GET" action="posts.php">>
    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search Post">
    <span><button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button></span>
  </form>
  </div>

</nav>
</div>