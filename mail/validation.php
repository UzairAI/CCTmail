<?php

session_start();

include "config.php";

$email = $_POST['email'];
$pass = $_POST['password1'];

$s = " select * from userdata where ( email = '$email' || user = '$email' ) && ( password = '$pass' )";

$result = mysqli_query($con, $s);
$row = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $email;
	$_SESSION['name'] = $row['name'];
	$_SESSION['user'] = $row['user'];
	header('location:mail.php');
}else{
	?><html>
	<link rel="stylesheet" href="style.css">
	<script>
            alert("Credentials do not match. Try again!");
	    window.location.href = "login.php";
        </script>
	</html><?php
	// header('location:login.php');
}
?>