<?php

	
	if(isset($_POST['submit'])){

	$etitle = $_POST['etitle'];
 
    $fdes = $_POST['fdes'];
		
	
	include"includes/db.php";
		$sql = "UPDATE contact SET title='$etitle',full_desc='$fdes'";
		
		
	
		if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated...')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
$conn->close();

?>