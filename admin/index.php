

<?php include "header.php"; ?> 
<?php
  $get_admin = "select * from table_admin" ;
  $run_admin = mysqli_query($conn,$get_admin);
  $num_admin = mysqli_num_rows($run_admin);

  $get_post = "select * from posts" ;
  $run_post = mysqli_query($conn,$get_post);
  $num_post = mysqli_num_rows($run_post);

  $get_category = "select * from category" ;
  $run_category = mysqli_query($conn,$get_category);
  $num_category = mysqli_num_rows($run_category);

  $get_ads = "select * from ads" ;
  $run_ads = mysqli_query($conn,$get_ads);
  $num_ads = mysqli_num_rows($run_ads);


?>
		<div class="page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-pencil"></i></h4>
    <p class="card-text">Posts</p>
    <a href="all_post.php" class="card-link stretched-link"><?php echo"$num_post";?></a>

  </div>
</div>
        </div>
        <div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-globe"></i></h4>
    <p class="card-text">Categories</p>
    <a href="all_category.php" class="card-link stretched-link"><?php echo"$num_category";?></a>

  </div>
</div>
        </div>
        <div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-envelope"></i></h4>
    <p class="card-text">Ads</p>
    <a href="all_ads.php" class="card-link stretched-link"><?php echo"$num_ads";?></a>

  </div>
</div>
        </div>
        <div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-home"></i></h4>
    <p class="card-text">Homepage</p>
    <a href="../index.php" class="card-link stretched-link">Go Home</a>

  </div>
</div>
				</div>
				<div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-user"></i></h4>
    <p class="card-text">Admins</p>
    <a href="adminlist.php" class="card-link stretched-link"><?php echo"$num_admin";?></a>

  </div>
</div>
				</div>
			</div>
		</div>
		</div>
        <?php include "footer.php"; ?>