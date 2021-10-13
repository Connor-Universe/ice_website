
<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="css/post.css">
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
    <?php
    $name = $_GET['name'];
    $get_post = "select * from posts where name='$name'";
    $run_post = mysqli_query($conn,$get_post);
    $row_post= mysqli_fetch_array($run_post);
    $post_img = $row_post['picture'];
    $post_name = $row_post['name'];
    $post_category = $row_post['category'];
    $post_detail = $row_post['detail'];
    $post_date = $row_post['date'];
    $post_id = $row_post['id'];
?>
        <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <p class="title"><?php echo"$post_name";?></p>
                    <ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
  <li class="breadcrumb-item"><a href="<?php echo"category.php?type=$post_category";?>"><i class="fa fa-newspaper-o"></i> <?php echo"$post_category";?></a></li>
  <li class="breadcrumb-item"><a href=""> <i class="fa fa-clock-o"></i> <?php echo"$post_date";?></a></li>
  <li class="breadcrumb-item active"> <i class="fa fa-address-book-o"></i> <?php echo"$post_name";?></li>
</ul>
  <img src="post_pic/<?php echo"$post_img";?>" alt="">
  <p class="info"><?php echo"$post_detail";?></p>

      <h3>Share This Post!</h3>
                <div class="addthis_inline_share_toolbox"></div>
                <h4>Related Posts</h4>
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        $cat = $GLOBALS['post_category'];
                        $get_post = "select * from posts where category='$cat' order by rand() DESC limit 5,3";
                        $run_post = mysqli_query($conn, $get_post);
                        while($row_post = mysqli_fetch_array($run_post)){
                            $post_img = $row_post['picture'];
                            $post_name = $row_post['name'];
                            $post_category = $row_post['category'];
                            $post_detail = $row_post['detail'];
                            $post_date = $row_post['date'];
                            $post_id = $row_post['id'];
                            echo"
                            <div class='col-lg-4'>
                            <div class='container-one'>
                                   <img src='post_pic/$post_img'>
                                   <div class='category'>$post_category</div>
                                   <a href='post.php?name=$post_name'><div class='overlay1'></div></a>
                                   <div class='info'>
                                       <p>$post_name</p>
                                       <span class='date'>Posted On <i class='fa fa-clock-o'></i> $post_date | <i class='fa fa-comment'> <a href='https://ice24updates.com/post.php?name=$post_name#disqus_thread' class='comnum'></a></i></span>
                                   </div>
                             </div>
   
                           </div>
                            ";
                        }
                        ?>
                        

                    </div>
                </div>
                <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

    var disqus_config = function () {
        this.page.url = 'https://ice24updates.com/post.php<?php echo"?name=$post_name";?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo"post.php?name=$post_name";?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://ice24update.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
      
                <div class="col-lg-4">
                <p class="side">Social Media</p>
                            <div class="container-fluid">
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

                    <p class="side">Random Posts</p>
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
       
       <?php include("include/footer.php");?>
    
<script src="js/jquery-3.4.1.js"></script>
            <script src="js/bootstrap.bundle.js"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fb2013be343fc8f"></script>

<script id="dsq-count-scr" src="//ice24update.disqus.com/count.js" async></script>
    </body>
</html>