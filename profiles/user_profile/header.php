

<?php 

session_start();
include("../../publicScript/conn.php");

// require("../../publicScript/conn.php");

if (!isset($_SESSION["id"])) {
    header("Location:../../home/front-end/login.php?message= please login");
}
else{
	$id = $_SESSION["id"] ;
}
?>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="../images/avatarx.png" alt="logo"></span>
		 
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="../images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="../images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
          
        
                <!-- /.row -->
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="#">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>User </b>Profile</span>
			</a>
		</div>
        <div class="image">
          <img src="../../publicScript/uploads/<?php echo getUserdit($conn, $id)['profile_pic']; ?>" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>User Profile</p>
			 <a href="../../publicScript/logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        
       

        <li class="active">
          <a href="index.php">
            <i class="icon-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/reports/Deposit.php">Deposit</a></li>
            <li><a href="pages/reports/withdrawal.php">Withrawal</a></li>
            
           
           	
           
          </ul>
        </li>


        
        
        <li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="pages/reports/member-profile.php">Profile</a></li>			  
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="pages/reports/send_msg.php">Compose</a></li>		
            <li><a href="pages/reports/inbox.php">Inbox</a></li>		  
            <li><a href="pages/reports/sent.php">Sent</a></li>	
            	
          </ul>
        </li>
       

        
        
      </ul>
    </section>
  </aside>