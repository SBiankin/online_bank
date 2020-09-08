

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
<script>
    
</script>
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
				<form class="form-horizontal"  enctype="multipart/form-data" method="post" action="transaction.php">
					<div class="form-group">
						<div class="col-sm-4">
                        <select class="form-control" name="id" >
                        
 
                        <?php 
      include ("../includes/db.php");
      
	  $get_cat = "select * from account_holder ";
	
	#$run_cat = mysql_query($get_cat);
     $run_cat = $conn->query($get_cat);
     
	
	while ($row=$run_cat->fetch_row()){
		
		$cat_id = $row[0];
		$cat_title = $row[4];
		echo "<option value='$cat_id'>$cat_title</option>" ;
		
	}
	
	
?>
                        
                   </select>
                      
						
						</div>
                        
                        <br>
                        

                        
                        <div class="col-sm-4">
							<div class="col-sm-2">
                       
							<input type="submit"  class="btn btn-primary btn-label-left" name="client" value="Submit">
							
						
                       	
						</div>
                            
						</div>
                        
							
						
							
						
                     
							
						
                   
						
					</div>
                    </form>
				
			</div>
            
		</div>
	</div>
</div>
<div class="row">
	
		
	
	<div class="col-xs-12 col-sm-8">
    <div><h4>Recent Bank Transactions</h4></div>
        
		<table class="table m-table table-bordered table-hover table-heading" > 
	
	
	<tr bgcolor="white">
   
    <th>Full Name</th>
    <th>Desc</th>
        <th>Process</th>
        <th>Amount</th>
							<th>Date</th>
							
	</tr>
<?php
include_once '../includes/dbMySql.php';
$con = new DB_con();

$res=$con->transact();


while($row=$res->fetch_row())
{ ?>

<tr align="center" bgcolor="#dedddc" style="font-size:12px">
		
        
                            <td ><?php echo $row[1] ?></td>
                            <td ><?php echo $row[2] ?></td>
                            <td ><?php echo $row[5] ?></td>
                            <td ><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
      <?php  }
?>                            
                          
                            
                            
	</tr>
</table>
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