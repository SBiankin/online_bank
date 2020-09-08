<?php  
include("includes/db.php");
	
	if(isset($_POST['submit']))
	{
	$accholder = $_POST['reg'];
 $dob = $_POST['dob'];
 $nat = $_POST['nation'];
 
 $state = $_POST['state'];
 $city = $_POST['city'];
 $acctype = $_POST['acctype'];
 
 $accno = $_POST['accno'];
 $accbl = $_POST['accbl'];
 $date = $_POST['accrd'];
 $email = $_POST['email'];
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $status = $_POST['status'];
 $img = $_FILES['img']['name'];
	$add_img_tmp = $_FILES['img']['tmp_name'] ;
	move_uploaded_file($add_img_tmp,"images/$img");
		
	
	
		$update_query = " INSERT INTO account_holder(`username`, `password`, `account_holder_name`, `DOB`, `nationality`, `state`, `city`, `account_type`, `account_number`, `account_balance`, `account_registration_date`, `status_of_account`, `img`, `email`) VALUES('$user','$pass','$accholder','$dob','$nat','$state','$city','$acctype','$accno','$accbl','$date','$status','$img','$email')";
		
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('Client Details Registered')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
		
		}
	
	
	}



?>






