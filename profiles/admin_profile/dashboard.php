<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../images/favicon.ico">
	
		<title> Admin - Dashboard</title>
		
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


	<?php include 'header.php';?>	







  

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
              <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
            </div>
            <div>
              <h2 class="no-margin">Users</h2>
            </div>
            </div>
            <div class="flexbox align-items-center mt-2">
            <div>
              <p class="no-margin"> <span class="text-gray"></span> <span class="text-info"></span></p>
            </div>
            <div class="text-right">
              <p class="no-margin"><span class="text-success h2">
			  <?=  count(getUsers($conn)); ?>
			  </span></p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12">					
        <div class="box box-body pull-up bg-hexagons-white">
          <div class="media align-items-center p-0">
          <div class="text-center">
            <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
          </div>
          <div>
            <h2 class="no-margin">Deposits</h2>
          </div>
          </div>
          <div class="flexbox align-items-center mt-2">
          <div>
            <p class="no-margin"><span class="text-gray"></span> <span class="text-info"></span></p>
          </div>
          <div class="text-right">
            <p class="no-margin"><span class="text-danger h2">
				<?= "$" . number_format(getAmount($conn, "deposit")); ?>
			</span></p>
          </div>
          </div>
        </div>		
        </div>
       <div class="col-lg-3 col-12">			
        <div class="box box-body pull-up bg-hexagons-white">
          <div class="media align-items-center p-0">
          <div class="text-center">
            <a href="#"><i class="cc NEO mr-5" title="NEO"></i></a>
          </div>
          <div>
            <h2 class="no-margin">Withdrawal</h2>
          </div>
          </div>
          <div class="flexbox align-items-center mt-2">
          <div>
            <p class="no-margin"> <span class="text-gray"></span> <span class="text-info"></span></p>
          </div>
          <div class="text-right">
            <p class="no-margin"><span class="text-success h2">
				<?= "$" . number_format(getAmount($conn, "withdraw")); ?>
			</span></p>
          </div>
          </div>
        </div>
       </div>
      
       <div class="col-lg-3 col-12">
        <div class="box box-body pull-up bg-hexagons-white">
          <div class="media align-items-center p-0">
          <div class="text-center">
            <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
          </div>
          <div>
            <h2 class="no-margin"> Pending</h2>
          </div>
          </div>
          <div class="flexbox align-items-center mt-2">
          <div>
            <p class="no-margin"> <span class="text-gray"></span> <span class="text-info"></span></p>
          </div>
          <div class="text-right">
            <p class="no-margin"><span class="text-danger h2">
				<?= "$" . number_format(getAmountPending($conn)); ?>
			</span></p>
          </div>
          </div>
        </div>
       </div>
				
		</div>
			
			
			
	
		
	
		
		
		<div class="row">		
		  
		  
			
		  <div class="col-lg-12 col-12">
			<div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Users</h4>
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
							  <th>Name</th>
							  <th>Emails</th>
							  <th>Last Login</th>
							  <th> Date Registered</th>
							  <th>Withdrawal</th>
							</tr>
						  </thead>
						  <tbody>
							  <?php if(count(getUsers($conn))): ?>
								<?php foreach(getUsers($conn) as $user): ?>
									<tr>
										<td>
											<a href="#" class="text-yellow text-capitalize hover-warning">
												<?= $user["fname"] . " " . $user["lname"]; ?>
											</a>
										</td>
										<td>
											<?= $user["email"]; ?>
										</td>
										<td>
											<time class="timeago" datetime="<?= strtotime($user["lastlog"]); ?>" title="<?= strtotime($user["lastlog"]); ?>">
												<?= date("D, m Y", strtotime($user["lastlog"])) ?>
											</time>
										</td>
										<td>
											<?= date("D, m Y", strtotime($user["datee"])); ?>
										</td>
										<td>
											<?php if(isset($_GET["update"])): ?>
												<?php if($user["id"] == $_GET["update"]): ?>
													<form method="post" action="./handler/user_handler.php" class="d-flex">
														<input type="text" name="amount" class="py-2 text-white bg-transparent" style="flex: 1; border: 1px solid #777;">
														<button class="btn-primary btn-sm" name="update" value="<?= $user["id"]; ?>">Update</button>
													</form>
												<?php else: ?>
													<div class="d-flex align-items-center">
														<span class="h4 mb-0" style="flex: 1"><?= "$" . number_format($user["availableBalance"]); ?></span>
														<a href="?update=<?= $user["id"]; ?>" class="btn text-capitalize btn-primary btn-sm ml-2">
															update balance
														</a>
													</div>
												<?php endif; ?>
											<?php else: ?>
												<div class="d-flex align-items-center">
													<span class="h4 mb-0" style="flex: 1"><?= "$" . number_format($user["availableBalance"]); ?></span>
													<a href="?update=<?= $user["id"]; ?>" class="btn text-capitalize btn-primary btn-sm ml-2">
														update balance
													</a>
												</div>
											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="5">
										<div class="d-flex h-25 align-items-center justify-content-center">
											No user found
										</div>
									</td>
								</tr>
							<?php endif; ?>
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
