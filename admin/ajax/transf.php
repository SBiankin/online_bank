<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Transfers</a></li>
		</ol>
		<div id="social" class="pull-right">
		
		</div>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	
    
	<div class="clearfix visible-xs"></div>
	
			</div>
		</div>
	</div>
</div>
<!--End Dashboard 1-->
<!--Start Dashboard 2-->
<div class="row-fluid">
	<div id="dashboard_links" class="col-xs-12 col-sm-2 pull-right">
		<ul class="nav nav-pills nav-stacked">
			<!--<li class="active"><a href="#" class="tab-link" id="overview">Overview</a></li>
			<li><a href="#" class="tab-link" id="clients">Clients</a></li>
			<li><a href="#" class="tab-link" id="graph">Statistics</a></li>-->
			<!--<li><a href="#" class="tab-link" id="servers">Servers</a></li>-->
			<!--<li><a href="#" class="tab-link" id="planning">Planning</a></li>-->
			<!--<li><a href="#" class="tab-link" id="netmap">Network map</a></li>-->
			<!--<li><a href="#" class="tab-link" id="stock">Yahoo finance</a></li>-->
		</ul>
	</div>
	<div id="dashboard_tabs" class="col-xs-12 col-sm-10">
		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: visible; position: relative;">
			<div id="ow-marketplace" class="col-sm-12 col-md-6">
				<div id="ow-setting">
					
				</div>
				<h4 class="page-header">TRANSFER DETAILS</h4>

<table class="table m-table table-bordered table-hover table-heading" > 
	
	
	<tr bgcolor="white">
   
    <th>Full Name</th>
    <th>Account Name</th>
        <th>Bank Name</th>
        <th>Account No.</th>
							<th>Routing No.</th>
							<th>Bank Address</th>
                            <th>Receiving Country</th>
                            <th>State</th>
                            <th>City</th>
							<th>Zip COde</th>
                            <th>Transfer Amount</th>
                            
	</tr>
<?php
include_once '../includes/dbMySql.php';
$con = new DB_con();

$res=$con->transin();


while($row=mysql_fetch_row($res))
{ 
?>
<tr align="center" bgcolor="#dedddc" style="font-size:12px">
		<td ><?php echo $row[1] ?></td>
        
        <td ><?php echo $row[2] ?></td>
                            <td ><?php echo $row[3] ?></td>
                            <td ><?php echo $row[4] ?></td>
                            <td ><?php echo $row[5] ?></td>
                            <td><?php echo $row[6] ?></td>
                            <td><?php echo $row[7] ?></td>
                            <td><?php echo $row[8] ?></td>
                            <td><?php echo $row[9] ?></td>
                            <td><?php echo $row[10] ?></td>
                            <td><?php echo $row[11] ?></td>
                            
                            
                            
	</tr>
<?php } ?>
</div>
</table>







				
			</div>
			<div class="col-xs-12 col-md-6">
				<div id="ow-donut" class="row">
					<div class="col-xs-4">
						
					</div>
					<div class="col-xs-4">
						
					</div>
					<div class="col-xs-4">
						
					</div>
				</div>
				<!--<div id="ow-activity" class="row">
					<div class="col-xs-2 col-sm-1 col-md-2">
						<div class="v-txt">ACTIVITY</div>
					</div>
					<div class="col-xs-7 col-sm-5 col-md-6">
						<div class="row"><i class="fa fa-code"></i> Release published <span class="label label-default pull-right">01:17:34</span></div>
						<div class="row"><i class="fa fa-cloud-upload"></i> Backup created <span class="label label-default pull-right">03:23:34</span></div>
						<div class="row"><i class="fa fa-camera"></i> Snapshot created <span class="label label-default pull-right">04:22:11</span></div>
						<div class="row"><i class="fa fa fa-money"></i> Invoice pay <span class="label label-default pull-right">05:11:51</span></div>
						<div class="row"><i class="fa fa-briefcase"></i> Project edited <span class="label label-default pull-right">04:52:23</span></div>
						<div class="row"><i class="fa fa-floppy-o"></i> Project saved <span class="label label-default pull-right">07:11:01</span></div>
						<div class="row"><i class="fa fa-bug"></i> Bug fixed <span class="label label-default pull-right">09:10:31</span></div>
					</div>
-->					
				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Dashboard Tab 1-->
		<!--Start Dashboard Tab 2-->
		
		<!--End Dashboard Tab 2-->
		<!--Start Dashboard Tab 3-->
		
		<!--End Dashboard Tab 7-->
	</div>
	<div class="clearfix"></div>
</div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Load Springy plugin and run callback for draw network map for dashboard
	LoadSpringyScripts(SpringyNetmap);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
	// Run script for stock block
	CreateStockPage();
});
</script>
