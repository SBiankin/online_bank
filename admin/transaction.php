
<?php 

session_start();

if(!isset($_SESSION['user_name'])){

header("location: page_login.php");
}
else {

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin</title>
		<meta name="description" content="description">
		<meta name="author" content="kofi ofori">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="css/style_v2.css" rel="stylesheet">
		<link href="plugins/chartist/chartist.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="index.php">Admin</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						
						<!--<a href="index_v1.html" class="style1"></a>-->
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a href="index.php" class="modal-link">
									<i class="fa fa-bell"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="hidden-xs">
								<a class="ajax-link" href="ajax/calendar.html">
									<i class="fa fa-calendar"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="ajax/page_messages.html" class="ajax-link">
									<i class="fa fa-envelope"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<span><?php echo $_SESSION['user_name']; ?></span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li>
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									<li>
										<a href="ajax/gallery_simple.html" class="ajax-link">
											<i class="fa fa-picture-o"></i>
											<span>Albums</span>
										</a>
									</li>
									<li>
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Settings</span>
										</a>
									</li>
									<li>
										<a href="logout.php">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
    
    
    
    
    
    
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="#" class="ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>
				
			</ul>
		</div>
		<!--Start Content-->
		<div id="content">
			
			<div class="preloader">
				<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="#">Bank Transaction</a></li>
			<li><a href="#">Bank Transaction</a></li>
		</ol>
		
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
	<div class="col-xs-12"><a class="btn btn-default" href="index.php#ajax/add_trans.php" role="button">GO BACK</a></div>
		                     <div class="col-sm-6 col-md-4" style="background-color:white;">
  
    <?php
				include ("includes/db.php");	   
					   if(isset($_POST['client'])){
						   
						   $id = $_POST['id'];
	                       $_SESSION['dd'] = $id;
	
	$get_cat_pro = "select * from account_holder where id='$id'";
	
	$run_cat_pro =$conn->query($get_cat_pro);
	
	$counts_cats =  mysqli_num_rows($run_cat_pro);
		if($counts_cats==0){
		
		echo "<h2>There is no content added in this category</h2>";
		}
	
	while ($row = mysqli_fetch_array($run_cat_pro)){
		
		$accname = $row['account_holder_name'];
		$_SESSION['an'] = $accname;
		
						   
		?>			  
	
  
  
  <div><strong>BANK TRANSACTION</strong></div>
  
  <p><h4>Credit Client</h4></p>
  <form method="post" action="action3.php"> 
  <input type="text" class="form-control" placeholder="Description" name="desc">
  <input type="text" class="form-control" placeholder="Amount" name="amt">
  <input type="date" id="input_date" class="form-control" placeholder="Date" name="date">
  <input class="btn btn-default" type="submit" value="Credit" name="credit">
  
  <hr style="background-color:black;">
 </form>


 
  <p><h4>Debit Client</h4></p>
  <form method="post" action="action3.php"> 
  <input type="text" class="form-control" placeholder="Description" name="desc">
  <input type="text" class="form-control" placeholder="Amount" name="amt">
  <input type="date" id="input_date" class="form-control" placeholder="Date" name="date">
  <input class="btn btn-default" type="submit" value="Debit" name="debit">
  
  <hr style="background-color:black;">
  
  
  <p><h4>Add Transfer</h4></p>
  <form method="post" action="action3.php"> 
  <input type="text" class="form-control" placeholder="Description" name="desc">
  <input type="text" class="form-control" placeholder="Amount" name="amt">
  <input type="date" id="input_date" class="form-control" placeholder="Date" name="date">
  <input class="btn btn-default" type="submit" value="Transfer" name="transfer">
  
  
  <hr style="background-color:black;">
  
  

  
  
  </div>
 
  <div class="col-xs-6 col-md-2" style="background-color:white; padding-top:5px;">
  <div><img src="images/<?php echo $row['img'];?>" width="150" height="150"></div><br>
  <label><strong>Main Balance</strong></label>
  <div><input type="text" class="form-control" readonly value="<?php echo $res = $row['account_balance'];
  
  $_SESSION['bal'] = $res;
   ?>"><?php   }
					   }
					    ?> </div>
  
  
  
  

                 
        
          
                    
                    
                    
				</form>
		
         
  <p><h4>Add Interest</h4></p>
    <form method="post" action="action3.php"> 
  <input type="text" class="form-control" placeholder="Description" name="desc">
  <input type="text" class="form-control" placeholder="Amount" name="amt">
  <input type="date" id="input_date" class="form-control" placeholder="Date" name="date">
  <input class="btn btn-default" type="submit" value="Interest" name="interest">
  </form>
  <hr style="background-color:black;">
 

  <p><h4>Add Loan</h4></p>
    <form method="post" action="action3.php"> 
  <input type="text" class="form-control" placeholder="Description" name="desc">
  <input type="text" class="form-control" placeholder="Amount" name="amt">
  <input type="date" id="input_date" class="form-control" placeholder="Date" name="date">
  <input class="btn btn-default" type="submit" value="Loan" name="loan">
  <hr style="background-color:black;">
    </form>    
</div>






<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->

</body>
</html>
<?php } ?>

<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>



