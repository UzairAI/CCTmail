<?php

session_start();
if(isset($_SESSION['username'])){
	header('location:./trial.php');
}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="mail.css">
</head>
<body>
	<div class="header">
	<a href = 'mail.php'>
	<h1 class="heading1">CCTmail</h1></a>
	</div>
	<div class="background">
		<div class="form-box">
			<div class="button-box">
				<div id="slide"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form id="login" class="input-group" action="validation.php" method="post">
				<br><br><br>
				<input type="text" class="input-field" name="email" placeholder="Email ID" required>
				<input type="password" class="input-field" name="password1" placeholder="Password" required><br><br>
				<a href="reset.php" id="remember">Forgot Password?</a><br><br><br>
				<button type="submit" class="submit-btn">Log In</button>
			</form>
			<form id="register" class="input-group" action="registration.php" method="post">
				<input type="text" class="input-field" name="user_name" placeholder="Name" required>
				<input type="text" class="input-field" name="user" placeholder="Create Email ID" required><span id="cct">@cctmail.com</span>
				<input type="password" class="input-field" id="password1" name="password1" placeholder="Create password" onkeyup='check();' required>
				<input type="password" class="input-field" id="password2" name="password2" placeholder="Re-enter password" onkeyup='check();' required>
				<input type="checkbox" class="check-box"><span id="remember">I agree to terms & conditions.</span>
				<button type="submit" class="submit-btn" id="submit" name="submit">Create Account</button>
			</form>
		</div>
	</div>

<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("slide");

	function register(){
		x.style.left = "-100%";
		y.style.left = "4%";
		z.style.left = "110px";
	}
	function login(){
		x.style.left = "4%";
		y.style.left = "100%";
		z.style.left = "0px";
	}
	function check() {
    if (document.getElementById('password1').value ==
            document.getElementById('password2').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}
</script>
</body>
</html>