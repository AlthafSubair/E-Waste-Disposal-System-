<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
require_once('header.php');
?>

<body>
	<h1>RESET PASSWORD</h1>
	<div class="w3layouts">
		<div class="signin-agile">
			<h2>Reset Password</h2>
			<form action="codes/resetpassword_exe.php" method="post"> 
				<input type="password" name="pass"placeholder="new password" required="">
				
				<input type="password" name="cpass" class="password" placeholder=" confirm Password" required="">
				
					
						<input type="submit" name="submit" value="SUBMIT">
					
				
				
				<div class="clear"></div>
				
				<a href="../index.php">home</a><br>
				<a href="login.php">login</a>
			</form>
		</div>
		<div class="register-right">
			<img src="images/1.png" alt="images">
		</div>
		<div class="clear"></div>
	
	
</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2019 E waste . All Rights Reserved | Design by Team E Waste</a></p>
	</div>