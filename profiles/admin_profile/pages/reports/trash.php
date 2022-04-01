<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Crypto Admin - Members Profile</title>
  
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
        Mailbox
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-12">
		  <div class="box box-body h-p100">
			  <a href="send_msg.php" class="btn btn-success btn-block btn-shadow margin-bottom p-15">Compose</a>

			  <div class="box no-shadow">
				<div class="box-body no-padding mailbox-nav">
				  <ul class="nav nav-pills flex-column">
					<li class="nav-item"><a class="nav-link " href="inbox.php"><i class="ion ion-ios-email-outline"></i> Inbox
					  <span class="label label-success pull-right">12</span></a></li>
					<li class="nav-item"><a class="nav-link " href="sent.php"><i class="ion ion-paper-airplane"></i> Sent</a></li>
					
					<li class="nav-item"><a class="nav-link" href="starred.php"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right">14</span></a>
					</li>
					<li class="nav-item"><a class="nav-link active" href="trash.php"><i class="ion ion-trash-a"></i> Trash</a></li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /. box -->
			  
			
		  </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-12">			
		  
			<div class="box">
			  <div class="box-header bg-dark no-border">
				<h3 class="box-title">Mailbox</h3>
				  <div class="box-controls pull-right align-items-baseline">	
					  <div class="btn-group">
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
					  </div>					  				
					  <h5 class="mb-0 pr-10">1-50/200</h5>
				  </div>
				  
				  <div class="mailbox-controls px-0 pb-0">
					<!-- Check all button -->
					<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
					</button>
					<div class="btn-group">
					  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-trash-a"></i></button>
					  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-reply"></i></button>
					  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-share"></i></button>
					</div>
					<!-- /.btn-group -->
					<div class="btn-group">
					  <div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						  <i class="ion ion-flag margin-r-5"></i>
						  <span class="caret"></span>
						</button>
						
					  </div>
					  <div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						  <i class="ion ion-folder margin-r-5"></i>
						  <span class="caret"></span>
						</button>
						
					  </div>
					</div>
					<!-- /.btn-group -->
					<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
					  
					<div class="lookup lookup-lg lookup-right pull-right">
					  <input type="text" name="s">
					</div>
				  </div>
			  </div>

			  <div class="box-body">				
				<div class="mailbox-messages">
					<div class="table-responsive">
						<table class="table table-hover b-2">
						  <tbody>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Andrew</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">3 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">James</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">14 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">David</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">15 hours ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Benjamin</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">25 hours ago</td>
						  </tr>
						 <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Logan</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">3 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">Christopher</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">14 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">Joseph</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">15 hours ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Jackson</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">25 hours ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Gabriel</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">3 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">Ryan</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">14 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">Samuel</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">15 hours ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">John</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">25 hours ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Christian</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">3 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">Brayden</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">14 mins ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
							<td class="mailbox-name">Evan</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
							<td class="mailbox-date">15 hours ago</td>
						  </tr>
						  <tr>
							<td><input type="checkbox"></td>
							<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
							<td class="mailbox-name">Jordan</td>
							<td class="mailbox-subject"><a href="read-trash.php"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
							</td>
							<td class="mailbox-attachment"></td>
							<td class="mailbox-date">25 hours ago</td>
						  </tr>
						  </tbody>
						</table>
					<!-- /.table -->
					</div>
				  </div>
			  </div>			  
				<div class="box-footer no-padding bg-dark">
				  <div class="mailbox-controls">
					<!-- Check all button -->
					<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
					</button>
					<div class="btn-group">
					  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-trash-a"></i></button>
					  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-reply"></i></button>
					  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-share"></i></button>
					</div>
					<!-- /.btn-group -->
					<div class="btn-group">
					  <div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						  <i class="ion ion-flag margin-r-5"></i>
						  <span class="caret"></span>
						</button>
						
					  </div>
					  <div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						  <i class="ion ion-folder margin-r-5"></i>
						  <span class="caret"></span>
						</button>
						
					  </div>
					</div>
					<!-- /.btn-group -->
					<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
					<div class="pull-right">
					  1-50/200
					  <div class="btn-group">
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
					  </div>
					  <!-- /.btn-group -->
					</div>
					<!-- /.pull-right -->
				  </div>
				</div>
			</div> 
			
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->->
 
   
<?php include './footer.php';?>
  


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
