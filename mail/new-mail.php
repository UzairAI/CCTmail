<html>
<head>
<title>CCTmail</title>
<link rel="stylesheet" href="mail.css">
</head>
<body>		
	<div class="mail_box_container" id="comp_container">
	<form class="mail_box" id="new_mail" method="post">
	<input type="email" class="input-field" id="receiver" name="receiver" placeholder="To" required>
	<input type="text" class="input-field" name="subject" placeholder="Subject">
	<textarea class="mail-body" id="mail-body" name="mail-body" cols="80" rows="12"></textarea>
	<button type="submit" class="submit_btn" id="submit" name="submit" formaction='send.php'>Send Mail</button>
	<button type="submit" class="submit_btn" id="submit" name="submit" formaction="compose.php">Save as Draft</button>
	<button type="reset" class="submit_btn" id="submit" name="submit">Discard</button>
	</form></div>
</body>
</html>