<?php include "config.php"; 
	session_start();
	if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$tablename = $_SESSION['user'];
	$sql = "select * from $tablename where id='$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	}	
?>
<html>
<head>
<title>View draft</title>
<link rel="stylesheet" href="./trial.css">
</head>
<body>
	<div class="mail_box_container" id="comp_container">
	<form class="mail_box" id="new_mail" method="post">
	<input type="email" class="input-field" id="receiver" name="receiver" placeholder="To" value="<?php echo $row['receiver'];?>" required>
	<input type="text" class="input-field" name="subject" placeholder="Subject" value="<?php echo $row['subject'];?>">
	<textarea class="mail-body" id="mail-body" name="mail-body" cols="80" rows="12"><?php echo nl2br($row['body']);?></textarea>
	<button type="submit" class="submit_btn" id="submit" name="submit" formaction='send.php'>Send Mail</button>
	<button type="submit" class="submit_btn" id="submit" name="submit" formaction='compose.php'>Save as Draft</button>
	<button type="submit" class="submit_btn" id="submit" name="submit" formaction='<?php mysqli_query($con, "DELETE FROM $tablename WHERE id = '$id'"); ?>'> Discard </button>
	</form></div>
</body>
</html>