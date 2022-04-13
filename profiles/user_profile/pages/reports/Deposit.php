


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../home/front-end/logo-light-text2.png">

    <title>GTPA - Transactions Page </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="../../css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../../css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="../../css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<?php include '../header2.php';?>	




  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crypto Summary
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Reports</a></li>
        <li class="breadcrumb-item active">Crypto Summary</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  <div class="row">
			
			<div class="col-lg-8 col-md-8">
		    	<div class="box pull-up">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						  <div class="row">
							  <div class="col-sm-12 col-md-5">	  
								  <div class="text-center">
								  <form action="../../../../publicScript/conn.php" method="post">
										  <div class="input-group mb-15">
												  
											  <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
												  
												  <select name="coin" id="select" class="form-control ps-15 bg-transparent" required>
													  <option value="">Select Coin</option>	
													  <option value="usdt">USDT</option>
													  <option value="btc">BTC</option>
													  <option value="eth">ETH</option>
											  
												  </select>
										  </div>
		  
											  <div class="input-group mb-15">
												  <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
												  <input type="text" name="amount" class="form-control ps-15 bg-transparent" placeholder="Amount" required>
		  
											  </div>
		  
											  
		  
											  <div class="input-group mb-15">
												  <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
												  <select  name = "network" class="form-control ps-15 bg-transparent" required>
													  <option value="">Select Network</option>	
													  <option value="TRC20">TRC20</option>
													  <option value="Bitcoin Network">BTC Network</option>
													  <option value="Etherum Network">ETH Network</option>
												  </select>
											  </div>
		  
											  <div class="input-group mb-15">
												  <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
												  <input type="text" name="trxid" class="form-control ps-15 bg-transparent" placeholder="Transaction id" required>
											  </div>
											  
											  <div class="form-group">
												<input class="form-control" name="user" value="<?php echo $_id =  $id ? $id : "Not Verified"; ?>" hidden placeholder="To:">
											</div>

											<div class="form-group">
												<input class="form-control" name="trxType" value="deposit" hidden >
											</div>

											
											  
											  <div class="col-12 text-center">
												<input type="submit" class="btn btn-info w-p100 mt-15" name="deposit" value="UPLOAD">
											  </div>
									  </form>
								  </div>
							  </div>

							  <div class="col-sm-12 col-md-7">
									<img id="img" src="../../../images/" class="img-responsive" alt="SELECT COIN">
									<h2 id="textBox" ></h2>
							  </div>
						  </div>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs3" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-4 col-md-4">
		    	<div class="box pull-up">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
						</div>
						<div>
						  <h1 class="no-margin text-bold text-success">How To Deposit</h1>
						</div>
					  </div>
					  <div class="flexbox align-items-center mt-5">
							<div>
							<p class="no-margin font-weight-600"><span class="text-yellow"><h5>1: Select the Asset you want to Deposit</h5></p>
							</div>
					 	</div>

						 <div class="flexbox align-items-center mt-5">
							<div>
							<p class="no-margin font-weight-600"><span class="text-yellow"><h5>2: Copy the wallet address or Scan the wallet Barcode</h5></p>
							</div>
					 	</div>

						 <div class="flexbox align-items-center mt-5">
							<div>
							<p class="no-margin font-weight-600"><span class="text-yellow"><h5>3: Trans the Asset to the Address</h5></p>
							</div>
					 	</div>

						 <div class="flexbox align-items-center mt-5">
							<div>
							<p class="no-margin font-weight-600"><span class="text-yellow"><h5>4: Copy the Transaction id</h5></p>
							</div>
					 	</div>

						 <div class="flexbox align-items-center mt-5">
							<div>
							<p class="no-margin font-weight-600"><span class="text-yellow"><h5>5: Fill the Deposit form and Upload</h5></p>
							</div>
					 	</div>

					  



				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs4" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
	   </div>
	  <div class="row">
		
		<div class="col-lg-12 col-12">
		  <!-- Default box -->
		  <div class="box box-solid bg-dark">
			<div class="box-header with-border">
			  <h3 class="box-title">Pending Deposit</h3>

			  
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered no-margin">
						<tbody>
						<thead>					
							<tr class="bg-pale-dark">

							<th>Transaction id</th>
							  <th>Amount</th>
							  <th>Transaction Status</th>
							  <th>Date</th>
							</tr>
						  </thead>
						<tbody>

						<?php
							$query = "SELECT * FROM `GeneralAccount` WHERE id = :id AND trxStatus = :trxStatus AND 	trxType = :trxType";
							$result = $conn->prepare($query);
							$result->execute([
								'id' => $id,
								'trxStatus' => "pending",
								'trxType' => "deposit"
							
							
							]);

							if($result->rowCount()) {
								foreach($result->fetchAll() as $txr):
									?>
										<tr>
											
										<tr>
											<td><?= $txr['trxId'] ?> </td>
											<td><?= "$ ". $txr['amount'] ?> </td>
											<td><?= $txr['trxStatus'] ?> </td>
											<td><?= date("D, m Y", strtotime($txr['datee'])); ?> </td>
										</tr>
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
 
  <?php include './footer.php';?>
		<script src="../../js/custom.js"></script>

	<!-- jQuery 3 -->
	<script src="../../../assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="../../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Chart -->
	<script src="../../../assets/vendor_components/chart.js-master/Chart.min.js"></script>
	<script src="../../js/pages/chartjs-int.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="../../js/template.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="../../js/demo.js"></script>
	

</body>
</html>
