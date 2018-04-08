<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard -Financial Planning System</title>
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Financial Planning System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Model Inputs">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Model Inputs">
          <a class="nav-link" href="model-inputs.php">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span class="nav-link-text">Model Inputs</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profits and Loss">
          <a class="nav-link" href="profits-and-loss.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Profits and Loss</span>
          </a>
        </li>
		<!-- balance sheet -->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Balance Sheet">
          <a class="nav-link" href="balance-sheet.php">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Balance Sheet</span>
          </a>
        </li>
		<!--cash flow -->
		<li class="nav-item  active" data-toggle="tooltip" data-placement="right" title="Cash Flow">
          <a class="nav-link" href="cash-flow.php">
            <i class="fa fa-fw fa-stack-overflow"></i>
            <span class="nav-link-text">Cash Flow</span>
          </a>
        </li>
		<!--loan payment calculator-->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Loan Payment Calculator">
          <a class="nav-link" href="loan-payment.php">
            <i class="fa fa-fw fa-calculator"></i>
            <span class="nav-link-text">Loan Payment Calculator</span>
          </a>
        </li>
       
      </ul>
      
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">Cash flow</li>
		 <li class="breadcrumb-item">Edit Investing Activities</li>
      </ol>
	<!--php code here -->
	 <?php 
	include '../../connection/dbConfig.php';
	$acqsql = mysqli_query($db, "SELECT * FROM cash_flow_investing_activities WHERE id = '1'");
	$countacqsql = mysqli_num_rows($acqsql);
	if($countacqsql > 0){
		$row = mysqli_fetch_assoc($acqsql);
		$acqyear1 = $row['year1'];
		$acqyear2 = $row['year2'];
		$acqyear3 = $row['year3'];
		$acqyear4 = $row['year4'];
		$acqyear5 = $row['year5'];
		
	}
	
	//investing cash flow
	$othersql = mysqli_query($db, "SELECT * FROM cash_flow_investing_activities WHERE id = '3'");
	$countothersql = mysqli_num_rows($othersql);
	if($countothersql > 0){
		$row = mysqli_fetch_assoc($othersql);
		$otherinvestyear1 = $row['year1'];
		$otherinvestyear2 = $row['year2'];
		$otherinvestyear3 = $row['year3'];
		$otherinvestyear4 = $row['year4'];
		$otherinvestyear5 = $row['year5'];
		
	}
	
	
		?>
    <!-- end -->
	<!--display value here -->
	<table class="table table-condensed">
	<thead>
		<tr style="color:white; background-color: gray; border-bottom: 10px black;">
			<th>Investing Activities</th>
			<th>Year1</th>
			<th>Year2</th>
			<th>Year3</th>
			<th>Year4</th>
			<th>Year5</th>
			
		</tr>
	</thead>
	<tbody>
	<form action="cash_flow_investing_activities_edit_proccess.php" method="post">
		<tr>
			<td>Acquisition of business</td>
			<td><input class="form-control" type="number" name="acqyear1" value="<?php echo $acqyear1 ?>"></td>
			<td><input class="form-control" type="number" name="acqyear2" value="<?php echo $acqyear2 ?>"></td>
			<td><input class="form-control" type="number" name="acqyear3" value="<?php echo $acqyear3 ?>"></td>
			<td><input class="form-control" type="number" name="acqyear4" value="<?php echo $acqyear4 ?>"></td>
			<td><input class="form-control" type="number" name="acqyear5" value="<?php echo $acqyear5 ?>"></td>
		</tr>
		<tr>
			<td>Other investing cash flow items</td>
			<td><input class="form-control" type="number" name="otherinvestyear1" value="<?php echo $otherinvestyear1 ?>"></td>
			<td><input class="form-control" type="number" name="otherinvestyear2" value="<?php echo $otherinvestyear2 ?>"></td>
			<td><input class="form-control" type="number" name="otherinvestyear3" value="<?php echo $otherinvestyear3 ?>"></td>
			<td><input class="form-control" type="number" name="otherinvestyear4" value="<?php echo $otherinvestyear4 ?>"></td>
			<td><input class="form-control" type="number" name="otherinvestyear5" value="<?php echo $otherinvestyear5 ?>"></td>
		<tr>
		
	</tbody>
	
</table>
<div class="col-md-12" align="center">
	<a href="../cash-flow.php" class="btn btn-danger">Back</a>
	<input type="submit" class="btn btn-success" value="Save">
</div>
</form>

	<!-- end display -->
     
      
		
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © UNO Olongapo 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../../js/sb-admin-datatables.min.js"></script>
    <script src="../../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
