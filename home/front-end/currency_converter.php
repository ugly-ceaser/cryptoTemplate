﻿<!DOCTYPE html>
<html lang="en">
	
<?php include 'stylelinks.php';?>
<body class="theme-warning bg-light-body">
<?php include 'header.php';?>	
	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Currency Converter</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Trade</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="box bg-transparent no-shadow">
						<div class="box-body">
							<h1 class="page-header text-center no-border fw-600 fs-40 my-25"><span class="text-primary">Buy</span> and <span class="text-danger">Sell</span> Coins at the<br> Crypto without additional fees</h1>
							<h4 class="subtitle text-center">Buy now and get +30% extra bonus Minimum pre-sale<br> amount 50 Crypto Coin. We accept BTC crypto-currency.</h4>
							<div class="row">
								<div class="col-12">
									<div class="exchange-calculator text-center mt-35">
										<input type="text" class="form-control" name="coins-exchange" placeholder="" value="10.1548">                
										<select class="coins-exchange" name="state">
										   <option value="BTC">BTC</option>
										   <option value="BTC">Ethereum</option>
										   <option value="Ripple">Ripple</option>
										   <option value="Ripple">Bitcoin Cash</option>
										   <option value="Ripple">Cardano</option>
										   <option value="Ripple">Litecoin</option>
										   <option value="Ripple">NEO</option>
										   <option value="Ripple">Stellar</option>
										   <option value="Ripple">EOS</option>
										   <option value="Ripple">NEM</option>
										</select>
										<div class="equal"> = </div>
										<input type="text" class="form-control" name="money-exchange" placeholder="" value="125.158">                
										<select class="money-exchange" name="state">
										   <option value="USD">USD</option>
										   <option value="EURO">EURO</option>
										</select>
								   </div>
								   <div class="text-center mt-15 mb-25">
										<a href="#" class="btn btn-primary mx-auto">EXCHANGE NOW</a>
								   </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include 'footer.php';?>
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script>
		if ($('.coins-exchange').length) {
		   $('.coins-exchange').select2();
		}
		if ($('.money-exchange').length) {
		   $('.money-exchange').select2();
		}
	</script>
	
	
	<!-- CryptoCurrency front end -->
	<script src="js/template.js"></script>
	
</body>
</html>
