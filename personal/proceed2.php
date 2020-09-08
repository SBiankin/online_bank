<?php
session_start();
?>
 <?php
 include("includes/db.php");
 if(isset($_POST['pro'])){
	 $user = $_GET['user'];
	$accname = $_POST['accname'];
	$bank_name = $_POST['bank_name']; 
	$accno = $_POST['accno']; 
	$rout = $_POST['rout']; 
	$bankadd = $_POST['bankadd']; 
	$rcoun = $_POST['rcoun'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$tamt = $_POST['tamt'];
	$email = $_SESSION['em'];
	 
	$update_query = " INSERT INTO transfer_info(`account_holder_id`, `account_name`, `bank_name`, `account_number`, `routing_number`, `bank_address`, `receiving_country`, `state`, `city`, `zip_code`, `transfer_amount`, `email`) VALUES('".$_SESSION['user']."','$accname','$bank_name','$accno','$rout','$bankadd','$rcoun','$state','$city','$zip','$tamt','$email')";
		
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('Details Receieved')</script>";
		
		echo "<script>window.open('proceed2.php?user='".$_SESSION['user']."'','_self')</script>";
		
		} 
	 
	 
	 
	 
 require_once 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$maill = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'put your host email  here(eg. mail.spinegh.com)';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'put your email here(eg.info@spinegh.com)';                 // SMTP username
$mail->Password = 'Password here';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('put your email here(eg.info@spinegh.com)', 'Banking');
$mail->addAddress("put your email here(eg.info@spinegh.com)");     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Banking';
$mail->Body    = "
<html><head>
    
      
      <style>
         
         #outlook a {padding:0;} 
         body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
        
         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} 
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
         img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px 0px !important;}
         
         table td {border-collapse: collapse;}
         table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
        
         table[class=full] { width: 100%; clear: both; }
         
         
         @media only screen and (max-width: 640px) {
         a[href^='tel'], a[href^='sms'] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^='tel'], .mobile_link a[href^='sms'] {
         text-decoration: default;
         color: #ffffff !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 440px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
         table[class='sthide']{display: none!important;}
         img[class='bigimage']{width: 420px!important;height:219px!important;}
         img[class='col2img']{width: 420px!important;height:258px!important;}
         img[class='image-banner']{width: 440px!important;height:106px!important;}
         td[class='menu']{text-align:center !important; padding: 0 0 10px 0 !important;}
         td[class='logo']{padding:10px 0 5px 0!important;margin: 0 auto !important;}
         img[class='logo']{padding:0!important;margin: 0 auto !important;}

         }
        
         @media only screen and (max-width: 480px) {
         a[href^='tel'], a[href^='sms'] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^='tel'], .mobile_link a[href^='sms'] {
         text-decoration: default;
         color: #ffffff !important; 
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 280px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
         table[class='sthide']{display: none!important;}
         img[class='bigimage']{width: 260px!important;height:136px!important;}
         img[class='col2img']{width: 260px!important;height:160px!important;}
         img[class='image-banner']{width: 280px!important;height:68px!important;}
         
         }
      </style>

      
   </head>
<body>

<div class='block'>
   
   <table width='100%' bgcolor='#f6f4f5' cellpadding='0' cellspacing='0' border='0' id='backgroundTable' st-sortable='preheader'>
      <tbody>
         <tr>
            <td width='100%'>&nbsp;</td>
         </tr>
      </tbody>
   </table>
   
</div>
<div class='block'>
  
   <table width='100%' bgcolor='#f6f4f5' cellpadding='0' cellspacing='0' border='0' id='backgroundTable' st-sortable='header'>
      <tbody>
         <tr>
            <td>
               <table width='580' bgcolor='#0db9ea'  align='center' class='devicewidth' hlitebg='edit' shadow='edit'>
                  <tbody>
                     <tr>
                        <td>
                          
                           <table width='280' cellpadding='0' cellspacing='0' border='0' align='left' class='devicewidth'>
                              <tbody>
                                 <tr>
                                    <td valign='middle' width='270' style='padding: 10px 0 10px 20px;' class='logo'>
                                       <div class='imgpop' style='color: white;'><strong>TICKET ICONS</strong></div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                          
                           <table width='280' cellpadding='0' cellspacing='0' border='0' align='right' class='devicewidth'>
                              <tbody>
                                 <tr>
                                    <td width='270' valign='middle' style='font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;line-height: 24px; padding: 10px 0;' align='right' class='menu' st-content='menu'>
                                       <a href='#' style='text-decoration: none; color: #ffffff;'>HOME</a>&nbsp;
                                       
                                    </td>
                                    <td width='20'></td>
                                 </tr>
                              </tbody>
                           </table>
                          
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   
</div><div class='block'>
 
   </div>
<div class='block'>
  
   <table width='100%' bgcolor='#f6f4f5' >
      <tbody>
         <tr>
            <td>
               <table bgcolor='#ffffff' width='580' cellpadding='0' cellspacing='0' border='0' align='center' class='devicewidth' modulebg='edit'>
                  <tbody>
                     
                     <tr>
                        <td height='20'></td>
                     </tr>
                    
                     <tr>
                        <td>
                           <table width='540' align='center' border='0' cellpadding='0' cellspacing='0' class='devicewidthinner'>
                              <tbody>
                                 <tr>
                                    <td>
                                       
                                       <table width='200' align='left' border='0' cellpadding='0' cellspacing='0' class='devicewidthinner'>
                                          <tbody>
                                            
                                             <tr>
                                                <td width='200' height='180' align='center'>
                                                   
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                      
                                       <table align='left' border='0' cellpadding='0' cellspacing='0' class='mobilespacing'>
                                          <tbody>
                                             <tr>
                                                <td width='100%' height='15' style='font-size:1px; line-height:1px; mso-line-height-rule: exactly;'>&nbsp;</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                      
                                       <table width='330' align='right' border='0' cellpadding='0' cellspacing='0' class='devicewidthinner'>
                                          <tbody>
                                            <tr>
                                                <td style='font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;' st-title='leftimage-title'>
                                                    <strong> Hi</strong><p>This is your ticket<p> Below are its details.
                                                </td>
                                             </tr>
                                             <tr>
                                                <td style='font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;' st-title='leftimage-title'>
                                                     
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td width='100%' height='20'></td>
                                             </tr>
                                             
                                             <tr>
                                                <td style='font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 24px;' st-content='leftimage-paragraph'>
                                             Name: " .$_SESSION['user']."  <p> Account Name: $accname <p> <p> Bank Name: $bank_name <p><p> Account Number: $accno <p>Routing Number: $rout <p> Bank Address $bankadd <p><p>Receiving country: $rcoun <p>State: $state <p>City:$city  <p>Zip Code: $zip <p>Transfer Amount: $tamt <p>
											 <p>Sender Email: $email <p>											 
                                                </td>
                                             </tr>
                                            
                                             <tr>
                                                <td width='100%' height='10'></td>
                                             </tr>
                                            
                                             <tr>
                                                <td>
                                                   <table height='30' align='left' valign='middle' border='0' cellpadding='0' cellspacing='0' class='tablet-button' st-button='edit'>
                                                                  <tbody>
                                                                     <tr>
                                                                        
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                </td>
                                             </tr>
                                             
                                          </tbody>
                                       </table>
                                       
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                     
                     <tr>
                        <td height='20'></td>
                     </tr>
                     
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   
</div>
<div class='block'>
   
   <table width='100%' bgcolor='#f6f4f5' cellpadding='0' cellspacing='0' border='0' id='backgroundTable' st-sortable='fullimage'>
      <tbody>
         <tr>
            <td>&nbsp;</td>
         </tr>
      </tbody>
   </table>
</div>
<div class='block'>
   
   <table width='100%' bgcolor='#f6f4f5' cellpadding='0' cellspacing='0' border='0' id='backgroundTable' st-sortable='postfooter'>
      <tbody>
         <tr>
            <td width='100%'>
               <table width='580' cellpadding='0' cellspacing='0' border='0' align='center' class='devicewidth'>
                  <tbody>
                    
                     <tr>
                        <td width='100%' height='5'></td>
                     </tr>
                     
                     <tr>
                        <td align='center' valign='middle' style='font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999' st-content='preheader'>
                           
                        </td>
                     </tr>
                    
                     <tr>
                        <td width='100%' height='5'></td>
                     </tr>
                     
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
  
</div>

</body></html>";

//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo '';
    echo '' . $mail->ErrorInfo;
} else {
    echo '';

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
    from { }

    to { width: 10% }
}

@-moz-keyframes progress { 
    from { }

    to { width: 10% }
}

@-ms-keyframes progress { 
    from { }

    to { width: 10% }
}

@keyframes progress { 
    from { }

    to { width: 10% }
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
		<td width="363" align="right" vAlign="top" class="SuperLinks"><strong>&raquo; <A href="logout.php">Sign Oot Home | </A></strong| <A href="privacy-policy.htm"> Privacy Policy</A>| <A href="service-terms.htm"> Service Terms</A>| <A href="security.htm">Security</A></td>
        
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

        
        <?php }}?>	
								
<div id="light" class="white_content">
<div>  <!--<span style="float:right" id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>&#10006 </span>--><p></p></div>
<div><h4>Funds Transfer Processing...</h4></div>

<div id="progressbar"><div id="progress" ><div id="pbaranim">

</div></div>
 
</div>
<div id="div1">
	 <p></p>
    <form method="post" action="proceed3.php?user=<?php echo $_SESSION['user']; ?>">
    <label>Please enter your COT code to proceed with your funds transfer<br/><strong>COT</strong> code is the Cost of Transfer for the total sum of your Escrow account.</label>
    <input type="text" name="item" placeholder="COT" required>
  
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