<?php include "header.php"; ?>
<?php include "save_post.php";?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Post</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Post Details
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Post saved Successfully!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
											
												<label>Post Name : </label>
												<input type="text" name="post_name" class="form-control1 control3" placeholder="Post Title" required>
												<label>Post Detail : </label>
												<textarea rows="6" cols="20" id="body" name="post_detail" class="form-control1 control2"required></textarea>
												 <script>
                CKEDITOR.replace( 'body' );
            </script>
			
							<label>Add Post Cover Image</label>
							<input type="file" name="post_pic" class="form-control1 control3" required>

							<label>Add Post Date</label>
							<input type="date" name="post_date" class="form-control1 control3" required>
							<label>Add Post Category</label>
							<?php echo"$category_err"; ?>
							<select name="category_name" id="artist" class="form-control1 control3">
								<option value="select" selected>-Select-</option>
								<?php
									$get_category = "select * from category";
									$run_category = mysqli_query($conn,$get_category);
									while($row_category = mysqli_fetch_array($run_category)){
										$name = $row_category['name'];
										echo"
											<option value='$name'>$name</option>			
										";
									}				
								?>
							</select>
							
											<hr>
											<input type="submit" value="Add Post">
										</form>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
		<?php include "footer.php"; ?>