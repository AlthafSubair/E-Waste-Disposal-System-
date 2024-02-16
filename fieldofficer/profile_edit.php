<?php

require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$username=$_SESSION['email'];
 $qry="SELECT * FROM employee WHERE email='$username'";
$result=$obj->GetSingleRow($qry);




?>
<!-- /inner_content-->
<div class="inner_content" style="background-image: url(images/home1.png);">
    <!-- /inner_content_w3_agile_info-->
	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><<a href="index.php">Home</a><span>«</span></li>
				
				<li>Employee<span>«</span></li>
				<li>profile</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->
		<!--/forms-->
	<div class="forms-main_agileits">
		<div class="graph-form agile_info_shadow">
			<h3 class="w3_inner_tittle two">Edit Employee Details</h3>
			<div class="form-body">

				<form action="codes/profile_edit_exe.php" method="post">
					
					<div class="col-md-6">
						



					<div class="form-group"> 
						<label for="exampleInputEmail1"> Name</label> 
						<input type="text" pattern="[a-zA-Z ]+" title="Characters only" class="form-control"  value="<?php echo $result['emp_name'] ?>" id="exampleInputEmail1" placeholder=""name="emp_name"> 
					</div>
					<div class="form-group">

						<label for="exampleInputPassword1">Email</label> 
						<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email Format" class="form-control" id="exampleInputPassword1" readonly value="<?php echo $result['email'] ?>" placeholder="" name="emp_email">
					</div>
                    <div class="form-group">
						<label for="exampleInputPassword1">Phone Number</label> 
						<input type="text" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" value="<?php echo $result['phone'] ?>" maxlength="10" minlength="10" class="form-control" id="exampleInputPassword1" required placeholder="" name="emp_phn">
					</div>
					
				</div>
				<div class="col-md-6">
					

					<div class="form-group">
						<label for="exampleInputPassword1">Gender</label>
						<select name="gender" required class="form-control" style="min-height: 35px; padding: 0px 12px;">

							<?php 
								$gen=$result['gender'];
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
						<select name="district" required class="form-control" style="min-height: 35px; padding: 0px 12px;">
							<option value="<?php echo $result['district'] ?>"><?php echo $result['district'] ?></option>
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
					<input type="hidden" name="id" value="<?php echo $result['emp_id'];?>">
						<label for="exampleInputPassword1">City</label> 
						<input type="text" value="<?php echo $result['city'] ?>" required class="form-control" id="exampleInputPassword1" placeholder=""  pattern="[a-zA-Z ]+" title="Characters only" name="emp_city">
					</div>						 	
					
					</div>
						
					
					<input type="submit" name="submit" class="btn btn-info" value="UPDATE">
					<input type="reset" name="cancel" class="btn btn-danger" value="CANCEL" onclick="cancelto('index.php')">
				</form> 
			</div>

		</div>
										
	</div>	
	<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->

<?php
require_once('footer.php');
?>
<script>
	function cancelto(url){
		window.location.href = url;
	}
</script>