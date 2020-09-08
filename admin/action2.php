<?php

if(isset($_POST['update'])){
   $id = $_GET['edit'];
 $accholder = $_POST['reg'];
 $dob = $_POST['dob'];
 $nat = $_POST['nation'];
 
 $state = $_POST['state'];
 $city = $_POST['city'];
 $acctype = $_POST['acctype'];
 
 $accno = $_POST['accno'];
 $accbl = $_POST['accbl'];
 $date = $_POST['accrd'];
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $status = $_POST['status'];

				
 include"includes/db.php";
		$sql = "UPDATE account_holder SET   id='$id',username='$user',password='$pass',account_holder_name='$accholder',DOB='$dob',nationality='$nat',state='$state',city='$city',account_type='$acctype',account_number='$accno',account_balance='$accbl',account_registration_date='$date',status_of_account='$status' WHERE id='$id'";
		
		
	
		if(mysql_query($sql)){
    echo "<script>alert('Client Details updated...')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
} 
	}


?>