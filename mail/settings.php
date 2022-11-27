<?php
session_start();
include "config.php";

$user = $_SESSION['user'];
$sql = "select * from userdata where user= '$user'";
$result = mysqli_query($con, $sql);
?>

<html>
<head>
<title>Settings</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="mail.css">
</head>
<body>
	<div class="header">
	<a href="mail.php">
	<h1 class="heading1">CCTmail</h1></a>
	<div class="settings" onclick="window.location.href = 'logout.php'">Logout</div></div>
	<div class="background">
		<h2 class="setting">Settings</h2>
		<form class="setting-view" action="update.php" method="post">
		<table>
		<?php
		while($row = mysqli_fetch_assoc($result))
       		{  ?>
		   <tr>
			<td><label for="name" class="property">Name: </label></td>
			<td><input type="text" id="name" name="name" class="set-field" placeholder="Name" value="<?php echo $row['name']?>" required></td>
		   </tr><tr>
			<td><label for="email" class="property">Email: </label></td>
			<td><input type="email" id="email" name="email" class="set-field" placeholder="Email ID" value="<?php echo $row['email']?>" readonly></td>
		    </tr><tr>
			<td><label for="pass" class="property">Change Password: </label></td>
			<td><input type="text" id="pass" name="pass" class="set-field" placeholder="Password" value="<?php echo $row['password']?>" required></td>
		    </tr><tr><td>&nbsp;</td></tr>
			<tr><td colspan="2"><label for="confirm" class="property">To delete your account, type 'Delete' below and hit Delete: </label></td></tr>
			<tr><td colspan="2"><input type="text" name="delete" class="input-field" id="confirm" placeholder="Delete" onkeyup='check();'></td></tr>
	                <?php
                	}
			?>
			</table>
			<br><br><br>
			<button type="submit" class="submit-btn" id="submit" name="submit">Save</button><br>
			<button type="submit" class="submit-btn" id="delete" name="submit" formaction="delete-acc.php">Delete</button>
		</form>
	</div>
<script>
    document.getElementById('delete').disabled = true;
	function check() {
    if (document.getElementById('confirm').value == 'Delete') {
        document.getElementById('delete').disabled = false;
    } else {
        document.getElementById('delete').disabled = true;
    }
}
</script>
</body>
</html>