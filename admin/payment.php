<?php
require_once('../connectionclass.php');
require_once('header.php');
$obj=new connectionclass();
$id=$_REQUEST['id'];

$qry1="select * from request_items where req_id='$id'";
$result=$obj->GetTable($qry1);


$qry2="select * from selling_request where request_id='$id'";
$res=$obj->GetSingleRow($qry2);
$email=$res['comp_email'];

$qry3="select * from customers where email='$email'";
$res1=$obj->GetSingleRow($qry3);
$c_id=$res1['cust_id'];

$qry="select * from Payment where cust_id='$c_id'";
$result2=$obj->GetSingleRow($qry);

$totalAmount=0;

    

foreach ($result as $r) 
												{
                                                    $totalAmount = $totalAmount + ($r["amount"] * $r['qty'] );
											}
                                            
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
									<li>Updated amount <span>«</span></li>
									<li>Payment</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															 <h3 class="w3_inner_tittle two">Payment </h3>
																	<div class="form-body">
																		<form action="codes/payment_exe.php" method="post"> 
																		
																			<div class="form-group"> 
																				<label for="exampleInputEmail1">Account Onwer</label> 
																				<input type="text" pattern="[a-zA-Z ]+" title="Characters only" class="form-control" id="exampleInputEmail1" placeholder="Enter name of account onwer" name="acc_onwer" value="<?php echo $result2['acc_name'];?>" readonly> </div> 
                                                                                <div class="form-group"> 
																				<label for="exampleInputEmail1">Account Number</label> 
																				<input type="text" title="Enter valid price" class="form-control" id="exampleInputEmail1" placeholder="Enter account number" name="acc_no" value="<?php echo $result2['acc_no'];?>" readonly> </div> 
                                                                                <div class="form-group"> 
																				<label for="exampleInputEmail1">ifsccode</label> 
																				<input type="text" title="Enter valid price" class="form-control" id="exampleInputEmail1" placeholder="Enter ifsccode" name="ifsccode" value="<?php echo $result2['ifsc'];?>" readonly> </div> 
																				<div class="form-group"> 
																				<label for="exampleInputEmail1">amount</label> 
																				<input type="text" title="Enter valid price" class="form-control" id="exampleInputEmail1"  name="amount" value="<?php echo $totalAmount; ?>" readonly> </div>   
																				<input type="hidden" name="id" value="<?php echo $id; ?>">
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
