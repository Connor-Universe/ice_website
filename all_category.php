<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="css/all_category.css">
    <title>Ice24Update</title>
    <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="icon" href="img/favicon.png">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/slick.css"/>
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/navbar.css">
            <link rel="stylesheet" href="css/footer.css">
            <script data-ad-client="ca-pub-6363578755376607" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
    <?php include("include/navbar.php");?>
      
      <div class="main">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-9">
                      <p class="title">All Categories</p>
                      <div class="card-columns">
                      <?php
                          $limit = 6;
                          $page = isset($_GET['page']) ? $_GET['page'] : 1;
                          if($page<1){
                              $page=1;
                          }
                          
                          $start = ($page - 1) * $limit;
                          $get_post1 = "select count(*) from category";
                          $run_post1 = mysqli_query($conn,$get_post1);
                          $post_rows = mysqli_fetch_array($run_post1)[0];
                   
                          $pages = ceil($post_rows / $limit);
               
                          $previous = $page - 1;
                          $next = $page + 1;
               
       
                        $get_category = "select * from category order by rand() DESC limit $start, $limit";
                        $run_category = mysqli_query($conn, $get_category);
                        while($row_category = mysqli_fetch_array($run_category)){
                            $category_img = $row_category['picture'];
                            $category_name = $row_category['name'];
                            $category_detail = $row_category['detail'];
                            echo"
                            <div class='card' id='$category_name'>
                            <img class='card-img-top' src='category_pic/$category_img' alt='Card image'>
                            <div class='card-body'>
                                <h4 class='card-title'>$category_name</h4>
                                <p class='card-text'>$category_detail</p>
                                <a href='category.php?type=$category_name' class='btn btn-danger stretched-link'>More $category_name</a>
                            </div>
                            </div>
                            ";
                        }
                        ?>
                        
                 
                      </div>
                      <ul class="pagination justify-content-center" style="padding-top:30px;">
                                 <?php
                                       
                                  $prev="<li class='page-item'><a class='page-link' href='all_category.php?page=$previous'>Previous</a></li>";
                                  $nxt ="<li class='page-item'><a class='page-link' href='all_category.php?page=$next'>Next</a></li>";
                                  if($page == 1){
                                    $prev = "<li class='page-item disabled'><a class='page-link ' href='index.php'>Previous</a></li>";
                                }
                                if($page == $pages){
                                    $nxt="<li class='page-item disabled'><a class='page-link ' href='index.php?page=$next'>Next</a></li>";
                                }
                                 ?>
<?php echo"$prev";?>

   <?php echo "$nxt";?>


</ul>
                  </div>
                  <div class="col-lg-3">
                  <p class="title2">Other Posts</p>
                   <!--start of the container -->
                      <div class="container-fluid">
                      <?php
                       
                        $get_post = "select * from posts order by rand() DESC limit 3,10";
                        $run_post = mysqli_query($conn, $get_post);
                        while($row_post = mysqli_fetch_array($run_post)){
                            $post_img = $row_post['picture'];
                            $post_name = $row_post['name'];
                            $post_category = $row_post['category'];
                            $post_detail = $row_post['detail'];
                            $post_date = $row_post['date'];
                            $post_id = $row_post['id'];
                            
                            $post_detail1 = strip_tags(substr($post_detail,0,100))."...";
                            echo"
                            <div class='row'>
                            <div class='col-6'>
                            <a href='post.php?name=$post_name'>   <img src='post_pic/$post_img' alt=''></a>
                            </div>
                            <div class='col-6'>
                            <p class='header'>$post_name</p>
                            <p class='detail'>$post_detail1</p>
                            </div>
                            <p class='info'> Posted on <i class='fa fa-clock-o'></i>$post_date | <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></p>
                            <hr>
                        </div>

                            ";
                        }
                        ?>
                        
           
                      </div>
                   <!-- end of the container -->
                  </div>
              </div>
          </div>
      </div>
       
       <?php include("include/footer.php");?>
    
<script src="js/jquery-3.4.1.js"></script>
            <script src="js/bootstrap.bundle.js"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->


            <script id="dsq-count-scr" src="//ice24update.disqus.com/count.js" async></script>
    </body>
</html>