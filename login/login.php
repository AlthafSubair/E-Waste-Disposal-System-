<?php
require_once('header.php');

// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("location: ../index.php"); // Redirect to the home page
    exit();
}

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $status = "active";
    $qry1 = "select usertype from login where username='$uname' and password='$pass' and status='$status'";
    $exe = $obj->GetSingleData($qry1);

    $_SESSION['email'] = $uname;

    if ($exe == 'admin') {
        header("location:../../admin/index.php");
        $_SESSION['logged_in'] = true;
        exit();
    } elseif ($exe == 'customer') {
        header("location:../../company/home.php");
        $_SESSION['logged_in'] = true;
        exit();
    } elseif ($exe == 'fieldofficer') {
        header("location:../../fieldofficer/index.php");
        $_SESSION['logged_in'] = true;
        exit();
    } else {
        echo $obj->alert("Invalid Username or Password", "../login.php");
    }
}
?>

<body>
    <h1> Login Form</h1>
    <div class="w3layouts">
        <div class="signin-agile">
            <h2>Log In</h2>
            <form action="codes/login_exe.php" method="post">
                <input type="text" name="username" placeholder="Username" required="">

                <div class="password-container">
                    <input type="password" name="password" class="password" id="password" placeholder="Password" required="">
                    <span class="show-password" onclick="togglePassword()">
                        Show
                    </span>
                </div>

                <input type="submit" name="submit" value="SUBMIT">

                <div class="clear"></div>

                <a href="../index.php">home</a><br>
                <a href="forgot_password.php">forgot password</a>
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

    <script>
        function togglePassword() {
            var passwordField = document.getElementById('password');
            var toggleButton = document.querySelector('.show-password');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleButton.textContent = 'Hide';
            } else {
                passwordField.type = "password";
                toggleButton.textContent = 'Show';
            }
        }
    </script>
    <style>
        .password-container {
            position: relative;
        }

        .show-password {
            position: absolute;
            top: 35%;
            right: 10px; /* Adjust the right position as needed */
            transform: translateY(-50%);
            cursor: pointer;
            opacity: 0.5;
            color: #333; /* Adjust the color as needed */
        }
    </style>
</body>
