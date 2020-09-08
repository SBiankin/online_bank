
<?php
session_start();


if(isset($_POST['credit'])){
   
 $desc = $_POST['desc'];
 $date = $_POST['date'];
 $amt = $_POST['amt'];
 $result = $_SESSION['bal'] + $_POST['amt'];
 
				
 include"includes/db.php";
		$sql = "UPDATE account_holder SET account_balance='$result' WHERE id='".$_SESSION['dd']."' ";
		$sql = "INSERT INTO `bank_transact`(`account_holder_id`, `descr`, `amout`, `date`, `sub`) VALUES('".$_SESSION['an']."','$desc','$result','$date','$amt')";
		
		
	
		if(mysql_query($sql)){
    echo "<script>alert('updated')</script>";
		
		echo "<script>window.open('index.php#ajax/add_trans.php','_self')</script>";
} 
	}


?>


<?php



if(isset($_POST['debit'])){
   
 $result = $_SESSION['bal'] - $_POST['amt'];
 
				
 include"includes/db.php";
		$sql = "UPDATE account_holder SET account_balance='$result' WHERE id='".$_SESSION['dd']."' ";
		$sql = "INSERT INTO `bank_transact`(`account_holder_id`, `descr`, `amout`, `date`, `sub`) VALUES('".$_SESSION['an']."','$desc','$result','$date','$amt')";
		
	
		if(mysql_query($sql)){
    echo "<script>alert('updated')</script>";
		
		echo "<script>window.open('index.php#ajax/add_trans.php','_self')</script>";
} 
	}


?>
<?php



if(isset($_POST['transfer'])){
   
 $result = $_SESSION['bal'] - $_POST['amt'];
 
				
 include"includes/db.php";
		$sql = "UPDATE account_holder SET account_balance='$result' WHERE id='".$_SESSION['dd']."' ";
		$sql = "INSERT INTO `bank_transact`(`account_holder_id`, `descr`, `amout`, `date`, `sub`) VALUES('".$_SESSION['an']."','$desc','$result','$date','$amt')";
		
	
		if(mysql_query($sql)){
    echo "<script>alert('updated')</script>";
		
		echo "<script>window.open('index.php#ajax/add_trans.php','_self')</script>";
} 
	}


?>

<?php



if(isset($_POST['interest'])){
   
 $result = $_SESSION['bal'] + $_POST['amt'];
 
				
 include"includes/db.php";
		$sql = "UPDATE account_holder SET account_balance='$result' WHERE id='".$_SESSION['dd']."' ";
		$sql = "INSERT INTO `bank_transact`(`account_holder_id`, `descr`, `amout`, `date`, `sub`) VALUES('".$_SESSION['an']."','$desc','$result','$date','$amt')";
		
	
		if(mysql_query($sql)){
    echo "<script>alert('updated')</script>";
		
		echo "<script>window.open('index.php#ajax/add_trans.php','_self')</script>";
} 
	}


?>

<?php



if(isset($_POST['loan'])){
   
 $result = $_SESSION['bal'] - $_POST['amt'];
 
				
 include"includes/db.php";
		$sql = "UPDATE account_holder SET account_balance='$result' WHERE id='".$_SESSION['dd']."' ";
		$sql = "INSERT INTO `bank_transact`(`account_holder_id`, `descr`, `amout`, `date`, `sub`) VALUES('".$_SESSION['an']."','$desc','$result','$date','$amt')";
		
	
		if(mysql_query($sql)){
    echo "<script>alert('updated')</script>";
		
		echo "<script>window.open('index.php#ajax/add_trans.php','_self')</script>";
} 
	}


?>


