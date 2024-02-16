<?php
require_once('../connectionclass.php');
require_once('header.php');
$obj=new connectionclass();
// Generate a unique form token and store it in the session
$_SESSION['form_token'] = bin2hex(random_bytes(32));


$qry1="select * from company_category";
$result=$obj->GetTable($qry1);
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
															 <h3 class="w3_inner_tittle two">Company Category </h3>
																	<div class="form-body">
																		<form action="codes/company_category_exe.php" method="post" > 
																		
																			<div class="form-group"> 
																				<label for="exampleInputEmail1">Category</label> 
																				<input type="text" pattern="^[A-Z][a-zA-Z ]*$" title="Characters only" class="form-control" id="exampleInputEmail1" placeholder="Enter your category name" name="cat_name" required> </div> 
																				<div class="form-group" >
																				     <!-- Add a hidden field for the form token -->
       
																					 <input type="hidden" name="form_token" value="<?php echo $_SESSION['form_token']; ?>">

																				</div>   
																				<button type="submit" class="btn btn-default" >Submit</button> 
																		
																			</form> 
																	</div>

															</div>
																<!--/forms-inner-->
													  				
																	<!--//forms-inner-->
																</div> 
				

					
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
												<thead>
											  <tr>
											  	<th>#</th>
												<th>Company Category</th>
												<th>Edit</th>
												<th>Delete</th>
												
											  </tr>
											</thead>
											<?php
											if(count($result)>0)
{?>
											<tbody>
												<?php
												$i=0;
												foreach ($result as $r) 
												{
													$i++;
													?>



											  <tr>
											  	<td><?php echo $i;?></td>
												<td><?php echo $r["cmp_cat_name"];?></td>
												<td><a href="editcompany.php?cmpcatid=<?php echo $r['cmp_cat_id'];?>"> EDIT </a></td>
												<td><a href="codes/company_category_delete_exe.php?cmp_cat_id=<?php echo $r['cmp_cat_id'];?>" onClick="return confirm('Are You Sure want to delete?');"> DELETE </a></td>
												
											
												
											  </tr>
											  <?php
											}}else{

												?>
												<div class="row">
				
				<table>
				<div class="alert alert-success mt-3">
				  <strong>No Items Found</strong> 
														</div>
				
														</div>							<?php
				
														}
														
											?>
											 
											</tbody>
										  </table>
									
									 
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