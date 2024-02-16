<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();


$qry1="select * from selling_request inner join customers on selling_request.comp_email=customers.email where req_status = 'send'";
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
									
									<li>Selling Request</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Selling Request - <?php



					  ?></h2>
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
											<?php

if(count($result)>0)
{
									?>
											<tbody>

												<?php
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
												
                                               
												
													



												
                                                <td><a href="admin_view_Request_items.php?id=<?php echo $r['request_id'];?>" class="btn btn-danger btn-block btn-xs" > view request </a></td>
                                                
                                            
													
												
											  </tr>
											 <?php
											}
											
											?>
											</tbody>
										  </table>
									
									  
								</div>
								

						</div>
							<!-- //tables -->
							<?php }
							else{
								
								
								?>
								<div class="row">

<table>
<div class="alert alert-success mt-3">
  <strong>No Items Found</strong> 
										</div>

										</div>							<?php

										}
										?>
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->

		<?php
require_once('footer.php');
?>












