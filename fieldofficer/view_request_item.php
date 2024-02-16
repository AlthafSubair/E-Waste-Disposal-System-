<?php
require_once('header.php');
require_once('../ConnectionClass.php');

$obj=new connectionclass();
 $id=$_GET['id'];

echo $qry1="select * from request_items inner join ewaste_category on request_items.e_cat_id=ewaste_category.catid where req_id='$id'  ";
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
									
									<li>Selling Request<span>«</span></li>
                                    <li>Request item</li>
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
                                                $j=0;
                                               
                                                $totalAmount = 0;
												foreach ($result as $r) 
												{
$total=count($result);
                                                   // var_dump($result);
													$i++;
                                                    $j++;
                                                    $min=$r["price"];
                                                    $expr=$r['amount'];
													

													?>
											  <tr>
												<td><?php echo $i;?></td>
												
												<td><?php echo $r["item_title"];?></td>
												<td><?php echo $r["catname"];?><br><?php echo $r["price"];?></td>
												<td><?php echo $r["description"];?></td>
												<td><?php echo $r["qty"];?></td>
                                                <?php 
                                                if ($r["amount"] == 0){
                                                ?>
												<td><!--/forms-->
                                                <div class="forms-main_agileits">
														
                                                        <div >
                                                         
                                                                <div class="form-body">
                                                                    <form action="codes/update_amount_exe.php" method="post" id="Obtn"> 
                                                                    
                                                                        <div class="form-group"> 
                                                                            <input type="hidden" name="id_<?php echo $j;?>" value="<?php echo $r['req_item_id'];?>">
                                                                            <input type="hidden" name="count" value="<?php echo $total;?>">
                                                                           <input type="hidden" name="req" value="<?php echo $id;?>">
                                                                        <input type="number" title="Enter valid price"  class="form-control" id="exampleInputEmail1" placeholder="update price"  name="amount_<?php echo $j?>" required max="<?php echo $min; ?>"> </div> 
                                                                        
												</td>   
                                                            </div> 
                                                            
                                                            
												
												<?php
                                                }
                                            
                                                else{
                                                    $totalAmount = $totalAmount + ($r["amount"] * $r['qty']);
                                                    ?>
                                                    <td><?php echo $r["amount"];?></td>
                                                    
<?php
                                                }
                                            }

                                           
                                                ?>
												
													
 



												
										</tr>

                                             <td></td> <td></td> <td></td> <td></td> <td></td>   
											 <?php 
                                                if ($totalAmount == 0){
                                                ?>
                                               <td><input type="submit" value="Update Amount" class="btn btn-info"></td>
											<?php
												}
												else{
												?>
												<td> <a href="sellingrequest.php"  class="btn btn-info">Go Back</a></td>
												</tr>
												<?php
												}
											?>
											</tbody>
                                            
										  </table>
                                          <br>
                                          
                                          <h3>Total Amount: <?php echo $totalAmount; ?></h3>
										  
										  </form>
                                                                       
																	   </div>
																		
															   </div>
																   <!--/forms-inner-->
																		 
																	   <!--//forms-inner-->
									  
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
?> <script>
function goBackToPage() {
	// Set the URL of the page you want to go back to
	var targetPage = "index.php";

	// Navigate to the target page
	window.location.href = targetPage;
}
</script>