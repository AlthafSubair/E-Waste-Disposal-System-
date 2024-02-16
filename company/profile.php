<?php

require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$username=$_SESSION['email'];
 $qry="SELECT * FROM customers WHERE email='$username'";
$result=$obj->GetSingleRow($qry);




?>
<!-- /inner_content-->
<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="home.php">Home</a><span>«</span></li>
									<li>Customers <span>«</span></li>
									<li>profile</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					

							<!--/forms-->
							<div class="forms-main_agileits">
								<div class="graph-form agile_info_shadow">
									<h3 class="w3_inner_tittle two">Customer profile </h3>
									<div class="form-body">
										<form  method="post">
											<div class="col-md-6">
											<div class="form-group"> 
												<label for="exampleInputPassword1">Company Name</label>
                                                <input type="text" pattern="[a-zA-Z ]+" title="Characters only" class="form-control" readonly id="exampleInputEmail1" placeholder=""name="emp_name" value="<?php echo $result['company_name'] ?>"> 
		 

											</div>				

											
											<div class="form-group">

												<label for="exampleInputPassword1">Email</label> 
												<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email Format" class="form-control" readonly id="exampleInputPassword1" readonly  placeholder="" name="emp_email"value="<?php echo $result['email'] ?>" >
												
											</div>
                                            <div class="form-group"> 
												<label for="exampleInputEmail1"> Phone number</label> 
                                                

												<input type="text" pattern="[9876][0-9]{9}" title="Characters only" class="form-control" readonly   id="exampleInputEmail1" placeholder=""name="emp_name"  value="<?php echo $result['phone'] ?>"> 
											</div>
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPassword1">location</label> 
												<input type="text" pattern="[a-zA-Z ]+" title="Enter a valid mobile number" maxlength="10" minlength="10" class="form-control" id="exampleInputPassword1" readonly  placeholder="" name="emp_phn"  value="<?php echo $result['location'] ?>"> 
											</div>

											
                                           <div class="form-group">
												<label for="exampleInputPassword1">city</label>
												<input type="text" pattern="[a-zA-Z ]+" title="Enter a valid mobile number" maxlength="10" minlength="10" class="form-control" id="exampleInputPassword1" readonly  placeholder="" name="emp_phn"  value="<?php echo $result['city'] ?>"> 
											</div>
											

											<div class="form-group">
												<label for="exampleInputPassword1">pincode</label> 
                                                <input type="text" class="form-control" readonly  name="pin" placeholder="" maxlength="6" minlength="6" pattern="[0-9]{6}"  value="<?php echo $result['pincode'] ?>">
											</div>
											
																	 	
											
											</div>
												<!--<label for="exampleInputPassword1">Password</label> 
												<input type="password" class="form-control" id="exampleInputPassword1" required="" placeholder=""name="emp_pass"> 
												
												<label for="exampleInputPassword1">Confirm Password</label> 
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder=""name="cng_pass"> -->
											   
											
											<td><a href="profile_edit.php" class="btn btn-danger" > EDIT </a></td>
											
										</form> 
									</div>

								</div>
																<!--/forms-inner-->
													  				
																	<!--//forms-inner-->
							</div> 
														<!--//forms-->											   
					
							<!-- /social_media-->
						 
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<?php
require_once('footer.php');
?>