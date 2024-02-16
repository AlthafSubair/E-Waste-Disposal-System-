<?php
require_once('header.php');
?>
		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									<li>Employee <span>«</span></li>
									<li>Add</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					

							<!--/forms-->
							<div class="forms-main_agileits">
								<div class="graph-form agile_info_shadow">
									<h3 class="w3_inner_tittle two">Add New Employee </h3>
									<div class="form-body" id="basic-form">
										<form action="codes/employee_exe.php" method="post">
											<div class="col-md-6">
											<div class="form-group"> 
												<label for="exampleInputPassword1">Employee Type</label>
																				 
												<select name="employee_type" required="" class="form-control" style="min-height: 35px; padding: 0px 12px;">
													<option value="">--Select--</option>
													
													<option value="fieldofficer">Field Officer</option>
												</select>
											</div>				

											<div class="form-group"> 
												<label for="exampleInputEmail1"> Name</label> 
												<input type="text" pattern="[a-zA-Z ]+" title="Characters only" class="form-control" required="" id="exampleInputEmail1" placeholder=""name="emp_name"> 
											</div>
											<div class="form-group">

												<label for="exampleInputPassword1">Email</label> 
												<input type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Invalid Email Format" class="form-control" id="exampleInputPassword1" required="" placeholder="" name="emp_email">
											</div>
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPassword1">Phone Number</label> 
												<input type="text" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" class="form-control" id="exampleInputPassword1" required="" placeholder="" name="emp_phn">
											</div>

											
                                           <div class="form-group">
												<label for="exampleInputPassword1">Gender</label>
												<select name="gender" required="" class="form-control" style="min-height: 35px; padding: 0px 12px;">
													<option value="">--Select--</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">District</label>
												<select name="district" required="" class="form-control" style="min-height: 35px; padding: 0px 12px;">
												
									<option value="">--Select--</option>
										<option value="Trivandrum">Trivandrum</option>
                                        <option value="Kollam">Kollam</option>
                                        <option value="Pathanamthitta">Pathanamthitta</option>
                                        <option value="Alappuzha">Alappuzha</option>
                                        <option value="Kottayam">Kottayam</option>
                                        <option value="Idukki">Idukki</option>
                                        <option value="Ernakulam">Ernakulam</option>
                                        <option value="Thrissur">Thrissur</option>
                                        <option value="Palakkad">Palakkad</option>
                                        <option value="Malappuram">Malappuram</option>
                                        <option value="Kozhikode">Kozhikode</option>
                                        <option value="Wayanad">Wayanad</option>
                                        <option value="Kannur">Kannur</option>
                                        <option value="Kasaragod">Kasaragod</option>
												</select>
											</div>

											<div class="form-group">
												<label for="exampleInputPassword1">City</label> 
												<input type="text"  pattern="[a-zA-Z ]+" title="Characters only" required="" class="form-control" id="exampleInputPassword1" placeholder="" name="emp_city">
											</div>
											
																	 	
											
											</div>
												<!--<label for="exampleInputPassword1">Password</label> 
												<input type="password" class="form-control" id="exampleInputPassword1" required="" placeholder=""name="emp_pass"> 
												
												<label for="exampleInputPassword1">Confirm Password</label> 
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder=""name="cng_pass"> -->
											   
											
											<input type="submit" name="submit" class="btn btn-info" value="SUBMIT">
											<input type="reset" name="cancel" class="btn btn-danger" value="CANCEL">
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

 <script src="../jquery-3.6.1.js"></script>
 <script src="../jquery.validate.min.js"></script>
 <script>
	 $("#basic-form").validate();
 </script>