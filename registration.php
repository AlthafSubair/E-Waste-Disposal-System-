
<?php
require_once('header1.php');
require_once('connectionclass.php');
$obj=new Connectionclass();
$qry1="select * from company_category";
$category=$obj->GetTable($qry1);
			?>

	<div class="navbar-inner">
		<div class="container">
			<?php
require_once('nav.php');
			?>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>R</span>egistration
				
			</h3>
			<!-- form -->
			<form action="codes/customer_exe.php" method="post">
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Company category</label>
						<select class="form-control" name="com_cat_id" required="">
							<option value="Select">Select</option>

							<?php
							foreach($category as $company)
							{

							?>

							
     
<option value="<?php echo $company["cmp_cat_id"]?>"> <?php echo $company["cmp_cat_name"]?></option>
	  <?php
	  }
	  ?>
    </select>
						</div>
						
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Contact number</label>
							<input type="text" class="form-control" name="contact" placeholder="" required="" pattern="[9876][0-9]{9}" maxlength="10" minlength="10">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Company name</label>
							<input type="text" class="form-control" name="companyname" pattern="[a-zA-Z ]+" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">State</label>
							<input type="text" class="form-control" name="state" placeholder="" required="" pattern="[a-zA-Z ]+" title="Characters Only">
						</div>
						
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Select District</label>


							<select class="form-control" name="district" required="">
							<option value="">--Select--</option>
							<option value="Thiruvananthapuram">Thiruvananthapuram</option>
							<option value="Kollam">Kollam</option>
							<option value="Pathanamthitta">Pathanamthitta</option>
							<option value="Alappuzha">Alappuzha</option>

							<option value="Kottayam">Kottayam</option>
							<option value="Idukki">Idukki</option>
							<option value="Ernakulam">Ernakulam</option>
							<option value="Thrissur">Thrissur</option>
							<option value="Palakkad">Palakkad</option>
							<option value="Malappuram">Malappuram</option>
							<option value="Kozhikkode">Kozhikkode</option>
							<option value="Kannur">Kannur</option>
							<option value="Kasargode">Kasargode</option>
						
							</select>
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
    <label class="col-form-label">Password</label>
    <div class="show-password">
        <input type="password" class="form-control" name="password" placeholder="" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" required="">
        <span class="toggle-password" onclick="togglePassword('password')"><i class="fa fa-eye" aria-hidden="true"></i></span>
    </div>
</div>

<div class="col-md-6 col-sm-6 contact-form1 form-group">
    <label class="col-form-label">City</label>
    <input type="text" class="form-control" name="city" placeholder="" required="" pattern="[a-zA-Z ]+" title="Characters Only">
</div>

<div class="col-md-6 col-sm-6 contact-form1 form-group">
    <label class="col-form-label">Confirm Password</label>
    <div class="show-password">
        <input type="password" class="form-control" name="confirmpassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" required="">
        <span class="toggle-password" onclick="togglePassword('confirmpassword')"><i class="fa fa-eye" aria-hidden="true"></i></span>
    </div>
</div>

<div class="col-md-6 col-sm-6 contact-form1 form-group">
    <label class="col-form-label">Pin Code</label>
    <input type="text" class="form-control" name="pin" placeholder="" maxlength="6" minlength="6" pattern="[0-9]{6}" required="">
</div>
<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">PHONE NUMBER</label>
							<input type="text" class="form-control" name="contact" placeholder="" required="" pattern="[9876][0-9]{9}" maxlength="10" minlength="10">
						</div>
        </div>

        <div class="contact-form">
          <input type="submit" value="Register">
        </div>
      </div>
    </form>
    <!-- //form -->
  </div>
</div>
<!-- //contact -->

<!-- middle section -->

<!-- footer -->
<style>
  .show-password {
    position: relative;
  }

  .show-password input[type="password"] {
    padding-right: 30px; /* Space for the show/hide toggle button */
  }

  .show-password .toggle-password {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
	
  }
  .fa-eye::before
{
  content: "\f06e";
  opacity: 0.5;
}
</style>
<script>
    function togglePassword(fieldId) {
        var passwordField = document.getElementsByName(fieldId)[0];
        var toggleButton = document.querySelector(".toggle-password");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleButton.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        } else {
            passwordField.type = "password";
            toggleButton.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        }
    }
</script>

<?php
require_once('footer.php');