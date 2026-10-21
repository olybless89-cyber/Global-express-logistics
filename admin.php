<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, s_name, r_name, pick_date, pick_date, status
		FROM tbl_courier
		WHERE status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);	
?>
<!DOCTYPE html>
<!-- saved from url=(0041)#/view/?v=Statement -->
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>DHL EXPRESS LOGISTICS.</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>



<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="##" class="logo">
					<img src="assets/home/logo.png"  width="150" height="50" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						
						
						
															<!-- GTranslate language selector - https://gtranslate.io/ -->

<script>window.gtranslateSettings = {"default_language":"en","switcher_horizontal_position":"left","switcher_vertical_position":"bottom","flag_style":"2d"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

				 <div id="news">
				
			  </div>

						
						
					</div>
					
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="scroll-wrapper sidebar-wrapper scrollbar scrollbar-inner" style="position: relative;"><div class="sidebar-wrapper scrollbar scrollbar-inner scroll-content" style="height: 654px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
			 
					<ul class="nav nav-primary">
                                             <!------Side Bar----------->
                                            	   <center>
          <table>
              <tbody><tr>
			  	    <td width="180" height="120">
			                               	   <center>
          <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d7e7de324c9e" width="120" height="120"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold"><a href="//24timezones.com/world_directory/time_in_pago_pago.php" style="text-decoration: none" class="clock24" id="tz24-1568570851-c11033-eyJzaXplIjoiMTUwIiwiYmdjb2xvciI6IkZGOTkwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ3ZTdkZTMyNGM5ZSJ9" title="Pago Pago clock" target="_blank" rel="nofollow"></a></td></tr>
          </table>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>

</center>






	</tr>
          </tbody></table>
		  
		  
	
		  
		  
		  
		  
		  
<script type="text/javascript" src="assets/home/l.js.download" async=""></script>

</center>

<li class="nav-section"> 
</li>
<li class="nav-item active"> <a href="admin.php"><img src="assets/home/1.png"> <p style="color:blue;"> <strong>&nbsp;&nbsp; Main Menu</strong></p> </a> </li>

<li class="nav-item"> <a href="add-courier.php"><img src="assets/home/8.png"> <p style="color:green;"> <strong>&nbsp;&nbsp; Create Shippments</strong></p> </a> </li><li class="nav-item"> <a href="courier-list.php"><img src="assets/home/5.PNG"> <p style="color:brown;"> <strong>&nbsp;&nbsp;List of Shippments</strong></p> </a> </li>
<li class="nav-item"> <a href="delivered-list.php"><img src="assets/home/10.png"> <p style="color:red;"> <strong>&nbsp;&nbsp; Delivered Shippments</strong></p> </a> </li>
<li class="nav-item"> <a href="search-edit.php"><img src="assets/home/2.png"><p style="color:brown;"> <strong>&nbsp;&nbsp;Search & Edit</strong></p> </a> </li> 
<li class="nav-item"> <a href="change-password.php"><img src="assets/home/4.png"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Change Password</strong></p> </a> </li> 
<li class="nav-item"> <a href="process.php?action=logOut"><img src="assets/home/9.png"> <p style="color:teal;"> <strong>&nbsp;&nbsp; Logout</strong></p> </a> </li> 
							
 
 
                                              	   
                                            	   <!------Side Bar----------->
						 
					</ul>
				</div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle" style="width: 100px;"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle" style="height: 100px;"></div></div></div></div>
		</div>
		
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				   <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Admin Dashboard</h2>
								<h5 class="text-white op-7 mb-2">
								    <strong>Welcome back:: Administrator</strong><br>
                            logged  User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?>						    
								    
								</h5>
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Overall Shippments</div>
									<div class="card-category">Monthly information about transactional statistics</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Pending Shippments</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">All Shippments</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Completed Shippments</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Why are we the Best</div>
									<div class="row py-3">
				DHL EXPRESS LOGISTICS Courier  is the simplest solution for Courier & Cargo Tracking Business. 
				If you need to enable Tracking Option in your existing or new website, 
				this is quickest Software Solution. You can get install it yourselves or We do 
				the installation and brand it in your name on your hosting ! The Courier Software 
				is Very easy to setup and manage powerful administration. 
				Provide online tracking system of consignment and shipping detail for International or domestic shipping.
					
					
									</div>
								</div>
							</div>
						</div>
					</div>
				<b>&nbsp;<br />
				<b>&nbsp;<br />
				<b>&nbsp;<br />
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="##">
									Secured
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="##">
									Reliable
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="##">
									Easy
								</a>
							</li>
						</ul>
					</nav>
				<div class="copyright ml-auto">
						 Copyright &copy;
             <script>
              document.write(new Date().getFullYear())

            </script>,  DHL EXPRESS LOGISTICS. All Rights Reserved <img src="assets/home/secure.gif"> 
					</div>				
				</div>
			</footer>
		</div>
		

	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script>
	<script src="assets/js/demo.js"></script>
	
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 0,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 0,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 0,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	

<div class="gtranslate_wrapper"></div>
</body>
</html>