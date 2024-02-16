
<?php
require_once('header.php');
?>
<body>
	<h1>Code Varification</h1>
	<div class="w3layouts">
		<div class="signin-agile">
			<h2>Enter 6 Digit code</h2>
			<form action="codes/entercode_exe.php" method="post">
				<input type="text" name="code" class="name" placeholder="OTP Number" required="">

				
				<div class="clear"></div>
				<input type="submit" value="Next">
			</form>
			<a href ="index.php" style="color: white;">Home</a><br>
			<a href="login.php" style="color: white;">Back to login</a>
		</div>
		<div class="register-right">
			<img src="images/1.png" alt="images">
		</div>
		<div class="clear"></div>
	</div>
	<?php
require_once('footer.php');
?>