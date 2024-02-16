<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();


$qry1="select * from schedule_employee inner join employee on schedule_employee.emp_id=employee.emp_id where sch_status = 'update'";
$result=$obj->GetTable($qry1);
$qry1="select * from schedule_employee inner join selling_request on schedule_employee.req_id=selling_request.request_id inner join customers on selling_request.comp_email=customers.email where sch_status = 'update'";
$resul=$obj->GetTable($qry1);
//  var_dump($resul);
// die;
?>
<!-- /inner_content-->
<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									
									<li>Payment </li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">update Request Items - <?php



					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>Employee Name</th>
                                                <th>Company Name</th>
												<th>shedule date</th>
                                                <th>Collected date</th>
                                                
												

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
													
													$formattedDate1 = (new DateTime($r["sch_date"]))->format("d-m-Y");
													$formattedDate2 = (new DateTime($r["collected_date"]))->format("d-m-Y");
													?>
											  <tr>
												<td><?php echo $i;?></td>
												<td><?php echo $r["emp_name"];?></td>
												<?php
												foreach ($resul as $res) 
												{
													?>
                                                <td><?php echo $res["company_name"];?></td>
                                               <?php } ?> 
                                               
                                                <td><?php echo $formattedDate1;?></td>
                                                <td><?php echo $formattedDate2;?></td>
                                                <td><a href="view_update_amount_req_item.php?id=<?php echo $r['req_id'];?>" class="btn btn-danger btn-block btn-xs" > view updated request items </a></td> 
                                               
												
												
                                               
												
													



												
                                                
                                                
                                            
													
												
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
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="#" onclick="goBackToPage()" class="btn btn-info">Go Back</a>
							
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
		<?php
require_once('footer.php');
?>
<script>
		function goBackToPage() {
	// Set the URL of the page you want to go back to
	var targetPage = "index.php";

	// Navigate to the target page
	window.location.href = targetPage;
}


		function preventbackbtn(){window.history.forward()};
		setTimeout("preventbackbtn()",0);
		window.onunload=function(){null};
	
</script>












