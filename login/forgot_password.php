
<?php
require_once('header.php');
?>

<body>
	<h1>Forgot Password</h1>
	<div class="w3layouts">
		<div class="signin-agile">
			<h2>Enter Your Registered Email ID</h2>
			<form action="codes/forgotpassword_exe.php" method="post">
				<input type="text" name="username" class="name" placeholder="Email id" required="">
				
				
				<div class="clear"></div>
				<input type="submit" value="Next">
               <a href="../index.php">home</a>
                 <br><br>
             <a href="login.php">back</a>
			</form>
		</div>
		<div class="register-right">
			<img src="images/1.png" alt="images">
		</div>
		<div class="clear"></div>
	</div>
	<?php
require_once('footer.php');
?>