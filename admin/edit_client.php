
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
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Charts</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/charts_xcharts.html">xCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_amcharts.html">AmCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_chartist.html">Chartist</a></li>
						<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
					</ul>
				</li>-->
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Tables</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/tables_simple.html">Simple Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_datatables.html">Data Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>
					</ul>
				</li>-->
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Event</span>
					</a>
					<ul class="dropdown-menu">
						<!--<li><a class="ajax-link" href="ajax/forms_elements.html">Elements</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/forms_layouts.php">Add Event</a></li>
                        <li><a class="ajax-link" href="ajax/delete_edit.php">Delete/Edit Event</a></li>-->
                        
						<!--<li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>-->
					</ul>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">UI Elements</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/ui_grid.html">Grid</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
						<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
						<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
					</ul>
				</li>-->
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Pages</span>
					</a>
					<ul class="dropdown-menu">
						
                      <li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a class="contact.php" href="ajax/page_messages.html">Contact</a></li>
						<li><a class="ajax-link" href="ajax/page_pricing.html">How to buy ticket</a></li>
						<li><a class="ajax-link" href="ajax/page_product.html">Product</a></li>
						<li><a class="ajax-link" href="ajax/page_invoice.html">Meet our partners</a></li>
						<li><a class="ajax-link" href="ajax/page_search.html">Packages</a></li>
						
                        
                        -->
                        
                        <!--<li><a href="ajax/page_login.html">Login</a></li>
						<li><a href="ajax/page_register.html">Register</a></li>
						<li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>
						<li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>
						<li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>
						<li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>
						<li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>
						<li><a class="ajax-link" href="ajax/page_product.html">Product</a></li>
						<li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>
						<li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>
						<li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
						<li><a href="ajax/page_500.html">Error 500</a></li>-->
					</ul>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-map-marker"></i>
						<span class="hidden-xs">Maps</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/maps.html">OpenStreetMap</a></li>
						<li><a class="ajax-link" href="ajax/map_fullscreen.html">Fullscreen map</a></li>
						<li><a class="ajax-link" href="ajax/map_leaflet.html">Leaflet</a></li>
					</ul>
				</li>-->
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Slideshow</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/gallery_simple.html">Banner Slide</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>-->
				<!--<li>
					 <a class="ajax-link" href="ajax/typography.html">
						 <i class="fa fa-font"></i>
						 <span class="hidden-xs">Typography</span>
					</a>
				</li>-->
				 <!--<li>
					<a class="ajax-link" href="ajax/calendar.html">
						 <i class="fa fa-calendar"></i>
						 <span class="hidden-xs">Calendar</span>
					</a>
				 </li>-->
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Multilevel menu</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">First level menu</a></li>
						<li><a href="#">First level menu</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<i class="fa fa-plus-square"></i>
								<span class="hidden-xs">Second level menu group</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Second level menu</a></li>
								<li><a href="#">Second level menu</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">
										<i class="fa fa-plus-square"></i>
										<span class="hidden-xs">Three level menu group</span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Three level menu</a></li>
										<li><a href="#">Three level menu</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle">
												<i class="fa fa-plus-square"></i>
												<span class="hidden-xs">Four level menu group</span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="#">Four level menu</a></li>
												<li><a href="#">Four level menu</a></li>
												<li class="dropdown">
													<a href="#" class="dropdown-toggle">
														<i class="fa fa-plus-square"></i>
														<span class="hidden-xs">Five level menu group</span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#">Five level menu</a></li>
														<li><a href="#">Five level menu</a></li>
														<li class="dropdown">
															<a href="#" class="dropdown-toggle">
																<i class="fa fa-plus-square"></i>
																<span class="hidden-xs">Six level menu group</span>
															</a>
															<ul class="dropdown-menu">
																<li><a href="#">Six level menu</a></li>
																<li><a href="#">Six level menu</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#">Three level menu</a></li>
									</ul>
								</li>-->
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="about">
				<div class="about-inner">
					
					
					
				</div>
			</div>
			<div class="preloader">
				<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="#">Client</a></li>
			<li><a href="#">Edit Client</a></li>
		</ol>
		<div id="social" class="pull-right">
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Edit Client</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
            <?php 

include("includes/db.php");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "select * from account_holder where id='$edit_id'";
	
	$run_edit = mysql_query($edit_query); 
	
	while ($edit_row=mysql_fetch_array($run_edit)){
	
		$id = $edit_row['id'];
		$username = $edit_row['username'];
		$password = $edit_row['password'];
		$account = $edit_row['account_holder_name'];
		$dob = $edit_row['DOB'];
		$nation = $edit_row['nationality'];
		$state = $edit_row['state'];
		$city = $edit_row['city'];
		$acctype = $edit_row['account_type'];
		$accno = $edit_row['account_number'];
		$accbl = $edit_row['account_balance'];
		$date = $edit_row['account_registration_date'];
		$status = $edit_row['status_of_account'];
		$img = $edit_row['img'];
	
		
	}
}
?>
				<h4 class="page-header">Edit Client Details</h4>
				<form class="form-horizontal"  enctype="multipart/form-data" method="post" action="action2.php?edit=<?php echo $id ?>">
					<div class="form-group">
						
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Holder Name" data-toggle="tooltip" data-placement="bottom" title="Account Holder Name" name="reg" value="<?php echo $account ?>">
						</div>
						
						<div class="col-sm-4">
							<input type="text" id="input_date"  class="form-control" placeholder="DOB" data-toggle="tooltip" data-placement="DOB" title="DOB" name="dob" value="<?php echo $dob ?>">
						</div>
					</div>
					<!--<div class="form-group has-success has-feedback">
						<label class="col-sm-2 control-label">Company</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Company">
						</div>
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Address">
							<span class="fa fa-check-square-o txt-success form-control-feedback"></span>
						</div>-->
					<!--</div>-->
					<div class="form-group has-warning has-feedback">
						
						<div class="col-sm-4">
                        
							<input type="text" class="form-control" placeholder="Nationality" name="nation" value="<?php echo $nation ?>">
							
					</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="State" name="state" value="<?php echo $state ?>">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $city ?>">
							
						</div>
                        
                        
                        
						
					<div class="form-group has-error has-feedback">
                    
                    <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Type" name="acctype" value="<?php echo $acctype ?>">
							
						</div>
                        
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Number" name="accno" value="<?php echo $accno ?>">
							
						</div>
                    
						
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Balance" name="accbl" value="<?php echo $accbl ?>">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Username" name="user" value="<?php echo $username ?>">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Password" name="pass" value="<?php echo $password ?>">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Status" name="status" value="<?php echo $status ?>">
							
						</div>
						<div class="col-sm-4">
							<input type="text" id="input_date" class="form-control" placeholder="Account registration date:" name="accrd" value="<?php echo $date ?>">
                            <!--<label class="col-sm-2 control-label">Photo</label>-->
							<!--<input type="file" name="img"  class="qq-upload-button-selector qq-upload-button btn btn-success" style="width: auto;" >-->
						</div>
						
					</div>
					
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancel
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-warning btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Send later
							</button>
						</div>
						<div class="col-sm-2">
                       <!--<input type="hidden" name="action_type" value="add"/>-->
							<input type="submit" class="btn btn-primary btn-label-left" name="update" value="Update">
							
								
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<!--<div class="col-xs-12 col-sm-8">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Validator forms</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<!--<div class="box-content">-->
				<!--<form id="defaultForm" method="post" action="validators.html" class="form-horizontal">
					<fieldset>
						<legend>Not Empty validator</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Username</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="username" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Country</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="country" id="s2_country">
									<option value="">-- Select a country --</option>
									<option value="fr">France</option>
									<option value="de">Germany</option>
									<option value="it">Italy</option>
									<option value="jp">Japan</option>
									<option value="ru">Russia</option>
									<option value="gb">United Kingdom</option>
									<option value="us">United State</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<div class="checkbox">
									<label>
										<input type="checkbox"  name="acceptTerms" /> Accept the terms and policies
										<i class="fa fa-square-o small"></i>
									</label>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Regular expression based validators</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email address</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="email" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Website</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="website" placeholder="http://" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Phone number</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="phoneNumber" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Hex color</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="color" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">US zip code</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="zipCode" />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Identical validator</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Password</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="password" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Retype password</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="confirmPassword" />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Other validators</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Ages</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="ages" />
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>-->
			<!--</div>-->
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<div class="box">
			<!--<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Contextual backgrounds</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>-->
			<!--<div class="box-content">
				<p class="bg-primary">Simple info</p>
				<p class="bg-success">Message success</p>
				<p class="bg-info">Message info</p>
				<p class="bg-warning">Message warning</p>
				<p class="bg-danger">Message danger</p>
			</div>-->
		</div>
	</div>
</div>

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


			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
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
