<?php
require_once('header.php');
require_once('../ConnectionClass.php');

$obj=new connectionclass();
 
$username=$_SESSION['email'];

echo $qry1="select * from request_items inner join selling_request on selling_request.request_id=request_items.req_id where req_status='pending' and comp_email='$username'";
$result=$obj->GetTable($qry1);
$qry="select * from request_items inner join selling_request on selling_request.request_id=request_items.req_id where req_status='pending' and comp_email='$username'";
$result1=$obj->GetSingleRow($qry);
//var_dump($result);

?>


		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="home.php">Home</a><span>«</span></li>
									
									<li>Selling Request</li>
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

										<div>
										<?php
// Check if $result1 is not null and is an array
if (!is_null($result1) && is_array($result1)) {
    // Access the array elements safely
    $requestId = $result1['request_id'];
    echo "<a href='home.php?id=$requestId' class='btn btn-success'>ADD</a></div>";
} else {
    echo "<a href='home.php' class='btn btn-success'>ADD</a></div>";
}
?>
                                        
									
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>item title</th>
												<th>category</th>
												<th>discription</th>
												<th>quantity</th>
												
									
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



                                                   // var_dump($result);
													$i++;
													?>
											  <tr>
												<td><?php echo $i;?></td>
												
												<td><?php echo $r["item_title"];?></td>
												<td><?php echo $r["e_cat_id"];?></td>
												<td><?php echo $r["description"];?></td>
												<td><?php echo $r["qty"];?></td>
												
												<td><a href="editewaste.php?id=<?php echo $r['req_item_id'];?>" class="btn btn-info btn-block btn-xs"> EDIT </a>
													<a href="codes/request_item_delete_exe.php?id=<?php echo $r['req_item_id'];?>" class="btn btn-danger btn-block btn-xs" onClick="return confirm('Are You Sure want to delete?');"> DELETE </a></td>
												
												
												
												
													



												</td>
                                                
												
											 <?php
											}
										
											?>
											</tbody>
										  </table>
										 
								<br>
								<?php
								
								?>
								<div class="mt-3">
                                        <a href="codes/sellingrequest_snd_exe.php?id=<?php echo $result1['request_id'];?>" class="btn btn-warning" > SEND </a>
										<a href="codes/cancel_sellingrequest_exe.php?id=<?php echo $result1['request_id'];?>" class="btn btn-danger" onClick="return confirm('Are You Sure want to cancel?');"> Cancel</a>
										</div>
										
										</div>
									<?php
								}
						
								else{
										?>

										<br>

									
<div class="row">

<table>
<div class="alert alert-success mt-3">
  <strong>No Items Found</strong> 
										</div>

										</div>							<?php

										}
										?>

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