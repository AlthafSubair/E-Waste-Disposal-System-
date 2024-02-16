<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$email=$_SESSION['email'];
$qry="select * from employee where email='$email'";
$res=$obj->GetSingleRow($qry);
$uname=$res['emp_id'];

$qry1="select * from Selling_Request inner join customers on Selling_Request.comp_email=customers.email inner join schedule_employee on Selling_Request.request_id=schedule_employee.req_id  where req_status = 'completed' and emp_id='$uname'";
$result=$obj->GetTable($qry1);




?>


		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									
									<li>Ewaste Report</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Ewaste Report - <?php
//var_dump($result);


					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>REQUEST DATE</th>
                                                
												

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
													$formattedDate = (new DateTime($r["req_date"]))->format("d-m-Y");
													$i++;
													?>
											  <tr>
												<td><?php echo $i;?></td>
												<td><?php echo $r["company_name"];?></td>
												<td><?php echo $r["comp_email"];?></td>
												<td><?php echo $formattedDate;?></td>
												
                                               
												
													



												
                                                <td><a href="view_item_report.php?id=<?php echo $r['request_id'];?>" class="btn btn-danger btn-block btn-xs" > view request </a></td>
                                                
                                            
													
												
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








