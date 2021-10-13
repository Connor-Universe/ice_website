<?php include"header.php"; ?>

	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Categories</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted a Category!")?>
                                            </div>
                                            <?php endif;?>
                        <div class="table1">
					   <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Picture</th>
                                <td>link</td>
                                <th>Action</th>
                            </tr>
  
                            <?php
                             $get_category = "select * from category" ;
                             $run_category = mysqli_query($conn,$get_category);
                             while($row_category = mysqli_fetch_array($run_category)){
                               $category_name = $row_category['name'];
                               $category_id = $row_category['id'];
                               $category_detail = $row_category['detail'];
                               $category_img = $row_category['picture'];
                          
                               echo"
                               <tr>
                               <td>$category_id</td>
                               <td>$category_name</td>
                               <td>$category_detail</td>
                               <td>$category_img</td>
                               <td><a href='../all_category.php#$category_name' class='remove'>View Category</a></td>
                               <td><a href='delete_category.php?id=$category_id&img=$category_img' class='remove'>Remove</a></td>
                               </tr>
                               ";
                             }
                             
                            ?>
           
                 
            
                             
                             
             
                        </table>
                        </div>
						</div>
						</div>
				</div>
			</div>
		</div>
		<?php include"footer.php"; ?>