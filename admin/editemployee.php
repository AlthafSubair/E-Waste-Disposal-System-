<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$qry1="select * from employee";
$result=$obj->GetTable($qry1);
//var_dump($result);
$emp_id=$_REQUEST['empid'];
$qry2="select * from employee inner join login on employee.emp_id='$emp_id' and employee.email=login.username";
$result2=$obj->GetSingleRow($qry2);
?>		
<!-- /inner_content-->
<div class="inner_content" style="background-image: url(images/home1.png);">
    <!-- /inner_content_w3_agile_info-->
	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				
				<li>Employee<span>«</span></li>
				<li>Edit</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->
		<!--/forms-->
	<div class="forms-main_agileits">
		<div class="graph-form agile_info_shadow">
			<h3 class="w3_inner_tittle two">Edit Employee Details</h3>
			<div class="form-body">

				<form action="codes/employee_edit_exe.php" method="post">
					<input type="hidden" name="empid" value="<?php echo $emp_id ?>">
					<input type="hidden" name="emptype" value="<?php echo $result2['usertype'] ?>">
					<div class="col-md-6">
					<div class="form-group"> 
						<label for="exampleInputPassword1">Employee Type</label>
						<input type="text" class="form-control" required="" value="<?php echo $result2['usertype'] ?>" id="exampleInputEmail1" name="employee_type" readonly> 
					</div>		



					<div class="form-group"> 
						<label for="exampleInputEmail1"> Name</label> 
						<input type="text" pattern="[a-zA-Z ]+" title="Characters only" class="form-control" required="" value="<?php echo $result2['emp_name'] ?>" id="exampleInputEmail1" placeholder=""name="emp_name"> 
					</div>
					<div class="form-group">

						<label for="exampleInputPassword1">Email</label> 
						<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email Format" class="form-control" id="exampleInputPassword1" readonly="" value="<?php echo $result2['email'] ?>" placeholder="" name="emp_email">
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleInputPassword1">Phone Number</label> 
						<input type="text" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" value="<?php echo $result2['phone'] ?>" maxlength="10" minlength="10" class="form-control" id="exampleInputPassword1" required="" placeholder="" name="emp_phn">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Gender</label>
						<select name="gender" required="" class="form-control" style="min-height: 35px; padding: 0px 12px;">

							<?php 
								$gen=$result2['gender'];
								if($gen=='Male')
								{
									?>
									<option value="Male">Male</option>
							<option value="Female">Female</option>
									<?php
								}
								else
								{
									?>
									<option value="Female">Female</option>
									<option value="Male">Male</option>					
									<?php
								}
							 ?>
							<!------------------------>							
						</select>
					</div>					
					
					<div class="form-group">
						<label for="exampleInputPassword1">District</label>
						<select name="district" required="" class="form-control" style="min-height: 35px; padding: 0px 12px;">
							<option value="<?php echo $result2['district'] ?>"><?php echo $result2['district'] ?></option>
							<option value="Trivandrum">Trivandrum</option>
			                <option value="Kollam">Kollam</option>
			                <option value="Pathanamthitta">Pathanamthitta</option>
			                <option value="Alappuzha">Alappuzha</option>
			                <option value="Kottayam">Kottayam</option>
			                <option value="Idukki">Idukki</option>
			                <option value="Ernakulam">Ernakulam</option>
			                <option value="Thrissur">Thrissur</option>
			                <option value="Palakkad">Palakkad</option>
			                <option value="Malappuram">Malappuram</option>
			                <option value="Kozhikode">Kozhikode</option>
			                <option value="Wayanad">Wayanad</option>
			                <option value="Kannur">Kannur</option>
			                <option value="Kasaragod">Kasaragod</option>				
						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">City</label> 
						<input type="text" value="<?php echo $result2['city'] ?>" required="" class="form-control" id="exampleInputPassword1" placeholder=""  pattern="[a-zA-Z ]+" title="Characters only" name="emp_city">
					</div>						 	
					
					</div>
						
					
					<input type="submit" name="submit" class="btn btn-info" value="UPDATE">
					<input type="reset" name="cancel" class="btn btn-danger" value="CANCEL" onclick="goBack()">
				</form> 
			</div>

		</div>
										
	</div>	
	<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
<script>
    function goBack() {
      window.history.back();
    }
  </script>
<?php
require_once('footer.php');
?>