<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$qry1="select * from company_category";
$result=$obj->GetTable($qry1);
//var_dump($result);
$cmpcatid=$_REQUEST['cmpcatid'];
$qry2="select * from company_category where cmp_cat_id='$cmpcatid'";
$result2=$obj->GetSingleRow($qry2);
//echo $result2['cmp_cat_name'];
//var_dump($result2);
?>

		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">

				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									<li>Company Category <span>«</span></li>
									<li>Edit</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															 <h3 class="w3_inner_tittle two">Company Category </h3>
																	<div class="form-body">
																		<form action="codes/company_category_edit_exe.php" method="post"  action="codes/edit_company_exe">
																		
																			<div class="form-group"> 
																				<label for="exampleInputEmail1">Category</label> 
																				<input type="text" class="form-control" id="exampleInputEmail1" pattern="^[A-Z][a-zA-Z ]*$" title="Characters only" placeholder="Enter your category name" name="cat_name" value="<?php echo $result2['cmp_cat_name']; ?>" required> 
																			 </div> 
																				<div class="form-group">
																				
																				</div> 
																				<input type="hidden" name="cmpcatid" value="<?php echo $cmpcatid ?>">   
																				<button type="submit" class="btn btn-default">Submit</button> 
																			</form> 
																	</div>

															</div>
																<!--/forms-inner-->
													  				
																	<!--//forms-inner-->
																</div> 
				

					
									
									
									 
								</div>
								

						</div>
							<!-- //tables -->
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->



<?php
require_once('footer.php');
?>