<?php

	
	if(isset($_POST['update'])){
	
	$id = $_GET['edit_form'];
	$etitle = $_POST['etitle'];
 $ehouse = $_POST['ehouse'];
 $excl = $_POST['excl'];
 
 $vvip = $_POST['vvip'];
 $vip = $_POST['vip'];
 $cor = $_POST['cor'];
 
 $stnd = $_POST['stnd'];
 $date = $_POST['date'];
 $time = $_POST['time'];
$img = $_FILES['img']['name'];
	$add_img_tmp = $_FILES['img']['tmp_name'] ;
	move_uploaded_file($add_img_tmp,"images/$img");
 $sdes = $_POST['sdes'];
 $fdes = $_POST['fdes'];
		
	
	include"includes/db.php";
		$sql = "UPDATE event_ticket SET id='$id',title='$etitle',exclusive_price='$excl',vvip_price='$vvip',vip_price='$vip',corporate_price='$cor',standard_price='$stnd',rdate='$date',rtime='$time',image='$img',event_house='$ehouse',full_desc='$fdes' WHERE id='$id'";
		
		
	
		if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record inserted...')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
$conn->close();

?>