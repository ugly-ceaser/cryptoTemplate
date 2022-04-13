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
						<h2 class="page-title text-white">Login</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Login</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Let's Get Started</h2>
						
							<p class="mb-0">Sign in to continue to CryptoCurrency.</p>							
						</div>
						<div class="p-40">
							<form action="../../publicScript/userlogin.php" method="post">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" name="username" class="form-control ps-15 bg-transparent" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password"  name="pass" class="form-control ps-15 bg-transparent" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox ms-5">
										<input type="checkbox" id="basic_checkbox_1">
										<label for="basic_checkbox_1" class="form-label">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-end">
										<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot password?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <input type="submit" class="btn btn-info w-p100 mt-15" name="login" value="Login">
									</div>
									<!-- /.col -->
								  </div>
							</form>	
							<div class="text-center">
								<p class="mt-15 mb-0">Don't have an account? <a href="register.php" class="text-warning ms-5">Register</a></p>
							</div>	
						</div>
					</div>								

					<div class="text-center">
					  <p class="mt-20">- Login With -</p>
					  <p class="d-flex gap-items-2 mb-0 justify-content-center">
						  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
						  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
						  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
						</p>	
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- <section class="bg-light py-30">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-9 col-12">
					<div class="text-md-start text-center">
						<h2><strong> CryptoCurrency: </strong> fully responsive template in the market</h2>
						<p class="mb-0">Exclusive multi-purpose lightweight responsive with powerful features.</p>
					</div>
				</div>
				<div class="col-md-3 col-12">					
					 <div class="text-md-end text-center mt-30 mt-md-0">
						<a class="btn btn-primary" href="#">Purchase Now</a> 
					 </div>
				</div>
			</div>
		</div>
	</section> -->
	
	<?php include 'footer.php';?>
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	
	<!-- CryptoCurrency front end -->
	<script src="js/template.js"></script>
	
	
	
</body>
</html>
