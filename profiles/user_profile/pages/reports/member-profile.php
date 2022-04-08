


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>GTPA - Members Profile</title>
  
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
        Members Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Member</a></li>
        <li class="breadcrumb-item active">Member Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box bg-yellow bg-deathstar-dark">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded img-fluid mx-auto d-block" src="../../../images/5.jpg" alt="User profile picture">

              <h2 class="profile-username text-center mb-0"><?php echo getUserdit($conn, $id)['fname']; ?></h2>

              <h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i><?php echo getUserdit($conn, $id)['email']; ?></h4>
				
             
            
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-8 col-lg-7">
          <div class="box box-solid bg-black">
			<div class="box-header with-border">
			  <h3 class="box-title">Personal details</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col-12">

        <form action="../../../../publicScript/conn.php" method="post">
              <div class="form-group">
				<input class="form-control" name="user" value="<?php echo $_id =  $id ? $id : "Not Verified"; ?>" hidden placeholder="To:">
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">First Name</label>
					  <div class="col-sm-10">
						<input class="form-control" name="fname" placeholder="First Name" type="text" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Last Name</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" name="lname" placeholder="Last Name" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Email Adress</label>
					  <div class="col-sm-10">
						<input class="form-control" type="email" name="email" placeholder="Email Address" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Phone Number</label>
					  <div class="col-sm-10">
						<input class="form-control" type="tel" name="phone"  placeholder="Enter your phone number" required>
					  </div>
					</div>

					<!-- <div class="form-group row">
								<label class="col-sm-2 col-form-label">Profile Picture</label>
								<div class="col-sm-10">
									<input class="form-control" name="file "type="file" placeholder="Profile Picture">
								</div>
							</div> -->


					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" name="user_profile" class="btn btn-yellow">Submit</button>
					  </div>
					</div>

				</form>	
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
          <div class="box box-solid bg-black">
			<div class="box-header with-border">
			  <h3 class="box-title"> Update Wallet Details</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col-12">

				<form action="../../../../publicScript/conn.php" method="post">

           				<div class="form-group">
							<input class="form-control" name="user" value="<?php echo $_id =  $id ? $id : "Not Verified"; ?>" hidden placeholder="To:">
						</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Wallet Name</label>
					  <div class="col-sm-10">
						<input class="form-control" name="walletName" type="text" placeholder="Wallet Name" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Wallet Addresss</label>
					  <div class="col-sm-10">
						<input class="form-control" name="walletAddress" type="text" placeholder="Your Wallet Address" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Re-type Wallet Addresss</label>
					  <div class="col-sm-10">
						<input class="form-control" name="retype_wallet" type="text" placeholder="Re-type Wallet Address" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Crypto Curency</label>
					  <div class="col-sm-10">
						<input class="form-control" name="coin" placeholder="Crypto Curency"type="text" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Crypto Curency Network</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" name="network" placeholder="network" required>
					  </div>
					</div>

					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" name= "walletupdate" class="btn btn-yellow">Submit</button>
					  </div>
					</div>
					
					
				</form>	
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
          <div class="box box-solid bg-black">
			<div class="box-header with-border">
			  <h3 class="box-title">Update Password  Details</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
			  
					<div class="col-12">
						
						
						<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">

               <div class="form-group">
												<input class="form-control" name="user" value="<?php echo $_id =  $id ? $id : "Not Verified"; ?>" hidden placeholder="To:">
											</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" placeholder="password">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Re-Type Password</label>
								<div class="col-sm-10">
									<input class="form-control" type="retype_password" placeholder="Re-type Password">
								</div>
							</div>

							

							<div class="form-group row">
								<label class="col-sm-2 col-form-label"></label>
								<div class="col-sm-10">
									<button type="submit" name= "pass_update" class="btn btn-yellow">Update</button>
								</div>
							</div>
						</form>	
					</div>

	         
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
   
  <?php include './footer.php';?>
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


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
	
	<!-- Crypto_Admin App -->
	<script src="../../js/template.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="../../js/demo.js"></script>
	

</body>
</html>
