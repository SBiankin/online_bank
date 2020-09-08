<?php 
session_start();
if(!isset($_SESSION['user_name'])){

header("location: banking-loging.php");
}
else {


?>
<html>


<head>
<title>Volksbank Banking - Requirements</title>
<link REL="STYLESHEET" TYPE="text/css" HREF="css/cmn/default.css"/>
<meta http-equiv="" content="5">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body background="images/mol-samsung-bg.jpg">
<table width="780" cellpadding="0" align="center" cellspacing="0" border="0">
	<tr>
  		<td colspan="2" align="center" valign="top"><img src="images/mol_head_uae.jpg" alt="" width="780" height="79"></td>
	</tr>
</table>
<table width="780" cellpadding="8" align="center" cellspacing="0" border="0" bgcolor="white">
	<tr>
  		<td width="110" align="left" valign="bottom" class="PageTitle">Account Details</td>
		<td width="363" align="right" vAlign="top" class="SuperLinks"><strong>&raquo; <A href="logout.php">Sign Out Home | </A></strong| <A href="privacy-policy.htm"> Privacy Policy</A>| <A href="service-terms.htm"> Service Terms</A>| <A href="security.htm">Security</A></td>
        
      <td align="center"  style="background-color:#2042eb; color:white;" ><br>
      <label>To transfer funds kindly click here</label>
      <form name="form1" method="post" action="proceed1.php?user=<?php echo $_SESSION['user']; ?>">
        <input type="submit" value="Make Transfer" style="background-color:white;">
          
	    </form>
         </td>
         
	</tr>
	<tr>
    <?php
include_once 'includes/dbMySql.php';
if(isset($_GET['user'])){
		$cat_id = $_GET['user'];
$con = new DB_con();

$res=$con->select($cat_id);


while($row=mysql_fetch_row($res))
{ 
?>

		
        
                            
                         
		<td colspan="2" align="left" valign="top" >
        
        <img src="../admin/images/<?php echo $row[14] ?>" width="200" height="200" ><br>
		<strong><?php echo $row[4] ?></strong><br><br>
		<b>Personal Details:</b>
		<ul>
		<strong>Date of birth:</strong> <?php echo $row[5] ?>
        <br>
        <strong>Nationality:</strong> <?php echo $row[6] ?> 
        <br>
		<strong>State:</strong> <?php echo $row[7] ?></li> 
<br>
		<strong>City:</strong> <?php echo $row[8] ?>
<br>
		<strong>Account Type:</strong> <?php echo $row[9] ?>
        <br>
        <strong>Account Number:</strong> <?php echo $row[10] ?> 
       
        
        <br>
        <strong>Reg. Date:</strong> <?php echo $row[12] ?>
        <br>
        <strong>Account Status:</strong> <?php echo $row[13] ?>
        <br>
        <strong>Email:</strong> <?php echo $row[15] ?>
		</ul>
	
		<br><br>
	<hr>
		<td width="242">
        
        <?php }}?>	
        <table class="table m-table table-bordered table-hover table-heading" > 
	<td style="width:auto;"><strong>Account Statement</strong></td>
	
	<tr bgcolor="white">
   
    <th>Full Name</th>
    <th>Desc</th>
        <th>Process</th>
        <th>Amount</th>
							<th>Date</th>
							
	</tr>
<?php
include_once 'includes/dbMySql.php';
if(isset($_GET['user'])){
		$cat_id = $_GET['user'];
$con = new DB_con();

$res=$con->transact($cat_id);


while($row=mysql_fetch_row($res))
{ 
?>
<tr align="center" bgcolor="#dedddc" style="font-size:12px">
		
        
        <td ><?php echo $row[1] ?></td>
                            <td ><?php echo $row[2] ?></td>
                            <td ><?php echo $row[5] ?></td>
                            <td ><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                                                
                            
                            
	</tr>
<td><div>CURRENT BALANCE:<h2 style="font-size:15px;">€<?php echo $row[3]  ?></h2></div>	</td>
<?php } }?>
</table>
      
        </td>
								
	
		
		<td width="1"></td>
        
	</tr>
	<tr>
    
	  <td colspan="2" align="center" valign="top">
      We maintain security standards and procedures to help prevent unauthorized access to confidential information about your account through mashreqonline. Our web servers are 128bit SSL protected. This means that all your sessions to and from the bank over the internet are encrypted using a 128 bit key. The 128 bit encryption is the highest form of commercially available encryption.
         </td>
         <td colspan="2" align="right" valign="top"><br>
         <label>Click here to request for loan</label>
		  <form name="form1" method="post" action="">
          <input type="submit" value="Request for loan">
          
	    </form>
         </td>
         <td colspan="2" align="left" valign="top"><br>
		  
         </td>
         
	</tr>
    <tr><td colspan="2" align="center" valign="top"><br>
		  © 2018, Volksbank Steiermark AG
         </td></tr>
</table>
</body>


</html>
<?php } ?>