<?php include "config.php"; 
	session_start();
	if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$tablename = $_SESSION['user'];
	$sql = "select * from $tablename where id='$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($con);
	}	
?>
<html>
<head>
<title>View mail</title>
<link rel="stylesheet" href="mail.css">
</head>
<body>		
	<div class="mail_heading"><?php echo $row['subject'];?></div>
	<div class="mail_box_container">
	<div class="mail_box">
	<div class="sender"><?php echo $row['sender'];?></div>
	<div class="time"><?php echo $row['timestamp'];?></div>
	<div class="body"><?php echo nl2br($row['body']);?></div>
	</div></div>
</body>
</html>