<?php include"header.php"; ?>

	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Posts</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted a Post!")?>
                                            </div>
                                            <?php endif;?>
                        <div class="table1">
					   <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Details</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
  
                            <?php
                                $limit = 25;
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
                             $get_post = "select * from posts order by id DESC limit $start, $limit" ;
                             $run_post = mysqli_query($conn,$get_post);
                             while($row_post = mysqli_fetch_array($run_post)){
                               $post_name = $row_post['name'];
                               $post_id = $row_post['id'];
                               $post_detail = $row_post['detail'];
                               $post_date = $row_post['date'];
                               $post_category = $row_post['category'];
                               $post_img = $row_post['picture'];
                          
                               echo"
                               <tr>
                               <td>$post_id</td>
                               <td>$post_name</td>
                               <td>$post_date</td>
                               <td>$post_detail</td>
                               <td>$post_category</td>
                               <td>$post_img</td>
                               <td><a href='../post.php?name=$post_name' class='remove'>View Post</a></td>
                               <td><a href='delete_post.php?id=$post_id&img=$post_img' class='remove'>Remove</a></td>
                               </tr>
                               ";
                             }
                             
                            ?>
           
                             
             
                        </table>
                        <ul class="pagination justify-content-center" style="padding-top:30px;">
                                 <?php
                                       
                                  $prev="<li class='page-item'><a class='page-link' href='all_post.php?page=$previous'>Previous</a></li>";
                                  $nxt ="<li class='page-item'><a class='page-link' href='all_post.php?page=$next'>Next</a></li>";
                                  if($page == $pages){
                                    $nxt="<li class='page-item disabled'><a class='page-link ' href='index.php?page=$next'>Next</a></li>";
                                }
                                  if($page == 1){
                                    $prev = "<li class='page-item disabled'><a class='page-link ' href='index.php'>Previous</a></li>";
                                }
                                
                                 ?>
<?php echo"$prev";?>

   <?php echo "$nxt";?>


</ul>
                        </div>
						</div>
						</div>
				</div>
			</div>
		</div>
		<?php include"footer.php"; ?>