
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../images/favicon.ico">
	
		<title>GTAP - Dashboard</title>
		
		<!-- Bootstrap 4.0-->
		<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">
		
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
		
		<!--amcharts -->
		<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
		
		<!-- Bootstrap-extend -->
		<link rel="stylesheet" href="css/bootstrap-extend.css">
		
		<!-- theme style -->
		<link rel="stylesheet" href="css/master_style.css">
		
		<!-- Crypto_Admin skins -->
		<link rel="stylesheet" href="css/skins/_all-skins.css">
		
	
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	
		 
	</head>


	<?php include 'header.php';

	include("../../publicScript/conn.php");

	

	
	?>	

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	
      
		<div class="row">
        <div class="col-12 col-lg-3">
          <div class="box box-body pull-up bg-hexagons-white">
            <div class="media align-items-center p-0">
            <div class="text-center">
              <a href="#"><i class=" BTC mr-5" title="BTC"></i></a>
            </div>
            <div>
              <h2 class="no-margin"><?php echo $_id =  $id ? $id : "Not Verified"; ?></h2>
			 
			  <div>
			 <br>
			  

			  </div>
            </div>
            </div>
            <div class="flexbox align-items-center mt-25">
            <div>
              <p class="no-margin"><span class="text-gray"></span> <span class="text-info"> </span></p>
            </div>
            <div class="text-right">
              <p class="no-margin"><span class="text-success">Identification No</span></p>
            </div>
            </div>
          </div>
        </div>
       
       <div class="col-lg-3 col-12">			
        <div class="box box-body pull-up bg-hexagons-white">
          <div class="media align-items-center p-0">
          <div class="text-center">
            <a href="#"><i class=" NEO mr-5" title="NEO"></i></a>
          </div>
          <div>
            <h3 class="no-margin">Contract Plan</h3>
          </div>
          </div>
          <div class="flexbox align-items-center mt-25">
          <div>
            <p class="no-margin"> <span class="text-gray"></span> <span class="text-info"></span></p>
          </div>
          <div class="text-right">
            <p class="no-margin"><span class="text-success"></span> RIO</p>
			<p class="no-margin"><span class="text-success">Bonus</span> $8100</p>
			
          </div>
          </div>
        </div>
       </div>
      
       <div class="col-lg-6 col-md-12">
        <div class="box box-body pull-up bg-hexagons-white">
          <div class="media align-items-center p-0">
          <div class="text-center">
            <a href="#"><i class=" DASH mr-5" title="DASH"></i></a>
          </div>
          <div class="row d-flex justify-center align-center">
			  <div class="col-8">
            <h3 class="no-margin">  </h3>

			</div>

			<div class="col-4">
			<span> <h3></h3></span>
			</div>
			
          </div>
          </div>
          <div class="flexbox align-items-center mt-20">
          <div>
           <h2> <p class="no-margin">Ledger Balance<span class="text-gray"></span> <span class="text-info"></span></p></h2>
          </div>
          <div class="text-right">
            <h3><p class="no-margin"><span class="text-success"><?php echo( getUserDeposit($conn, $id)['amt']); ?></span></p><h3>
          </div>
          </div>
        </div>
       </div>
				
		</div>
			
			
			
	
		
	
		
		
		<div class="row">		
		  
		  
			
		  <div class="col-lg-12 col-12">
			<div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Latest Transactions</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
					<div class="table-responsive">
					<table class="table table-bordered no-margin">
						  <thead>					
							<tr class="bg-pale-dark">
							  <th>Transaction id</th>
							  <th>Amount</th>
							  <th>Transaction Type</th>
							  <th>Transaction Status</th>
							  <th>Date</th>
							</tr>
						  </thead>
						  <tbody>
						<?php
							$query = "SELECT * FROM `GeneralAccount` WHERE id = ?";
							$result = $conn->prepare($query);
							$result->execute([$id]);

							if($result->rowCount()) {
								foreach($result->fetchAll() as $txr):
									?>
										<tr>
											<td><?= $txr['trxId'] ?> </td>
											<td><?= "$ ". $txr['amount'] ?> </td>
											<td><?= $txr['trxType'] ?> </td>
											<td><?= $txr['trxStatus'] ?> </td>
											<td><?= date("D, m Y", strtotime($txr['datee'])); ?> </td>
										</tr>
									<?php
								endforeach;
							}

							else {
								?>

									<tr>
										<td style="text-align: center; font-size: 1.5rem; color: #777;" colspan="5">No Transactions Found</td>
									</tr>

								<?php
							}

						?>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

		  </div> 
		 
			
		</div>	
		
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#"></a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.globaltradeprofessionalliance.com/">Global Trade Professional AlSliance</a>. All Rights Reserved.
  </footer>

  
   
   
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
    <!--amcharts charts -->
	<script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
	<script src="http://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>	
	
	<!-- webticker -->
	<script src="../assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="../assets/vendor_components/echarts-master/dist/echarts-en.min.js"></script>
	<script src="../assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js"></script>
	
	<!-- This is data table -->
    <script src="../assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	<script src="js/pages/dashboard-chart.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="js/demo.js"></script>

	
</body>
</html>
