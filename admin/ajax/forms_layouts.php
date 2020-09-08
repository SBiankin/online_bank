

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.index">Dashboard</a></li>
			<li><a href="#">Client</a></li>
			<li><a href="#">Register Client</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Register Form</span>
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
				<h4 class="page-header">Register form</h4>
				<form class="form-horizontal"  enctype="multipart/form-data" method="post" action="action.php">
					<div class="form-group">
						
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Holder Name" data-toggle="tooltip" data-placement="bottom" title="Account Holder Name" name="reg">
						</div>
						
						<div class="col-sm-4">
							<input type="text" id="input_date"  class="form-control" placeholder="DOB" data-toggle="tooltip" data-placement="DOB" title="DOB" name="dob">
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
                        
							<input type="text" class="form-control" placeholder="Nationality" name="nation">
							
					</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="State" name="state">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="City" name="city">
							
						</div>
                        
                        
                        
						
					<div class="form-group has-error has-feedback">
                    
                    <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Type" name="acctype">
							
						</div>
                        
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Number" name="accno">
							
						</div>
                    
						
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Balance" name="accbl">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Username" name="user">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Password" name="pass">
							
						</div>
                        <div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Account Status" name="status">
							
						</div>
						<div class="col-sm-4">
							<input type="text" id="input_date" class="form-control" placeholder="Account registration date:" name="accrd"><input type="email" class="form-control" placeholder="Email" name="email">
                            <label class="col-sm-2 control-label">Photo</label>
							<input type="file" name="img"  class="qq-upload-button-selector qq-upload-button btn btn-success" style="width: auto;">
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
							<input type="submit" class="btn btn-primary btn-label-left" name="submit" value="Submit">
							
								
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<div class="box">
			<div class="box-header">
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
			</div>
			<div class="box-content">
				<p class="bg-primary">Simple info</p>
				<p class="bg-success">Message success</p>
				<p class="bg-info">Message info</p>
				<p class="bg-warning">Message warning</p>
				<p class="bg-danger">Message danger</p>
			</div>
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

