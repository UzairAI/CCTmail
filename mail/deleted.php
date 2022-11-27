<?php
session_start();
include "config.php";

$tablename = $_SESSION['user'];
$sql = "select * from $tablename where deleted='yes' order by timestamp DESC";
$result = mysqli_query($con, $sql);
?>
<html>
<head>
<link rel="stylesheet" href="mail.css">
</head>
<body>
<?php
while($row = mysqli_fetch_assoc($result))
       {  ?>
	<div class="open_mail" id="<?php echo $row['id']?>" onclick="open_mail(this.id)">
	<input type="checkbox" class="select" name="delete[]" value="<?php echo $row['id'];?>" method="post"></input>
	<div class="sender_name"><?php if($row['inbox']=='yes'){ ?>
				<font color='green'>From:</font>
				<?php echo $row['sender'];} else{ ?>
				<font color='red'>To:</font>
				<?php echo $row['receiver'];} ?></div>
	<div class="subject_line"><?php echo $row['subject'];?></div>
	<div class="body_line"><?php echo $row['body'];?></div>
	</div>
         <?php
                }
             ?>
</body>
</html>