<?php include "header.php"; ?>
<?php include "save_category.php";?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Categories</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Category Details
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Category saved Successfully!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
											
												<label>Category Name : </label>
												<input type="text" name="category_name" class="form-control1 control3" placeholder="Category Title" required>
												<label>Category Detail : </label>
												<textarea rows="6" cols="20" id="body" name="category_detail" class="form-control1 control2"required></textarea>
												 <script>
                CKEDITOR.replace( 'body' );
            </script>
			
							<label>Add Cateogry Cover Image</label>
							<input type="file" name="category_pic" class="form-control1 control3" required>

						
							
											<hr>
											<input type="submit" value="Add Category">
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