<?php
$username=$_SESSION['email'];
        $qry1="select * from selling_request inner join customers on selling_request.comp_email=customers.email where req_status ='send' and comp_email='$username'";
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
												<td><a href="report_item_view.php?id=<?php echo $r['request_id'];?>" class="btn btn-danger btn-block btn-xs" > view items </a></td>
                                               
												
													



												
                                               
                                                
                                            
													
												
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



