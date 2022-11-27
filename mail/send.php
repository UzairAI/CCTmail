<?php

session_start();

include "config.php";

$from_mail = $_SESSION['username'];
$to_mail = $_POST['receiver'];
$subject = $_POST['subject'];
$body = $_POST['mail-body'];
$tablename = $_SESSION['user'];
$receivertable = basename($to_mail, '@cctmail.com');
$s = " select * from $tablename where receiver = '$to_mail'";


	$draft= " insert into $tablename(sent, sender, receiver, subject, body) values ('yes', '$from_mail' , '$to_mail' , '$subject' , '$body')";
	$inbox= " insert into $receivertable(inbox, sender, receiver, subject, body) values ('yes', '$from_mail' , '$to_mail' , '$subject' , '$body')";

	mysqli_query($con, $draft);
	mysqli_query($con, $inbox);
	echo" Saved Draft!";

header('location:mail.php');
?>