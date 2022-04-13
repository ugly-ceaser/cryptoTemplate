<?php 

/*session_start();





if (!isset($_SESSION["id"])) {
    header("Location:../../home/front-end/login.php?message= please login");
}
else{
	$id = $_SESSION["id"] ;

}*/
?>


	
	<header class="top-bar dark-overlay-top">
		<div class="topbar">

		  <div class="container">
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
					<li class="ms-10 pe-10"><a href="#"><i class="fa fa-question-circle"></i> Ask a Question</a></li>
					<li class="ms-10 pe-10"><a href="contact_us.php"><i class="fa fa-envelope"></i> support@globaltradeprofessionalalliance.com</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				<div class="topbar-call text-center text-lg-end topbar-right">
				  <ul class="list-inline d-lg-flex justify-content-end">				  
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option>USD</option>
							<option>EUR</option>
							<option>GBP</option>
							<option>INR</option>
						</select>
					 </li>
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option data-icon="flag-icon flag-icon-us">Eng USA</option>
							<option data-icon="flag-icon flag-icon-gb">Eng UK</option>
						</select>
					 </li>
					 <li class="me-10 ps-10"><a href="login.php"><i class="fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
					 <li class="me-10 ps-10"><a href="login.php"><i class="fa fa-dashboard d-md-inline-block d-none"></i> My Account</a></li>
				  </ul>
				</div>
			  </div>
			 </div>
		  </div>
		</div>

		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="index.php" class="brand">
					<img style="width: 6000px;"src="./logo-light-text2.png" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">				
				<li >
					<a href="index.php">Home</a>
					
				</li>				
				<li>
					<a href="packages.php">Packages</a>
				</li>				
				<li>
					<a href="about.php">About Us</a>
					
				</li>
                <li class="dropdown">
					<a href="#">Other Services</a>
					<ul class="dropdown-menu">
						<li>
							<a href="./contact_us.php">Real Estate Investment</a>
							
						</li>
						<li>
							<a href="./contact_us.php">Oil Services Investment</a>
							
						</li>
						<li>
							<a href="./contact_us.php">Asset Management Services</a>
							
						</li>
					</ul>
				</li>


								
					
				<li>
					<a href="contact_us.php">Contact</a>
				</li>
			</ul>
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="register.php" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				
			</ul>

			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>