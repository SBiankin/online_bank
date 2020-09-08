

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.index">Dashboard</a></li>
			<li><a href="#">Bank</a></li>
			<li><a href="#">Bank Transaction</a></li>
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
					<span>Transaction Form</span>
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
				<h4 class="page-header">Select Client Name</h4>
				<form class="form-horizontal"  enctype="multipart/form-data" method="post">
					<div class="form-group">
						<div class="col-sm-4">
                        <select class="form-control" name="id" >
                        
                                                <?php
include_once '../includes/dbMySql.php';
$con = new DB_con();

$res=$con->select();

while($row=mysql_fetch_row($res))
{ ?>
                        <option value="<?php echo $row[0]; ?>">
<?php
echo $row[4];

}
?>
                        </option>
                        
                        </select>
                        
						
						</div>
                        <br>
                        

                        
                        <div class="col-sm-4">
							<div class="col-sm-2">
                       <!--<input type="hidden" name="action_type" value="add"/>-->
							<input type="submit"  class="btn btn-primary btn-label-left" name="client" value="Submit" onclick="showDiv()">
							
						
							
						</div>
						</div>
                        
							
							
						
                        
	
							
						
                   
						
					</div>
				
			</div>
            
		</div>
	</div>
</div>
<div class="row">
	
		</div>
	</div>
	<div class="col-xs-12 col-sm-8">
		<div id="welcomeDiv"  style="display:none;" class="answer_list" >
        
        
        <div class="row">
        
<?php
						if(isset($_POST['client'])){
							
							echo "hello";
							echo "<script>alert('Client Details updated...')</script>";
							}
						
						 ?>
  <div class="col-xs-12 col-sm-6 col-md-8">
  <div>
  <p><h4>Credit Client</h4></p>
  <input type="text" class="form-control" placeholder="Description">
  <input type="text" class="form-control" placeholder="Amount">
  <input type="text" class="form-control" placeholder="Date">
  <input class="btn btn-default" type="submit" value="Credit">
  
  <hr style="background-color:black;">
  </div>

 <div>
  <p><h4>Debit Client</h4></p>
  <input type="text" class="form-control" placeholder="Description">
  <input type="text" class="form-control" placeholder="Amount">
  <input type="text" class="form-control" placeholder="Date">
  <input class="btn btn-default" type="submit" value="Debit">
  
  <hr style="background-color:black;">
  </div> 
  
  <div>
  <p><h4>Add Transfer</h4></p>
  <input type="text" class="form-control" placeholder="Description">
  <input type="text" class="form-control" placeholder="Amount">
  <input type="text" class="form-control" placeholder="Date">
  <input class="btn btn-default" type="submit" value="Transfer">
  
  <hr style="background-color:black;">
  </div>
  
  <div>
  <p><h4>Add Interest</h4></p>
  <input type="text" class="form-control" placeholder="Description">
  <input type="text" class="form-control" placeholder="Amount">
  <input type="text" class="form-control" placeholder="Date">
  <input class="btn btn-default" type="submit" value="Interest">
  
  <hr style="background-color:black;">
  </div>
  <div>
  <p><h4>Add Loan</h4></p>
  <input type="text" class="form-control" placeholder="Description">
  <input type="text" class="form-control" placeholder="Amount">
  <input type="text" class="form-control" placeholder="Date">
  <input class="btn btn-default" type="submit" value="Loan">
  
  <hr style="background-color:black;">
  </div>
  </div>
  <div class="col-xs-6 col-md-4">
  <div><img src="images/IMG-20150904-WA0001.jpg" width="200" height="200"></div><br>
  <label><strong>Main Balance</strong></label>
  <div><input type="text" class="form-control" readonly value="200"></div>
  
  
  
  
  </div>
</div>
      </form>  
        
        
        
        </div>
            		<script>
                            function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
                            </script>
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
