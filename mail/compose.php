<?php

session_start();
include "config.php";
$from_mail = $_SESSION['username'];
$to_mail = $_POST['receiver'];
$subject = $_POST['subject'];
$body = $_POST['mail-body'];
$tablename = $_SESSION['user'];

$s = " select * from $tablename where receiver = '$to_mail'";

	$compose= " insert into $tablename(draft, sender, receiver, subject, body) values ('yes', '$from_mail' , '$to_mail' , '$subject' , '$body')";
	mysqli_query($con, $compose);
	echo" Saved Draft!";

header('location:mail.php');
?>