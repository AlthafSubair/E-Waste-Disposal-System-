<?php
require_once('../connectionclass.php');
require_once('header.php');
$obj=new connectionclass();
$username=$_SESSION['email'];
//var_dump($result);
?>

		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">

				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									<li>Category <span>«</span></li>
									<li>Add</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															 <h3 class="w3_inner_tittle two">Change password</h3>
																	<div class="form-body">
																		<form action="codes/change_pswd_exe.php" method="post"> 
																		
																			<div class="form-group"> 
                                                                                <input type="hidden" name="id" value="<?php echo $username; ?>">
																				<label for="exampleInputEmail1">New password</label> 
																				<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter your new password" name="npswd" required> </div> 
																				<div class="form-group" >
																				<div class="form-group"> 
																				<label for="exampleInputEmail1">confirom password</label> 
																				<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter your new password" name="cpswd" required> </div> 
																				<div class="form-group" >
																				</div>   
																				<button type="submit" class="btn btn-default">Submit</button> 
																			</form> 
																	</div>

															</div>
																<!--/forms-inner-->
													  				
																	<!--//forms-inner-->
																</div> 
                                                                <!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->



<?php
require_once('footer.php');
?>