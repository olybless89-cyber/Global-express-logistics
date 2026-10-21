<?php

require_once('database.php');
require_once('library.php');

$cons = isset($_POST['Consignment']) ? trim($_POST['Consignment']) : '';

$stmt = mysqli_prepare($dbConn, "SELECT * FROM tbl_courier WHERE cons_no = ?");
mysqli_stmt_bind_param($stmt, 's', $cons);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$no = $result ? mysqli_num_rows($result) : 0;
if($no == 1){
  while($data = dbFetchAssoc($result)) {
    extract($data);
    ?>
<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">

    <meta name="keywords"  content="#1 Best Courier & Logistics Company in UK">
    <meta name="description" content="#1 Best Courier & Logistics Company in UK">
    <title>Tracking Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="" src="application/layouts/scripts/logistics_default/vendor/scripts/jquery/jquery-1-9-1/jquery.js">    </script>
    <script type="" src="application/layouts/scripts/logistics_default/vendor/scripts/jui/jui-1-10-2/red/jquery-ui.custom.js">  </script>
    <link href="application/layouts/scripts/logistics_default/vendor/scripts/jui/jui-1-10-2/red/jquery-ui.custom.css"  media="screen" rel="stylesheet" type="text/css">
    <script type="" src="application/layouts/scripts/logistics_default/vendor/scripts/js/jquery.idTabs.min.js"></script>
    <link href="application/layouts/scripts/logistics_default/css/template.css" media="screen" rel="stylesheet"  type="text/css">
    <link href="application/layouts/scripts/logistics_default/css/general.css" media="screen" rel="stylesheet" type="text/css">
    <script type="" src="application/modules/Portfolio/js/uploader.js"></script>
    <link href="application/layouts/scripts/logistics_default/css/pagination.css" media="screen" rel="stylesheet" type="text/css">
    <link href="application/layouts/scripts/logistics_default/css/pagination.css" media="screen" rel="stylesheet"  type="text/css">
    <link href="application/layouts/scripts/logistics_default/css/menu.css" media="screen" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="css/responsives.css">
	 <link href="images/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="./file/styl.css" media="all">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

 <!-- responsive css -->
 
      <link rel="stylesheet" type="text/css" href="./process/custom-style.css">
      <link rel="stylesheet" type="text/css" href="./process/carousel.css">
      <script type="text/javascript" src="./process/jquery.min.js.download"></script>
      <script type="text/javascript" src="./process/jquery-ui.min.js.download"></script>
      <script type="text/javascript" src="./process/bootstrap.min.js.download"></script>
      <script type="text/javascript" src="./process/carousel.js.download"></script>
      <script type="text/javascript" src="./process/common.js.download"></script>

	
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<style>
 
.m-btm {
    text-align: center;
	margin-bottom: 35px;
}

.mtn{
	text-align: center;
}

.d-bl{
	display: block;
	margin-bottom: 25px;
}

#btnal {
  background: teal;
  color: aqua;
  border-radius: 5px;
  padding: 0.5rem;
  font-size: 0.83rem;
  cursor: pointer;
}

#btn {
  background: teal;
  color: aqua;
  border-radius: 5px;
  padding: 0.5rem;
  font-size: 0.83rem;
  cursor: pointer;
}
</style>
</head>

<body>
    <div id="wrapper">
      
        <!-- Tracker End-->

       <!-- Banner Start -->
    <div id="banner">
        <div class="container">
            <div class="bg"></div>
        </div>
    
	 <!-- Tracker Start-->
        <div class="block block-tracker">
            <div class="h_container">
                <form action="track-result.php" method="post" name="form1" id="userForm" onSubmit="return validate()">
                    <p>TRACK YOUR SHIPMENT
                    
                    <input type="text" name="Consignment" id="Consignment" placeholder="Enter Tracking number"
                        required />
                    <input type="submit" name="button" id="send" value="TRACK NOW" /></p>
                </form>
            </div>
        </div></div>
    <!-- Banner End -->

        <!-- Body Start-->
         <div class="content_wrapper">
            <div class="container">
                <div class="section_row">
                    <div class="col_7">
                        <div class="main_content">
                            <div class="mod mod-article">
                                <div class="article-icon">
                             <?php

					//$cons= $_POST['Consignment'];
					//CREATE TABLE IF NOT EXISTS `tbl_courier_track` (
					//  `id` int(10) NOT NULL auto_increment,
					//  `cid` int(10) NOT NULL,
					//  `cons_no` varchar(20) NOT NULL,
					//  `current_city` varchar(100) NOT NULL,
					//  `update_date` varchar(30) NOT NULL,
					//  `new_status` varchar(300) NOT NULL,
					//  `comments` varchar(255) NOT NULL,
					//  `bk_time` datetime NOT NULL,



					$stmtTrack = mysqli_prepare($dbConn, "SELECT * FROM tbl_courier_track WHERE cons_no = ? ORDER BY id DESC LIMIT 0, 20");
					mysqli_stmt_bind_param($stmtTrack, 's', $cons);
					mysqli_stmt_execute($stmtTrack);


					//$sql = "SELECT tbl_courier.*, tbl_courier_track.*
					//		FROM tbl_courier JOIN tbl_courier_track ON (tbl_courier.cons_no = tbl_courier_track.cons_no)
					//		WHERE tbl_courier.cons_no = '$cons'";		

              $resultTrack = mysqli_stmt_get_result($stmtTrack);
              $noTrack = $resultTrack ? mysqli_num_rows($resultTrack) : 0;
              ?>   
       
						   <h1>Tracking Shipment &nbsp;
						   
						   <form method="post" action="print.php?cid=<?php echo $cid; ?>" target="_blank" style="display:inline;" width="60px" height="100px">
				<a href="print.php?cid=<?php echo $cid; ?>" target="_blank"> <button id="order-status" class="default" >Print-Invoice</button></a></form>	
												</h1>
                                </div>
                                <div class="clear"></div>

                              
							   <div id="article_content_area"><strong>
                                        <font size="5">
                                            <font face="helvetica">
     <font size="5" color="#2c2c2c">Tracking No:</font> <font size="5" color="#C40202" face="arial,helvetica,sans-serif"><?php echo $cons_no; ?>
                                            </font><br />
                                            </font>
                                        </font>
                                       
                                    </strong><br /><br />
									
		

								

								

			<?php
                                $count = $noTrack;
                          // echo "<pre>";
                          // print_r($dataTrack);
                          // exit;
                                $all=0;

                                while($dataTrack = dbFetchAssoc($resultTrack)){
                                  extract($dataTrack);  
                                  ?>
     
                  
                         
						   <ul class="delivered-grid-box" >
					           <li>
									
                                      <div class="delivered-left"> <span><strong><?php echo $update_date; ?></strong>,<br><?php echo $bk_time; ?></span></div>
                                     <span class="d-bulte"><i class="<?php echo ($all ==0)?'current':''?>"></i></span>
                                       <div class="delivered-right"> <strong><?php echo $comments; ?> </strong>
                                      <br><?php echo  $current_location; ?><br>
									  <?php echo  $current_city; ?> &nbsp;<span id="order-status" class="default"><?php echo $new_status; ?></span>
									  </div>
									 
                                      
                                      
                                    </li><br><br>
                                  </ul>
                               <?php
                                  $all++;
						//$count = $count--
						}//while
						?>  
			
			
			<br /><br /> 
			
			
			
			</div>
			
		<div class="clear">&nbsp;</div>
		</div>




                             <div class="block block-scrolling-ad">
                                <div class="block-content">
                      <font size="5" color="#2c2c2c">Current Location on Map</font></span>
                       </font><br />
                       		

			
	<div align="center">
<div id="map" style="width: 100%; height: 300px;">
</div> 
</div> 	
                                </div>
                            </div>
                            </article>
							 			
                        </div>
                    </div>
					
					
					
					
					
					
                    <div class="col_3">
                        <div>
						
 <center><img class="nav-profile-img mr-2" alt="" src="pic/<?php echo $product; ?>" alt="photo"  style="width:330px; height:150px;"/>
					
                <br/>
						<h3>Content of Shipment: <strong><?php echo $product; ?></strong></h3></center>
						
						<br><br/>
						<table>
					  <tr>
						<th>Est. Delivery Date :</th>
						<td><?php echo $pick_date; ?></td>

					  </tr>
					  <tr>
						<th>Origin Area:</th>
						<td><?php echo $origin; ?></td>
					  </tr>
					  <tr>
						<th>Destination Area:</th>
						<td><?php echo $destination; ?></td>
					  </tr>
					
					  
					</table>					
						
						                     
							<br><br/>
							
							
						<strong>
							<font size="5" color="#C40202" face="arial,helvetica,sans-serif">Sender's  Details</font></strong>
							<br/>	
								<table>
					  <tr>
						<th>Name:</th>
						<td><?php echo $s_name; ?></td>

					  </tr>
					  
					  <tr>
						<th>Email:</th>
						<td><?php echo $s_mail; ?></td>
					  </tr>
					  
					  <tr>
						<th>Address:</th>
						<td><?php echo $s_add; ?></td>
					  </tr>
					  
					  <tr>
						<th>Mobile:</th>
						<td><?php echo $s_phone; ?></td>

					  </tr>
					  
					</table>
					  
					  
					  
					  
					  <br><br/>
							
							
						<strong>
							<font size="5" color="#C40202" face="arial,helvetica,sans-serif">Receiver's  Details</font></strong>
							<br/>	
								<table>
					  <tr>
						<th>Name:</th>
						<td><?php echo $r_name; ?></td>

					  </tr>
					  
					  <tr>
						<th>Email:</th>
						<td><?php echo $r_mail; ?></td>
					  </tr>
					  
					  <tr>
						<th>Address:</th>
						<td><?php echo $r_add; ?></td>
					  </tr>
					  
					  <tr>
						<th>Mobile:</th>
						<td><?php echo $r_phone; ?></td>

					  </tr>
					  
					</table>
					  
					  
					  
					  <br><br/>
							
							
						
					</table>
						
							<br><br/>
							
							<br/><br/>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Body End -->

        <!-- Footer Start -->

        <footer id="footer">
            <div class="container">
                <div class="links-container">


                    <div class="social">
                        Always stay connected with us.. <br><br>
                        <a href="http://www.facebook.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/facebook.png" width="20"
                                height="20" border="0" title="Facebook"></a>
                        <a href="http://www.twitter.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/twitter.png" width="20"
                                height="20" border="0" title="Twitter"></a>
                        <a href="http://www.youtube.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/youtube.png" width="20"
                                height="20" border="0" title="Youtube"></a>
                        <a href="http://www.flickr.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/flickr.png" width="20"
                                height="20" border="0" title="Flickr"></a>
                        <a href="http://www.delicious.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/delicious.png" width="20"
                                height="20" border="0" title="Delicious"></a>
                        <a href="http://www.stumbleupon.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/stumbleupon.png" width="20"
                                height="20" border="0" title="Stumbleupon"></a>
                        <a href="http://www.digg.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/digg.png" width="20"
                                height="20" border="0" title="Digg"></a>
                        <a href="http://feeds.feedburner.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/rss.png" width="20"
                                height="20" border="0" title="RSS"></a>
                        <a href="https://plus.google.com/" target="_blank"><img
                                src="application/layouts/scripts/logistics_default/images/google-plus-one.png"
                                width="32" height="20" border="0" title="Google +1"></a>
                    </div>

                    <div class="copyright clear">
                        Copyright &copy 2023 All Rights Reserved.

                        </div>
                </div>

            </div>
        </footer>

    </div>
    <div class="go-top"><a href="#top" id="scroll-top">Top</a></div>
    <script type="text/javascript" src="application/layouts/scripts/logistics_default/vendor/scripts/js/scroll.js">
    </script>


    <script src="process/jquery.min.js"></script>
    <script src="process/jquery.validate.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
    </script>
	
	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

 <script async src="https://maps.googleapis.com/maps/api/js?key=<?php echo getenv('GOOGLE_MAPS_API_KEY'); ?>&callback=console.debug&libraries=maps,marker&v=beta">
    </script>

<script type="text/javascript">
function initialize() 
{
	// put latitude and longitude data here
   var latinfo = new google.maps.LatLng(<?php echo  $lat; ?>,<?php echo  $lon; ?>);
   var map = new google.maps.Map(document.getElementById('map'), {
      center: latinfo,
      zoom: 13
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latinfo,
      draggable: false,
      animation: google.maps.Animation.BOUNCE,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var infowindow = new google.maps.InfoWindow();   
    google.maps.event.addListener(marker, 'click', function() 
    {
      var iwContent = '<div id="pop_window">' + '<div><b>Location</b> : Connaught Place, New Delhi</div></div>';
      // put content to the infowindow
      infowindow.setContent(iwContent);
      // show infowindow in the google map and at the current marker location
      infowindow.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>




</body>

</html>


<?php }//while
}//if
else {
  echo '';
  ?>

	<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>DHL EXPRESS LOGISTICS | Track Now</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
		<div class="auto-container">
			<div class="header-inner">
				<!--Header Top-->
				<div class="header-top">
					<div class="clearfix">
						
						<!--Top Right-->
						<div class="top-right">
						
							<!-- Right List -->
							<ul class="right-list">
								<li><span class="icon flaticon-mail"></span>support@dhlexpresslogistics.online</li>
								<li><span class="icon flaticon-phone-contact"></span></li>
							</ul>
							
							<!--Language-->
							<div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="globe flaticon-world"></span>United State.</a>
								
							</div>
							
							<!--Social Box-->
							<ul class="social-box">
								<li>
						<!-- GTranslate language selector - https://gtranslate.io/ -->
<div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","switcher_horizontal_position":"left","switcher_vertical_position":"bottom","flag_style":"2d"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

								
								
								
								
								
								
								
								
								</li>
							</ul>
							
						</div>
						
					</div>
					
				</div>
			
				<!--Header-Upper-->
				<div class="header-upper">
					
					<div class="clearfix">
						
						<div class="pull-left logo-box">
							<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
						</div>
						
						<div class="pull-right upper-right">
							
							<!--Header Lower-->
							<div class="header-lower">
								
								
									<div class="nav-outer clearfix">
										<!-- Main Menu -->
										<nav class="main-menu navbar-expand-md">
											<div class="navbar-header">
												<!-- Toggle Button -->    	
												<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
											
											<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
												<ul class="navigation clearfix">
													<li><a href="index.html">Home</a></li>
													<li><a href="about.html">About Us</a></li>
													<li><a href="services.html">Our Services</a></li>
													<li><a href="quote.php">Get Quote</a></li>
													<li class="current"><a href="track.html">Track your shippment</a></li>
													
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
											</div>
										</nav>
										
										<!-- Main Menu End-->
										<div class="outer-box clearfix">
										
											<!--Option Box-->
											<div class="option-box">
												
												<!--Search Box-->
												<div class="search-box-outer">
													<div class="dropdown">
														<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-route"></span></button>
														<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
															<li class="panel-outer">
																<div class="form-container">
																	<form method="post" action="track-result.php" method="post" name="form1" id="userForm" onSubmit="return validate()">
																		<div class="form-group">
																			<input type="search" name="Consignment" id="Consignment" value="" placeholder="Track Your Shipment" required="">
																			<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
																		</div>
																	</form>
																</div>
															</li>
														</ul>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								
							</div>
							<!--End Header Lower-->
							
						</div>
						
					</div>
					
				</div>
			<!--End Header Upper-->
			</div>
        </div>
		
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small-2.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
													<li><a href="index.html">Home</a></li>
													<li><a href="about.html">About Us</a></li>
													<li><a href="services.html">Our Services</a></li>
													<li><a href="quote.php">Get Quote</a></li>
													<li class="current"><a href="track.html">Track your shippment</a></li>
													
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/12.jpg);">
    	<div class="auto-container">
        	<h2>Track & Trace</h2>
			<div class="separater"></div>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index-1.html">Home</a> <span>/</span></li>
                <li>Track & Trace</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                	<div class="track-section">
						<!-- Sec Title Two -->
						<div class="sec-title-two sec-title">
							<h2>Track & <span>Trace Shipment</span></h2>
							<div class="separater"></div>
						</div>
						
						<!-- Quote Form Box -->
						<center>Tracking Number <font color="#FF0000"><?php echo $cons; ?></font> not found. <br><br>Please verify the Tracking Number.<br/>
						and try Again.</center></h4></tr></font></h3>
					
						<form method="post" action="track-result.php" name="form1" id="userForm" onSubmit="return validate()">
							
						<div class="track-form-two">
								<div class="form-group">
									<label>Enter Tracking Number Here</label>
								</div>
								<div class="form-group">
									<input type="text" name="Consignment" placeholder="Enter your tracking number e.g CRG-11-XXXX" id="Consignment" required="">
									<button type="submit" id="send" class="theme-btn submit-btn">Track Your Shipment</button>
								</div>
							</form>
						</div>
						
						
						
						
						
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
	
	<!--Main Footer-->
    <footer class="main-footer style-two" style="background-image:url(images/background/7.png)">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<h2><span class="icon fa fa-thumbs-o-up"></span>CP. Trademark</h2>
									
									<div class="row clearfix">
										<img src="images/logo.png" alt="" title="">
									</div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<h2><span class="icon fa fa-bullhorn"></span>Recent News</h2>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-1.jpg" alt="">
                                            </div>
                                            <h3><a href="##">Track Your Shipment Online with DHL EXPRESS LOGISTICS</a></h3>
                                            <div class="post-date">November 26, 2020</div>
                                        </div>
                                    </div>
                                    
									
                                   
								</div>
							</div>
							
						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget mail-widget">
									<h2><span class="icon fa fa-envelope-o"></span>Mailing List</h2>
									<div class="text">Sign up for our mailing list.</div>
									<!-- Email Form -->
									<div class="email-form">
										<form method="post" action="##">
											<div class="form-group clearfix">
												<input type="email" name="email" value="" placeholder="Email address">
												<button type="submit" class="theme-btn submit-btn"><span class="icon fa fa-check"></span></button>
											</div>
										</form>
									</div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
									<h2><span class="icon fa fa-user"></span>Contact Us</h2>
									<div class="phone-number"></div>
									<div class="about-email">support@dhlexpresslogistics.online<br>
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
			<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="copyright">&copy; 2023 DHL EXPRESS LOGISTICS. ALL RIGHTS RESERVED</div>
		</div>
		
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<script src="process/jquery.min.js"></script>
	<script src="process/jquery.validate.js"></script>
	
<script>
	$.validator.setDefaults({
		submit: function() {
			alert("submitted!");
		}
	});

	$(document).ready(function() {
		$("#userForm").validate({
			rules: {
				name: "required",
				Consignment: {
					required: true,
					minlength: 13
				},
			   
			},
			messages: {
				name: "Please enter your name",           
				Consignment: {
						required: "Please enter a valid tracking number...",
						minlength: "Tracking ID must consist of at least 13 characters"
				},           
			}
		});
	});
	
	</script>
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
	});
	</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'c385a027a8d871b3ca2633080a1e3a8beec53af2';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>

</body>

</html>





<?php 
}//else
?>