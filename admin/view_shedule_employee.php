<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();


$qry1="select * from schedule_employee inner join employee on schedule_employee.emp_id=employee.emp_id inner join selling_request on schedule_employee.req_id=selling_request.request_id inner join customers on selling_request.comp_email=customers.email  where sch_status = 'shedule'";
$result=$obj->GetTable($qry1);
$qry2="select * from schedule_employee inner join employee on schedule_employee.emp_id=employee.emp_id where sch_status = 'shedule'";
$res=$obj->GetTable($qry2);

?>


		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									
									<li>Scheduled Employee Details</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle"> scheduled employee details - <?php

//var_dump($result);

					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>Employee Name</th>
												
												<th>Company name</th>
												<th>Schedule date</th>
												<th>collected date</th>
												

												<th>Status</th>
												<th>Actions</th>
												
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
													$formattedDate = (new DateTime($r["collected_date"]))->format("d-m-Y");
													$formattedDate1 = (new DateTime($r["sch_date"]))->format("d-m-Y");
													?>
											  <tr>
												<td><?php echo $i;?></td>
												
												<td><?php echo $r["emp_name"];?></td>
												
											
											
												
												
												
										
												

											

												<td><?php echo $r["company_name"];?></td>
												<td><?php echo $formattedDate1;?></td>
												<td><?php echo $formattedDate;?></td>
												<td><?php echo $r["sch_status"];?></td>
												
												
												
													



												</td>
											
													<td><a href="shedule_employee_edit.php?id=<?php echo $r['sch_emp_id'];?>" class="btn btn-danger btn-block btn-xs" onClick="return confirm('Are You Sure to edit?');"> Edit </a></td>
												
											  </tr>
											 <?php
											}if(count($result)>0)
												{
												$i=0;
											}}else{	?>
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









