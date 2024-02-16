<?php
require_once('../connectionclass.php');
require_once('header.php');
$obj=new connectionclass();
        $qry1="select * from complaint inner join customers on complaint.mail=customers.email";
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
									
									<li>Complaint</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle"> Complaint Details <?php



					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												<th>Company</th>
                                                <th>Email</th>
												<th>Complaint Type</th>
												<th>Complaint</th>
												<th>description</th>
												<th>Date</th>

												
												
												
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
													$formattedDate = (new DateTime($r["date"]))->format("d-m-Y");
													?>
											  <tr>
												<td><?php echo $i;?></td>
                                                <td><?php echo $r["company_name"];?></td>
												<td><?php echo $r["mail"];?></td>
												<td><?php echo $r["type"];?></td>
                                                <td><?php echo $r["comp"];?></td>
                                                <td><?php echo $r["description"];?></td>
												<td><?php echo $formattedDate;?></td>
												
                                               
												
													



												
                                               
                                                
                                            
													
												
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