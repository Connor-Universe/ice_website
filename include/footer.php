<div class="footer">
    <footer>
        <div class="section-one1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="head">Random Posts</p>
                        <div class="container-fluid">
                        <?php
                                    $get_post = "select * from posts order by rand() DESC limit 5, 3";
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
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <p class="head">Recent Posts</p>
                        <div class="container-fluid">
              
                        <?php
                                    $get_post = "select * from posts order by id DESC limit 6, 3";
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
                      
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <p class="head">More Posts</p>
                        <div class="container-fluid">
                        <?php
                                    $get_post = "select * from posts order by rand() DESC limit 3";
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
                      
                        </div>
                    </div>
                </div>
                
            </div>
            <p class="extra">
                <a href="terms.php">Terms</a>
                <a href="disclaimer.php">Disclaimer</a>
                <a href="privacy.php">Privacy Policy</a>
            </p>
        </div>
        
        <div class="section-two2">
            <p>Website Created by <a href="https://zayxon.com">Zayxon</a></p>
        </div>
    </footer>
</div>