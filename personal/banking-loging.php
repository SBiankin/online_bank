<?php 
session_start();
?>
	

<!doctype html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<style type="text/css">
body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
body {
	background-image: url(images/LoginLeftBG.gif);
}
</style>
<head>
	
<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Internet Banking - Login | Volksbank Steiermark AG</title>
<meta name="description" content="Login Volksbank Banking">

<!-- Mobile Specific Metas -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1.0">

<!-- CSS -->
<link rel="stylesheet" href="css/cssLogin/framework.css">
<link rel="stylesheet" href="css/cssLogin/grids.css">
<link rel="stylesheet" href="css/cssLogin/app.css">
<link rel="stylesheet" href="css/cssLogin/responsive.css">
<!--[if IE 7]>
  <link rel="stylesheet" href="css/cssLogin/font-icon-ie7.css">
  <script type="text/javascript" src="JS/jsLogin/PIE_IE678.js"></script>
<![endif]-->

<!-- JS - Add or remove any of the scripts to suit the functionality you wish to display. -->
<script type="text/javascript" src="jsdir/jquery-1.8.2.min.html"></script>
<script src="jsdir/security.html"></script>
<script src="jsdir/common.html"></script>
<script src="JS/jsLogin/libs/jquery.easing.1.3.html"></script>
<script src="JS/jsLogin/libs/modernizr-2.5.3.min.html"></script>
<!-- 1202upgrade:start. -->
<script language="JavaScript" type="text/JavaScript" src='jsdir/rsa_compiled.html'></script>
<!-- 1202upgrade:End. -->
<!--[if lt IE 9]>
  <script src="JS/jsLogin/libs/html5.js"></script>
<![endif]-->

<!-- Favicon -->
<!--<link rel="shortcut icon" href="favicon.ico">-->

<link rel="stylesheet" href="css/cssLogin/supersized.css" type="text/css" media="screen" />
<script type="text/javascript" src="JS/jsLogin/supersized.3.2.7.min.html"></script>
	<script Language="JavaScript">

		/*if(document.getElementsByName('fldlitever')[0].selectedIndex == 1){
			var scrW = '1015px';
			var scrH = '740px';
		}else {
			
		}*/
	
	//-----------------------------------------------------------------------------
      
</script>

</head>
<body>



<!-- content -->
<section class="mainSection">

	<div class="loginBox">
		<div class="innerloginBox">
			<div class="logo visible-phone">
				<img alt="" src="images/imagesLogin/logosq.png" />
				<span>Login Volksbank Banking</span>
			</div>

			<ul class="nav nav-tabs">
			  <li class="active"><a class="tablogin" href="#login" data-toggle="tab"> <span>Login</span></a></li>
			  
			</ul>
			<div id="myTabContent" class="tab-content">
			<form method="post" action="banking-loging.php" enctype="multipart/form-data">
			  <div class="tab-pane active in" id="login">
				<div class="form-horizontal">
                  <div class="control-group">
                  
                    <label class="control-label" for="chooseLanguage">Sprache: </label>
                    <div class="controls">
                        <select name="fldLangId">
                            <option value="eng">Deutsh</option>
                            <option value="ara">English</option>
                        </select>    
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">User ID </label>
                    <div class="controls">
                      <input class="input-medium" type="text" name="username" placeholder="User ID">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">PIN</label>
                    <div class="controls">
                      <input class="input-medium" type="password" name="password" placeholder="PIN">
                    </div>
                  </div>
                  <div class="control-group" >
                  	<label class="control-label" for="checkboxtext"></label>
                    <div class="controls" style=" position:relative; height: 20px; z-index: 110;">
                  		<a class="button-test" href=" javascript:;" style=" background: none; position: absolute; left: 0px; top: 0px; width: 100%; height: 20px; z-index: 100; text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                  	</div>
                  </div>
                  <div class="control-group">
			<input name="login" type="submit" value="SignOn" class="btn btn-submit"/>
            
                  </div>
                </div>
				<p class="alert note"><b> Hinweis:</b> Benutzer-ID und Passwort sind Groß- / Kleinschreibung.</p>
			  </div>
			  </form>
			  <div class="tab-pane fade" id="profile">
				<div class="more-btn reg-now rcorner">
					<h1><span style="font-size: 12px; color: #666;" >Choose from 2 easy options</span></h1>
					<a class="btn-left rcorner" href="#" ">
						<span class="steps rcorner">1</span>
						<span class="text-1">One-time code will be sent to your registered mobile number.</span>
						<span class="text-2">Click here</span>
					</a>
					<a class="btn-right rcorner" href="#" ">
						<span class="steps rcorner">2</span>
						<span class="text-1">Use your Telephone Identification Number.</span>
						<span class="text-2">Click here</span>
					</a>
					<div style="clear: both;"></div>
					
					<span class="text-1"><i class="icon-ok"></i> Need assistance call <span>+971 (4) 4244444</span></span>
					<br><br>
				</div>
			  </div>
			  
			  <div class="tab-pane fade" id="forget">
				<div class="more-btn forgot rcorner">
					<h1><span style="font-size: 12px; color: #666;" >Choose from 2 easy options</span></h1>
					
					<span class="text-1"><i class="icon-ok"></i> Retrieve User ID</span>
					<div class="content-userid rcorner">
					<span style="font-size: 12px; color: #666;" > Note: Dear Customer, to retrieve your User ID, Please call <span>+971 (4) 4244444</span></span>
					<!--<span style="font-size: 12px; color: #666;" > This option is temporary disabled. For assistance call +971 (4) 4244444</span>-->
						<!--<a href="#" onclick="forgotUserIdOTP();" class="btn btn-submit">One Time Code</a>-->
						<!--<a href="#" onclick="forgotUserIdTIN();" class="btn btn-submit">TIN</a>-->
					</div>
					<div style="clear: both;"></div>
					
					<span class="text-1"><i class="icon-ok"></i> Reset Password</span>
					<div class="content-password rcorner">
						<a href="#" " class="btn btn-submit">One Time Code</a>
						<a href="#" " class="btn btn-submit">TIN</a>
					</div>
					<div style="clear: both;"></div>
					
					<span class="text-1"><i class="icon-ok"></i> Need assistance call <span>+971 (4) 4244444</span></span>
					<br><br><br><br><br><br>
				</div>
			  </div>
			  
			</div>
			
<br/><br/>
			<div class="top_login_menu">
				<ul>
					<li><a href="requirements.htm">Requirements</a></li>
					<li><a href="security.htm">Security</a></li>
					<li><a href="privacy-policy.htm">Privacy policy</a></li>
					<li><a href="service-terms.htm">Service Terms</a></li>
				</ul>
			</div>

		</div>
		
	</div>

	<div class="textBox hidden-phone">
		<div class="inner-textBox">
			<div class="logo">
				<img alt="" src="images/imagesLogin/logosq.png" />
				<span>Login Volksbank Banking</span>
			</div>
		</div>
		<p>© 2018, Volksbank Steiermark AG</p
	</div>

</section>
<!-- /content -->


<script>

</script>




<!-- scripts are now optimized via Modernizr.load --> 



<form name="frmtoken" method="post" action="#" target="frmnew">	
	<input type="hidden" name="fldDeviceId" value="01" />
	<input type="hidden" name="fldLangId" value="eng" />
	<input type="hidden" name="fldRequestId" value="RRLGN00"/>
	<input type="hidden" name="fldlitever" value="L"/>
	<input type="hidden" name="fldData" />
</form>
<form name="frmUserReg" method="post">
	<input type="hidden" name="fldDeviceId" value="" >
	<input type="hidden" name="fldLangId" value="" >
	<input type="hidden" name="fldPortalCode" value="" />
	<input type="hidden" name="fldAuthType" value="" />
	<input type="hidden" name="fldlitever" value="L"/>
</form>
<form name="frmprocess" method="POST" action="#">
			<input type="hidden" name="fldRequestId" value=""/>
			<input type="hidden" name="fldDeviceId" value="01"/>
			<input type="hidden" name="title" value=""/>
			<input type="hidden" name="usertype" value="EN1"/>
		</form>
<iframe name="frmnew" width="0px" height="0px" class="iframe" style="display: none;" marginwidth="0px" marginheight="0px" scrolling="no" frameborder="1" src="trans.htm">	</iframe>


</body>
</html>

<?php 
include("includes/db.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['username']);
	$user_pass = mysql_real_escape_string($_POST['password']);
	
	

	$admin_query = "select * from account_holder where username='$user_name' AND password='$user_pass'";

	$run = mysql_query($admin_query); 
	while($row=mysql_fetch_row($run))
{
	$name= $row[4];
	$_SESSION['user']=$name;
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('accdetail.php?user=$name','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}
}

?>