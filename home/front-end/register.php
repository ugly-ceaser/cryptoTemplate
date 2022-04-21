<!DOCTYPE html>
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
						<h2 class="page-title text-white">Register</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="index.php" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Register</li>
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
								
						      <p><span><h3 style="color:red"></h1></span></p>
							<h2 class="text-primary">Get started with Us</h2>
							<p class="mb-0">Register a New Membership</p>							
						</div>
						<div class="p-40">
							<form action="../../publicScript/reg.php" method="post">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" name="fname" class="form-control ps-15 bg-transparent" placeholder="First Name" required>
									</div>
								</div>

								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" name="lname" class="form-control ps-15 bg-transparent" placeholder="Last Name" required>
									</div>
								</div>



								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
										<input type="email" name = "email"class="form-control ps-15 bg-transparent" placeholder="Email" Required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" name="username" class="form-control ps-15 bg-transparent" placeholder="Username" Required>
									</div>
									
									
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" name="password" class="form-control ps-15 bg-transparent" placeholder="password" Required>
									</div>
									
									
								</div> 
							    <div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-telephone"></i></span>
										<input type="tel" name = "phoneNumber"class="form-control ps-15 bg-transparent" placeholder="Phone Number" Required>
										
									</div>
								</div>
								  <div class="row">
									<div class="col-12">
									  <div class="checkbox ms-5">
										<input type="checkbox" name ="checkbox" value ="checked" id="basic_checkbox_1" required>
										<label for="basic_checkbox_1"  class="form-label">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info w-p100 mt-15">Register</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>				
							<div class="text-center">
								<p class="mt-15 mb-0">Already have an account?<a href="login.php" class="text-danger ms-5"> Log In</a></p>
							</div>
						</div>
					</div>								

					<div class="text-center">
					  <p class="mt-20">- Register With -</p>
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
