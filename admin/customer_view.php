<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();


$qry1="select * from customers inner join login on customers.email=login.username where status = 'inactive'";
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
									
									<li>Customer <span>«</span></li>
									<li>Incative</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Customers Details - <?php



					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>company_name</th>
												<th>email</th>
												<th>phone</th>
												<th>location</th>
												<th>city</th>
												<th>pincode</th>

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
													?>
											  <tr>
												<td><?php echo $i;?></td>
												
												<td><?php echo $r["company_name"];?></td>
												<td><?php echo $r["email"];?></td>
												<td><?php echo $r["phone"];?></td>
												<td><?php echo $r["location"];?></td>
												<td><?php echo $r["city"];?></td>
												<td><?php echo $r["pincode"];?></td>
												
												<td><?php echo "Now ".$r["status"];?><br>
													



												</td>
											
													<td><a href="codes/active_exe.php?id=<?php echo $r['cust_id'];?>" class="btn btn-danger btn-block btn-xs" onClick="return confirm('Are You Sure to active?');"> ACTIVE </a></td>
												
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











