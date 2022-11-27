<?php

session_start();

include "config.php";

$name = $_POST['user_name'];
$user = $_POST['user'];
$pass = $_POST['password1'];
$email = $user.'@cctmail.com';

$s = " select * from userdata where user = '$user'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	?><html>
	<script>
            alert("Email Id already taken. \n " +
                "Please use another email.");
	    window.location.href = "login.php";
        </script>
	</html><?php
	;}
else{
	$reg= " insert into userdata(name, user, password, email) values ('$name' , '$user' , '$pass' , '$email')";
	mysqli_query($conn, $reg);
	?><html>
	<script>
            alert("Registration Successful. \n " +
                "Please login.");
	    window.location.href = "login.php";
        </script>
	</html><?php
;}
$sql = "CREATE TABLE $user (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        inbox VARCHAR(255),
        sent VARCHAR(255),
        draft VARCHAR(255),
	deleted VARCHAR(255),
        sender VARCHAR(255),
        receiver VARCHAR(255),
	subject VARCHAR(255),
	body LONGTEXT,
	timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

if (mysqli_query($conn, $sql)) {
    $reg = " insert into $user(inbox, sender, receiver, subject, body) values ('yes', 'admin@cctmail.com' , '$email' , 'Welcome to CCTmail' , 'Hello $name, 

																		Thank you for registering at CCTmail. 

																		This is a working model of an actual email system created by Mohammad Uzair Ali. 

																		Regards,
																		CCTmail Team.')";
    mysqli_query($conn, $reg);
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>