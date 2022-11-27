<?php 
session_start();

include "config.php";
if(isset($_SESSION['user'])){
	$name = $_POST['name'];
	$user = $_SESSION['user'];
	$pass = $_POST['pass'];
	mysqli_query($con,"UPDATE userdata SET name = '$name', password = '$pass' WHERE user = '$user'");
	?>
	<html>
	<script>
            alert("Details Updated Successfully!");
	    window.location.href = "settings.php";
        </script>
	</html><?php
	//header('location:settings.php');
}
else{
	$email = $_POST['email'];
	$pass = $_POST['password2'];
	$reset= " update userdata set password = '$pass' where email = '$email'";
	mysqli_query($con, $reset);
	?><html>
	<script>
            alert("Password reset Successful! \n" +
                "Please Login");
	    window.location.href = "login.php";
        </script>
</html><?php
//header('location:login.php');
}

?>