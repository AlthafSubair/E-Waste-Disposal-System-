<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
echo $id=$_REQUEST['id'];

$qry1="select * from selling_request inner join request_items on selling_request.request_id=request_items.req_id where request_id='$id'";
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
												
												<th>Rquset item</th>
												<th>qty</th>
												<th>Updated amount</th>
												

												
												
												
											  </tr>
											</thead>
											<tbody>

												<?php
												$i=0;
                                                $totalAmount = 0;
												foreach ($result as $r) 
												{
													$i++;
													?>
											  <tr>
												<td><?php echo $i;?></td>
												<td><?php echo $r["item_title"];?></td>
												<td><?php echo $r["qty"];?></td>
												<td><?php echo $r["amount"];?></td>
												
                                               
												
													



												
                                                
                                                
                                            
													
											
											 <?php
                                             $totalAmount = $totalAmount + ($r["amount"] * $r['qty'] );
											}
                                            
											?>
                                            <td>
                                                <tr>
                                                    <td></td><td></td><td></td><td><a href="payment.php?id=<?php echo $id; ?>" class="btn btn-info btn-block btn-xs"> payment</a></td>
                                                </tr>
											</tbody>
										  </table>
									
									  
								</div>
								

						</div>
							<!-- //tables -->
                            <h3>Total Amount: <?php echo $totalAmount; ?></h3>
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->














