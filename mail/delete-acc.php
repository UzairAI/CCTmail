<?php 
session_start();
include "config.php";
if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	mysqli_query($con,"DELETE FROM userdata WHERE user = '$user'");
	mysqli_query($con,"DROP TABLE $user");
	?>
	<html>
	<script>
            alert("Account Deleted Successfully!");
	    window.location.href = "logout.php";
        </script>
	</html>
	<?php
	} ?>