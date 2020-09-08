<?php 
include("includes/db.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['username']);
	$user_pass = mysql_real_escape_string($_POST['password']);
	
	

	$admin_query = "select * from account_holder where username='$user_name' AND password='$user_pass'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user']=$user_name;
	
	echo "<script>window.open('accdetail.php?user=''".$_SESSION['user']."','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}


?>