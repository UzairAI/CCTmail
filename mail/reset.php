<html><head>
<title>Reset Password</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="mail.css">
</head>
<body>
	<div class="header">
	<a href="mail.php">
	<h1 class="heading1">CCTmail</h1></a>
	<div class="settings" onclick="window.location.href = 'login.php'">Login</div></div>
	<div class="background">
	<div class="form-box">
		<h2 class="reset" align="center">Reset Password</h2>
		<form id="login" class="input-group" action="update.php" method="post">
			<input type="email" class="input-field" name="email" placeholder="Email ID" required>
			<input type="password" class="input-field" id="password1" name="password1" placeholder="New password" onkeyup='check();' required>
			<input type="password" class="input-field" id="password2" name="password2" placeholder="Re-enter password" onkeyup='check();' required>
			<br><br><br><br>
			<button type="submit" class="submit-btn" id="submit" name="submit">Save & Login</button>
		</form>
	</div>
	</div>
<script>
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