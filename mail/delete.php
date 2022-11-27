<?php 
session_start();
include "config.php";
if(isset($_POST['delete'])){
	$checkbox = $_POST['delete'];
	$count = count($checkbox);
	$tablename = $_SESSION['user'];
	for($i=0;$i<$count;$i++){

        if(!empty($checkbox[$i])){
	$id = mysqli_real_escape_string($con, $checkbox[$i]);
	mysqli_query($con,"DELETE FROM $tablename WHERE id = '$id' && (deleted = 'yes' or draft = 'yes')");
	mysqli_query($con,"UPDATE $tablename SET deleted = 'yes' WHERE id = '$id' && deleted IS NULL");
    }
  }
  header('location:mail.php');
}
?>