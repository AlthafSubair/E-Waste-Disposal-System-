
<?php
require_once('../connectionclass.php');
require_once('header.php');
$obj=new connectionclass();
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
									<li>Reports</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															 <h3 class="w3_inner_tittle two">Reports </h3>
																	<div class="form-body">
																		<form action="" method="post"> 
																		
																			<div class="form-group"> 
																				<label for="exampleInputEmail1"> Start Date </label> 
																				<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Start date" name="sat_date" required> </div> 
                                                                                <div class="form-group"> 
																				<label for="exampleInputEmail1">End date</label> 
																				<input type="date"  class="form-control" id="exampleInputEmail1" placeholder="Enter end date" name="end_date" required> </div> 
																				<div class="form-group" >
																				
																				</div>   
																				<button type="submit" class="btn btn-default">Submit</button> 
																			</form> 
																	</div>

															</div>
																<!--/forms-inner-->
													  				
																	<!--//forms-inner-->
																</div> 
																<?php
																if ($_SERVER["REQUEST_METHOD"] == "POST") {
																$start_date=$_POST['sat_date'];
																$end_date=$_POST['end_date'];
																
																$qry1="select * from selling_request inner join customers on selling_request.comp_email=customers.email where req_status ='Completed' and  req_date BETWEEN '$start_date' AND '$end_date'";
																$result=$obj->GetTable($qry1);
																	
																?>
				

					<!-- tables -->
									
					<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>Name</th>
												<th>email</th>
												<th>request date</th>
												<th>action</th>

												
												
												
											  </tr>
											</thead>
											<tbody>

												<?php
												if(count($result)>0)
												{
												$i=0;
												
												foreach ($result as $r) 
												{
													$i++;
													$formattedDate = (new DateTime($r["req_date"]))->format("d-m-Y");
													?>
											  <tr>
												<td><?php echo $i;?></td>
												<td><?php echo $r["company_name"];?></td>
												<td><?php echo $r["comp_email"];?></td>
												<td><?php echo $formattedDate;?></td>
												<td><a href="report_date_item_view.php?id=<?php echo $r['request_id'];?>" class="btn btn-danger btn-block btn-xs" > view items </a></td>
                                               
												
													



												
                                               
                                                
                                            
													
												
											  </tr>
											 <?php
											}}else{		?>
												<div class="row">
				
				<table>
				<div class="alert alert-success mt-3">
				  <strong>No Items Found</strong> 
														</div>
				
														</div>							<?php
				
														}
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













