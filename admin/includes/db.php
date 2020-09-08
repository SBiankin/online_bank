<?php 
#$conn = mysql_connect("localhost","treasure2_bank","Express@21");

#$db = mysql_select_db('treasure2_bank',$conn);
#$conn = mysql_connect("localhost","bank","Express@21");
$conn = new mysqli("localhost","root","","bank");
#$db = mysql_select_db('treasure2_bank',$conn);
$db = $conn->select_db("bank");

?>