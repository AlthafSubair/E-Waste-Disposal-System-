<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$type=$_REQUEST['emp'];

$qry1="select * from employee inner join login on employee.email=login.username and login.usertype='$type'";
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
									
									<li>Employee</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Employee Details - <?php
if($type=='frontofficer')
{
echo "Front Officers";
}
else
{
echo "Field Officers";
}

					  ?></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table">
											<thead>
											  <tr>
											  	<th>#</th>
												
												<th>Employee Name</th>
												<th>Email</th>
												<th>Phone Number</th>
												<th>Gender</th>
												<th>District</th>
												<th>City</th>

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
												
												<td><?php echo $r["emp_name"];?></td>
												<td><?php echo $r["email"];?></td>
												<td><?php echo $r["phone"];?></td>
												<td><?php echo $r["gender"];?></td>
												<td><?php echo $r["district"];?></td>
												<td><?php echo $r["city"];?></td>
												
												<td><?php echo "Now ".$r["status"];?><br>
													



												</td>
												<td><a href="editemployee.php?empid=<?php echo $r['emp_id'];?>" class="btn btn-info btn-block btn-xs"> EDIT </a>
													<a href="codes/employee_delete_exe.php?empid=<?php echo $r['emp_id'];?>" class="btn btn-danger btn-block btn-xs" onClick="return confirm('Are You Sure want to delete?');"> DELETE </a></td>
												
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