<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="description">
		<meta name="author" content="Kofi Ofori">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="css/style_v2.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
				<!--<a href="page_register.html" class="txt-default">Need an account?</a>-->
			</div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header"> Admin</h3>
					</div>
                    <form name="login" method="post" action="page_login.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>
					<div class="text-center">
						<!--<a href="index.php" class="btn btn-primary">Sign in</a>-->
                        <input type="submit" class="btn btn-primary" name="login" value="Login" >
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php 
include("includes/db.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['username']);
	$user_pass = mysql_real_escape_string($_POST['password']);
	
	

	$admin_query = "select * from user where username='$user_name' AND password='$user_pass'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}


?>