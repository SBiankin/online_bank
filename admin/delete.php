<?php 
include("includes/db.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "DELETE FROM `account_holder` WHERE id='$delete_id'";
	$delete_query2= mysql_query($delete_query);
	
	if($delete_query2){
	
	echo "<script>alert('Client Has been Deleted')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	
	}
}




?>