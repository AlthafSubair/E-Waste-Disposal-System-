<?php
require_once('header.php');
require_once('../ConnectionClass.php');
$obj=new connectionclass();
$username=$_SESSION['email'];
$status="shedule";
$id="select emp_id from employee where email='$username'";
$emp_id=$obj->GetSingleData($id);
$qry="select * from schedule_employee  inner join selling_request on  schedule_employee.req_id=selling_request.request_id inner join customers on selling_request.comp_email=customers.email where emp_id='$emp_id' and sch_status='$status'";
$result=$obj->GetTable($qry);



?>
<!-- /inner_content-->
<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									
									<li>shedule company details</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">  shedule company details - <?php



					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>Request date</th>
												<th>collected date</th>
												<th>Company name</th>
												<th>contact info</th>

												<th>Actions</th>
												
											  </tr>
											</thead>
											<tbody>
												<tr>
												<?php

if(count($result)>0)
												{
												
																			
				 

												$i=0;
												foreach ($result as $r)
												$formattedDate = (new DateTime($r["collected_date"]))->format("d-m-Y"); 
												$formattedDate1 = (new DateTime($r["req_date"]))->format("d-m-Y");
												{
													$i++;
													?>
											  <tr>
												<td><?php echo $i;?></td>
												
												<td><?php echo $formattedDate1;?></td>
												<td><?php echo $formattedDate;?></td>
												<td><?php echo $r["company_name"];?></td>
												<td><?php echo $r["comp_email"];?><br><?php echo $r["phone"];?>
												</td>
												
												
												
												<td><a href="view_request_item.php?id=<?php echo $r['req_id'];?>" class="btn btn-info btn-block btn-xs"> view </a></td>

												



												
												</tr>
													
											<?php
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
