<?php
require_once('header.php');
require_once('../ConnectionClass.php');

$obj=new connectionclass();
 $id=$_GET['id'];

 echo $qry1="select * from request_items inner join ewaste_category on request_items.e_cat_id=ewaste_category.catid where req_id='$id'";
$result=$obj->GetTable($qry1);
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
									
									<li>Selling Request <span>«</span></li><li>Shedule Employee</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Requset items - <?php


					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
                                        
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>item title</th>
												<th>category</th>
												<th>discription</th>
												<th>quantity</th>
												<th>amount</th>
												

												
												
											  </tr>
											</thead>
											<tbody>

												<?php
												$i=0;
												foreach ($result as $r) 
												{

                                                   // var_dump($result);
													$i++;
													?>
											  <tr>
												<td><?php echo $i;?></td>
												
												<td><?php echo $r["item_title"];?></td>
												<td><?php echo $r["catname"];?></td>
												<td><?php echo $r["description"];?></td>
												<td><?php echo $r["qty"];?></td>
												<td><?php echo $r["amount"];?></td>
												
												
												
													



												</td>
                                                
												
											 <?php
												}
											?>
											</tbody>
                                            
										  </table>
										  <br>

                                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="shedule_employee.php?id=<?php echo $id;?>" class="btn btn-danger" > shedule Employee </a>
									
									  
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