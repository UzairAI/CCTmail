<?php 
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
include "config.php"; ?>
<html>
<head>
<title>CCTmail</title>
<link rel="stylesheet" href="mail.css">
</head>
<body>
	<div class="header">
	<a href = 'mail.php'>
	<h1 class="heading1">CCTmail</h1></a>
	<div class="settings" onclick="window.location.href = 'settings.php'">Settings</div>
	<div class="settings" onclick="window.location.href = 'logout.php'">Logout</div></div>
	<form method="post">
	<div class="options_menu">
		<button type="button" class="submit_btn" onclick="compose()">New mail</button>
		<input type="checkbox" class="select" id="head"></input>
		<span class="name">Select all</span>
		<button type="submit" class="submit_btn" id="head_btn" value="delete" formaction="delete.php">Delete</button>
	</div>
	<div class="background"></div>
	<div class="menu_list_container">
		<div class="selector" id="type_chosen"></div>
		<button type="button" class="mail_type_select" onclick="inbox()">Inbox
		</button>
		<button type="button" class="mail_type_select" onclick="sent()">Sent Items
		</button>
		<button type="button" class="mail_type_select" onclick="draft()">Drafts</button>
		<button type="button" class="mail_type_select" onclick="deleted()">Deleted</button>
	</div>
	<div class="mail_list_container" id="open_mail">
	     
		 <div id="selector" class="selector"></div>
	</div>
	</form>
	<div class="mail_container" id="mail">
		</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
<script>
	var b = document.getElementById("selector");
		$(document).ready(function() {
		$('#open_mail').load("inbox.php")
		});
		function open_mail(clicked) {
			b.style.top = (clicked-1)* "81px";
			$(document).ready(function() {
			$('#mail').load("view-mail.php?id="+clicked)
		});
		}
		function view_draft(clicked) {
			$(document).ready(function() {
			$('#mail').load("view-draft.php?id="+clicked)
		});
		}
	var a = document.getElementById("type_chosen");

	function compose(){
		$(document).ready(function() {
		$('#mail').load("new-mail.php")
		});
	}

	function sent(){
		a.style.top = "9.6vh";
		$(document).ready(function() {
		$('#open_mail').load("sent.php")
		});
	}
	function draft(){
		a.style.top = "19.2vh";
		$(document).ready(function() {
		$('#open_mail').load("drafts.php")
		});
	}
	function deleted(){
		a.style.top = "28.8vh";
		$(document).ready(function() {
		$('#open_mail').load("deleted.php")
		});
	}
	function inbox(){
		a.style.top = "0";
		$(document).ready(function() {
		$('#open_mail').load("inbox.php")
		});
	}
document.getElementById('head').onclick = function() {
var checkboxes = document.getElementsByName('delete[]');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
}
</script>
</body>
</html>