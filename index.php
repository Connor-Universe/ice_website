<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="css/index.css">
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
        <div class="main">
        <?php include("include/navbar.php");?>
            <div class="section-one">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <?php 
                             $get_post = "select * from posts order by id DESC limit 1";
                             $run_post = mysqli_query($conn,$get_post);
                             $row_post = mysqli_fetch_array($run_post);
                             $post_img = $row_post['picture'];
                             $post_category = $row_post['category'];
                             $post_name = $row_post['name'];
                             $post_date = $row_post['date'];
                             echo"
                                <div class='container-one'>
                                    <img src='post_pic/$post_img'>
                                    <div class='category'>$post_category</div>
                                    <a href = 'post.php?name=$post_name'> <div class='overlay1'></div></a>
                                    <div class='info'>
                                       <p>$post_name</p>
                                       <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                                    </div>
                                </div> 
                             ";
                            ?>
                           
                        </div>
                        <div class="col-lg-8">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <?php 
                             $get_post = "select * from posts order by id DESC limit 1,2";
                             $run_post = mysqli_query($conn,$get_post);
                             $row_post = mysqli_fetch_array($run_post);
                             $post_img = $row_post['picture'];
                             $post_category = $row_post['category'];
                             $post_name = $row_post['name'];
                             $post_date = $row_post['date'];
                             echo"
                                <div class='container-two'>
                                    <img src='post_pic/$post_img'>
                                    <div class='category'>$post_category</div>
                                    <a href = 'post.php?name=$post_name'> <div class='overlay2'></div></a>
                                    <div class='info'>
                                       <p>$post_name</p>
                                       <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                                    </div>
                                </div> 
                             ";
                            ?>
                                 
                                    </div>
                                    <div class="col-lg-6">
                                    <?php 
                             $get_post = "select * from posts order by id DESC limit 2,3";
                             $run_post = mysqli_query($conn,$get_post);
                             $row_post = mysqli_fetch_array($run_post);
                             $post_img = $row_post['picture'];
                             $post_category = $row_post['category'];
                             $post_name = $row_post['name'];
                             $post_date = $row_post['date'];
                             echo"
                                <div class='container-two'>
                                    <img src='post_pic/$post_img'>
                                    <div class='category'>$post_category</div>
                                    <a href = 'post.php?name=$post_name'> <div class='overlay3'></div></a>
                                    <div class='info'>
                                       <p>$post_name</p>
                                       <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                                    </div>
                                </div> 
                             ";
                            ?>
                                 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <?php 
                             $get_post = "select * from posts order by id DESC limit 3,4";
                             $run_post = mysqli_query($conn,$get_post);
                             $row_post = mysqli_fetch_array($run_post);
                             $post_img = $row_post['picture'];
                             $post_category = $row_post['category'];
                             $post_name = $row_post['name'];
                             $post_date = $row_post['date'];
                             echo"
                                <div class='container-two'>
                                    <img src='post_pic/$post_img'>
                                    <div class='category'>$post_category</div>
                                    <a href = 'post.php?name=$post_name'> <div class='overlay4'></div></a>
                                    <div class='info'>
                                       <p>$post_name</p>
                                       <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                                    </div>
                                </div> 
                             ";
                            ?>
                                
                                    </div>
                                    <div class="col-lg-6">
                                    <?php 
                             $get_post = "select * from posts order by id DESC limit 4,5";
                             $run_post = mysqli_query($conn,$get_post);
                             $row_post = mysqli_fetch_array($run_post);
                             $post_img = $row_post['picture'];
                             $post_category = $row_post['category'];
                             $post_name = $row_post['name'];
                             $post_date = $row_post['date'];
                             echo"
                                <div class='container-two'>
                                    <img src='post_pic/$post_img'>
                                    <div class='category'>$post_category</div>
                                    <a href = 'post.php?name=$post_name'> <div class='overlay5'></div></a>
                                    <div class='info'>
                                       <p>$post_name</p>
                                       <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                                    </div>
                                </div> 
                             ";
                            ?>
                                  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ending of section one -->
            <!-- Start of section two -->
            <div class="section-two">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                        <?php 
                             $get_category = "select * from category order by rand()";
                             $run_category = mysqli_query($conn,$get_category);
                             $row_category = mysqli_fetch_array($run_category);
                             $category_name = $row_category['name'];
                             $get_post = "select * from posts  where category ='$category_name'order by id DESC limit 1";
                             $run_post = mysqli_query($conn,$get_post);
                             $row_post = mysqli_fetch_array($run_post);
                             $post_img = $row_post['picture'];
                             $post_name = $row_post['name'];
                             $post_date = $row_post['date'];
                             $post_category = $row_post['category']; 
                             $get_post1 = "select * from posts where category ='$category_name' order by id DESC limit 1, 4";
                             $run_post1 = mysqli_query($conn,$get_post1);
                        
                            
                             echo"
                             <p class='title'>$category_name</p>
                             <div class='container-fluid'>
                             <div class='row'>
                             <div class='col-lg-6'>
                             <div class='container-one'>
                             <a href='post.php?name=$post_name'><img src='post_pic/$post_img'></a> 
                             <div class='category'>$post_category</div>
                             <a href='post.php?name=$post_name'><div class='overlay1'></div></a>
                             <div class='info'>
                                 <p>$post_name</p>
                                 <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                             </div>
                            </div>

                             </div>
                             <div class='col-lg-6'>
                                 <div class='container-fluid'>";
                                 while($row_post1= mysqli_fetch_array($run_post1)){
                                    $post_img1 = $row_post1['picture'];
                                    $post_name1 = $row_post1['name'];
                                    $post_date1 = $row_post1['date'];
                                    $post_category1 = $row_post1['category']; 
                                    $post_detail = $row_post['detail'];
                                    $post_detail1 = strip_tags(substr($post_detail,0,100))."...";
                                     echo"
                                     <div class='row'>
                                     <div class='col-6'>
                                     <a href='post.php?name=$post_name'><img src='post_pic/$post_img1'></a>
                                     </div>
                                     <div class='col-6'>
                                         <div class='info'>
                                             <p class='postname'>$post_name1</p>
                                             <p class='postdetail'>$post_detail1</p>
                                             <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date1 | <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span> 
                                         </div>
                                     </div>
                                 </div>
                                     ";
                                 }                 ?>
                                   
                                 
                                 </div>
                             </div>
                           </div>
                         </div>
           
                       
                         
                        </div>
                        <div class='col-lg-4'>
                            <p class='title second'>Random Posts</p>
                            <div class='container-fluid'>
                                <?php
                                    $get_post = "select * from posts order by rand() DESC limit 5, 5";
                                    $run_post = mysqli_query($conn,$get_post);
                                    while($row_post = mysqli_fetch_array($run_post)){
                                        $post_name = $row_post['name'];
                                        $post_img = $row_post['picture'];
                                        $post_category = $row_post['category'];
                                        $post_date = $row_post['date'];
                                        $post_detail = $row_post['detail'];
                                        $post_detail1 = strip_tags(substr($post_detail,0,100))."...";
                                            echo"
                                            <div class='row'>
                                            <div class='col-6'>
                                            <a href='post.php?name=$post_name'><img src='post_pic/$post_img'></a>
                                            </div>
                                            <div class='col-6'>
                                                <div class='info'>
                                                    <p class='postname'>$post_name</p>
                                                    <p class='postdetail'>$post_detail1</p>
                                                    <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date | <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span> 
                                                </div>
                                            </div>
                                        </div>
                                            ";
                                    }
                                ?>
                        
                                        <!--end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ending of section two -->
            <!-- starting of section three-->
            <div class="section-three">
           
                <div class="container-fluid">
                    <div class="row">
             
                                   
                        <div class="col-lg-8">
                            <?php
                              $get_category1 = "select * from category order by rand()";
                              $run_category1 = mysqli_query($conn,$get_category1);
                              $row_category1 = mysqli_fetch_array($run_category1);
                              $category_name1 = $row_category1['name'];
                              echo"   <p class='title first'>$category_name1</p>";
                              
                            ?>
                                 <div class='slick-caro'>
                                 <?php 
                            $cat =$GLOBALS['category_name1'];
                             $get_post = "select * from posts  where category='$cat' order by id DESC limit 4";
                             $run_post = mysqli_query($conn,$get_post);
                           
                                         
                            while($row_post = mysqli_fetch_array($run_post)){
                                $post_img = $row_post['picture'];
                                $post_name = $row_post['name'];
                                $post_date = $row_post['date'];
                                $post_category = $row_post['category'];        
                             echo"
                         
                        
                             <div> 
                          
                             <div class='container-one'>
                      <img src='post_pic/$post_img' alt='random logo'>
                            <div class='category'>$post_category</div>
                            <a href = 'post.php?name=$post_name'> <div class='overlay1'></div></a>
                            <div class='info'>
                                <p>$post_name</p>
                                <span class='date'><i class='fa fa-clock'></i>$post_date</span>
                            </div>
                        </div>
                    
                        </div>";
                                 }                 ?>
                                 </div>
                      
                        </div>
                        <div class="col-lg-4">
                        <p class="title second">Social Media</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="social facebook">
                                            <a href="https://facebook.com/<?php echo"$face";?>">
                                            <p>
                                                <i class="fa fa-facebook"></i>
                                                <br>
                                                <span class="num"><?php echo"$face";?></span>
                                                <br>
                                                <span class="info">Likes</span>
                                            </p>
                                </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="social twitter">
                                        <a href="https://twitter.com/<?php echo"$twitter";?>">
                                            <p>
                                                <i class="fa fa-twitter"></i>
                                                <br>
                                                <span class="num"><?php echo"$twitter";?></span>
                                                <br>
                                                <span class="info">follwers</span>
                                            </p>
                                </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                    <div class="social instagram">
                                        <a href="https://instagram.com/<?php echo"$instagram";?>">
                                            <p>
                                                <i class="fa fa-instagram"></i>
                                                <br>
                                                <span class="num"><?php echo"$instagram";?></span>
                                                <br>
                                                <span class="info">followers</span>
                                            </p>
                                </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="social messager">
                                        <a href="https://facebook.com/<?php echo"$face";?>">
                                            <p>
                                                <i class="fa fa-facebook-official"></i>
                                                <br>
                                                <span class="num"><?php echo"$face";?></span>
                                                <br>
                                                <span class="info">messagner</span>
                                            </p>
                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
             <!--ending of section three-->
             <!-- start of section four -->
                <div class="section-four">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="title first">Recent Posts</p>
                                <div class="container-fluid" id='start'>
                                    <?php
                                       $limit = 15;
                                       $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                       if($page<1){
                                           $page=1;
                                       }
                                       $start = ($page - 1) * $limit;
                                       $get_post1 = "select count(*) from posts";
                                       $run_post1 = mysqli_query($conn,$get_post1);
                                       $post_rows = mysqli_fetch_array($run_post1)[0];
                                
                                       $pages = ceil($post_rows / $limit);
                                       $previous = $page - 1;
                                       $next = $page + 1;
                            
                                       $get_post = "select * from posts order by id DESC limit $start,$limit";
                                       $run_post = mysqli_query($conn,$get_post);
                                       while($row_post=mysqli_fetch_array($run_post)){
                                           $post_img = $row_post['picture'];
                                           $post_name = $row_post['name'];
                                           $post_detail =$row_post['detail'];
                                           $post_detail1 = strip_tags(substr($post_detail,0,200))."...";
                                           $post_date = $row_post['date'];
                                           $post_category = $row_post['category'];
                                           echo"
                                           <div class='row'>
                                           <div class='col-5'>
                                               <div class='container-one'>
                                               <a href = 'post.php?name=$post_name'><img src='post_pic/$post_img' alt='random logo'></a>
                                                   <p class='category'>$post_category</p>
                                               </div>
                                           </div>
                                           <div class='col-7'>
                                               <div class='post'>
                                                   <p class='title'>$post_name</p>
                                                   <span class='date'>Posted On <i class='fa fa-clock-o'></i>$post_date | <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span>
                                                   <p class='info'>
                                                   $post_detail1
                                                   </p>
                                                   <a href='post.php?name=$post_name' class='read'>Read More</a>
                                               </div>
                                           </div>
                                       </div>
                                           ";
                                       }
                                    ?>
                                                                    
                                </div>
                                 <!-- end of col-lg 8 -->   
                                 <ul class="pagination justify-content-center" style="padding-top:30px;">
                                 <?php
                                       
                                  $prev="<li class='page-item'><a class='page-link' href='index.php?page=$previous#start'>Previous</a></li>";
                                  $nxt ="<li class='page-item'><a class='page-link' href='index.php?page=$next#start'>Next</a></li>";
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
                            <div class="col-lg-4">
                            <p class="title second">More Posts</p>
                            <div class="container-fluid">
                            <?php
                                    $get_post = "select * from posts order by rand() DESC limit 5, 10";
                                    $run_post = mysqli_query($conn,$get_post);
                                    while($row_post = mysqli_fetch_array($run_post)){
                                        $post_name = $row_post['name'];
                                        $post_img = $row_post['picture'];
                                        $post_category = $row_post['category'];
                                        $post_date = $row_post['date'];
                                        $post_detail = $row_post['detail'];
                                        $post_detail1 = strip_tags(substr($post_detail,0,100))."...";
                                            echo"
                                            <div class='row'>
                                            <div class='col-6'>
                                        <a href = 'post.php?name=$post_name'><img src='post_pic/$post_img' alt='random logo'></a>        
                                            </div>
                                            <div class='col-6'>
                                                <div class='info'>
                                                    <p class='postname'>$post_name</p>
                                                    <p class='postdetail'>$post_detail1</p>
                                                    <span class='date'>Posted on <i class='fa fa-clock-o'></i>$post_date | <i class='fa fa-comment'></i> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></span> 
                                                </div>
                                            </div>
                                        </div>
                                            ";
                                    }
                                ?> 
                          
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
             <!-- ending of section four -->
        </div>
       
       <?php include("include/footer.php");?>
    
<script src="js/jquery-3.4.1.js"></script>
            <script src="js/bootstrap.bundle.js"></script>
            <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function(){
      $('.slick-caro').slick({
                infinite: true,
                lazyLoad: 'ondemand',
                autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1

            });
            });
  </script>

    </body>
    <script id="dsq-count-scr" src="//ice24update.disqus.com/count.js" async></script>
</html>