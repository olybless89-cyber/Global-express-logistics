<?php

require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
FROM tbl_courier
WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
  while($data = dbFetchAssoc($result)) {
    extract($data);
    ?>
	
	<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />

<title>:::Track Now</title>

<link href="tcss/font-awesome.min.css" rel="stylesheet">

<link href="tcss/bootstrap.min.css" rel="stylesheet">

<link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="tcss/style.css" rel="stylesheet">


</head>
<body>


<section class="banner_area">
<div class="container">
<div class="pull-left">
<h3>Cargo Tracking</h3>
</div>
<div class="pull-right tracking_search_area">
<div class="tracking_search_inner">
<h2 class="single_title">Track your Shipment</h2>
<h5>Enter a tracking number, and get tracking results.</h5>
<div class="input-group">
<input type="text" class="form-control" placeholder="Tracking Number">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Track</button>
</span>
</div>
</div>
</div>
</div>
</section>

<br>
   <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				
				
		<!-- Featured Section -->
	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-12 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-6">
                                <div class="footer-widget news-widget">
										<center><strong>
							<font size="5" color="#C40202" face="arial,helvetica,sans-serif">Senders's  Details</font></strong></center>
							<br>
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
						<th>Mobile:</th>
						<td><?php echo $s_phone; ?></td>

					  </tr>
					  
					  <tr>
						<th>Address:</th>
						<td><?php echo $s_add; ?></td>
					  </tr>
					  
					 
					  
					</table>
									
                                   
								</div>
							</div>
							
							<br>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-6">
                                <div class="footer-widget news-widget">
								
									<center><strong>
							<font size="5" color="#C40202" face="arial,helvetica,sans-serif">Receiver's  Details</font></strong></center>
							<br>
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
						<th>Mobile:</th>
						<td><?php echo $r_phone; ?></td>

					  </tr>
					  
					  <tr>
						<th>Address:</th>
						<td><?php echo $r_add; ?></td>
					  </tr>
					  
					 
					  
					</table>
                                   
								</div>
							</div>
							
						</div>
					</div>
					
				
					
				</div>
			</div>
		</div>		
				
				
				
	<div align="center">
<div id="map" style="width: 60%; height: 400px;">
</div> 
</div> 			
				
				<br><br/>
				
				<!--Content Side-->
                <div class="content-side col-lg-7 col-md-12 col-sm-12">
                	<div class="track-section">
						<!-- Sec Title Two -->
						<div class="sec-title-two sec-title">
						<br><br/><br><br/>
							<h2>Track & <span>Trace Shipment</span></h2>
							<div class="separater"></div>
						</div>
						
						<!-- Quote Form Box -->
						
						
						
		<center><img class="nav-profile-img mr-2" alt="" src="pic/<?php echo $product; ?>" alt="photo"  style="width:200px; height:150px;"/>
			</center>			


		<?php

					//$cons= $_POST['Consignment'];
					//CREATE TABLE IF NOT EXISTS `tbl_courier_track` (
					//  `current_city` varchar(100) NOT NULL,
					


              $sqlTrack = "SELECT *
              FROM tbl_courier_track
              WHERE cons_no = '$cons'
              ORDER BY id DESC
              LIMIT 0, 1";		


					//$sql = "SELECT tbl_courier.*, tbl_courier_track.*
					//		FROM tbl_courier JOIN tbl_courier_track ON (tbl_courier.cons_no = tbl_courier_track.cons_no)
					//		WHERE tbl_courier.cons_no = '$cons'";		

              $resultTrack = dbQuery($sqlTrack);
              $noTrack = dbNumRows($resultTrack);
              ?>


						  <?php
                                $count = $noTrack;
                          // echo "<pre>";
                          // print_r($dataTrack);
                          // exit;
                                $all=0;

                                while($dataTrack = dbFetchAssoc($resultTrack)){
                                  extract($dataTrack);  
                                  ?>
						
				 <tr>
         <td colspan="2"><div align="left">
           <table width="50%" border="0">
               <tr>
              <img src="images/arw.gif" width="40" height="14" border="0"> &nbsp; &nbsp;
				<?php echo $origin; ?>&nbsp;&nbsp;
				<img src="images/arw.gif" width="40" height="14">
				<?php echo  $current_city; ?>&nbsp;&nbsp;
				<img src="images/arw.gif" width="40" height="14"> &nbsp;&nbsp;
                 <?php echo $destination; ?>

               </tr>
               </table>
         </div></td>
         </tr>
		 
							                 <?php
                                  $all++;
            //$count = $count--
            }//while
            ?>   


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


              $sqlTrack = "SELECT *
              FROM tbl_courier_track
              WHERE cons_no = '$cons'
              ORDER BY id DESC
              LIMIT 0, 15";		


					//$sql = "SELECT tbl_courier.*, tbl_courier_track.*
					//		FROM tbl_courier JOIN tbl_courier_track ON (tbl_courier.cons_no = tbl_courier_track.cons_no)
					//		WHERE tbl_courier.cons_no = '$cons'";		

              $resultTrack = dbQuery($sqlTrack);
              $noTrack = dbNumRows($resultTrack);
              ?>  
			  
						<!-- Tracking Info -->
						<div class="tracking-info-detail">
						
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
									
                                       <div class="delivered-left"> <span><?php echo $update_date; ?>,<br><?php echo $bk_time; ?></span></div>
                                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="d-bulte"><i class="<?php echo ($all ==0)?'current':''?>"></i></span>
                                       <div class="delivered-right"> <strong><?php echo $comments; ?> </strong>
                                      <br><?php echo  $current_location; ?><br>
									  <?php echo  $current_city; ?><br>
									  <span>&nbsp;<span id="order-status" class="default"><?php echo $new_status; ?></span>
									  </div>
									 
                                      
                                      
                                    </li><br><br>
                                  </ul>
							
							
							
							                 <?php
                                  $all++;
            //$count = $count--
            }//while
            ?>   
						</div>
					
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-5 col-md-6 col-sm-6">
                	<aside class="sidebar">
						
						   <div>
						
					<center><img src="images/move.gif" width="190" height="65" border="0">	</center>
					<br>
				 <font face="helvetica">
     <font size="5" color="#2c2c2c">Waybill:</font> <font size="5" color="#C40202" face="arial,helvetica,sans-serif"><strong><?php echo $cons_no; ?> 
	 
	 <form method="post" action="print.php?cid=<?php echo $cid; ?>" target="_blank" style="display:inline;" width="60px" height="40px">
				<a href="print.php?cid=<?php echo $cid; ?>" target="_blank"> <button id="order-status" class="default" >PRINT INVOICE</button></a></form>	</strong>
                                            </font><br />
                                            </font>	
					  <br>
					<table>	
						
						<tr>
						<th>Est. Delivery Date :</th>
						<td><?php echo $pick_date; ?></td>

					  </tr>
					  <tr>
						<th>Origin Service Area:</th>
						<td><?php echo $origin; ?></td>
					  </tr>
					  <tr>
						<th>Destination Area:</th>
						<td><?php echo $destination; ?></td>
					  </tr>

				</table>

                 
							
					  
					
					  
					  
					  <br><br>
							
						<center><strong>
							<font size="5" color="#C40202" face="arial,helvetica,sans-serif">Shipment Details</font></strong></center>
							<br>
								<table>
					  <tr>
						<th>Bill of Lading:</th>
						<td><?php echo $invoice_no; ?></td>

					  </tr>
					  
					  <tr>
						<th>Type of Shipment:</th>
						<td><?php echo $type; ?></td>
					  </tr>
					  
					  <tr>
						<th>Content of Shipment:</th>
						<td><?php echo $product; ?></td>
					  </tr>
					  
					  <tr>
						<th>Quantity of Product:</th>
						<td><?php echo $qty; ?></td>

					  </tr>
					  
					  
					  <tr>
						<th>Weight of Product:</th>
						<td><?php echo $weight; ?>&nbsp;kg</td>

					  </tr>
					  <tr>
						<th>Mode of Transport:</th>
						<td><?php echo $mode; ?></td>

					  </tr>
					  <tr>
						<th>Total Charges:</th>
						<td><?php echo $freight; ?></td>

					  </tr>
					</table>
					
					</table>
						
							<br><br/>
							
							<br/><br/>
							
							
							
						
				
			</div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
















</div>
</div>
</div>
</section>


<footer class="footer_area">
<div class="footer_widget_area">
<div class="container">
<div class="row">
<div class="col-md-3 col-xs-6">
<aside class="f_widget about_widget">
<img src="img/footer-logo.png" alt>
<p>Start.ly Logistics is a mobile first responsive website template for logistics or transportation.</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
</ul>
</aside>
</div>
<div class="col-md-3 col-xs-6">
<aside class="f_widget link_widget">
<div class="f_title">
<h3>Quick Links</h3>
</div>
<ul>
<li><a href="#">INVESTER RELATIONS</a></li>
<li><a href="#">PRESS & MEDIA</a></li>
<li><a href="#">CAREER OPENINGS</a></li>
<li><a href="#">OUR PARTNERS</a></li>
<li><a href="#">LEGAL NOTICE</a></li>
<li><a href="#">COOKIE POLICY</a></li>
<li><a href="#">TERMS & CONDITIONS</a></li>
</ul>
</aside>
</div>
<div class="col-md-3 col-xs-6">
<aside class="f_widget service_widget">
<div class="f_title">
<h3>Services</h3>
</div>
<ul>
<li><a href="#">Standard Air Freight Services</a></li>
<li><a href="#">Sea Freight Services</a></li>
<li><a href="#">Full loads and part loads</a></li>
<li><a href="#">Specialized Transport</a></li>
<li><a href="#">Logistics Solutions</a></li>
<li><a href="#">Tailored Project Transport</a></li>
</ul>
</aside>
</div>
<div class="col-md-3 col-xs-6">
<aside class="f_widget info_widget">
<div class="f_title">
<h3>Contact</h3>
</div>
<div class="contact_details">
<p>21 E. Valley Stream Blvd.<br class="info_br" /> Valley Stream, NY 11580, USA</p>
<p>Phone: <a href="tel:+1-(255)-7899"></a></p>
<p>Fax: <a href="#"></a></p>
<p>Email: <a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#7119141d1d1e311d1e161802051812025f121e1c"><span class="__cf_email__" data-cfemail="553d3039393a15393a323c26213c36267b363a38">[email&#160;protected]</span></a></p>
</div>
</aside>
</div>
</div>
</div>
</div>
<div class="footer_copy_right">
<div class="container">
<h4>Copyright © <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script>. All rights reserved.</h4>
</div>
</div>
</footer>


<script src="js/jquery-2.2.4.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/script.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8310ad2c9daf3c99","version":"2023.10.0","r":1,"token":"1a2187940c214caa9d3fed19b4904902","b":1}' crossorigin="anonymous"></script>
</body>
</html>


<?php }//while
}//if
else {
echo '';
?>


















	<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />

<title>:::Track Now</title>

<link href="tcss/font-awesome.min.css" rel="stylesheet">

<link href="tcss/bootstrap.min.css" rel="stylesheet">

<link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="tcss/style.css" rel="stylesheet">


</head>
<body>


<footer class="footer_area">
<div class="footer_widget_area">
<div class="container">
<div class="row">
<div class="col-md-3 col-xs-6">
<aside class="f_widget about_widget">
<img src="img/footer-logo.png" alt>
<p>Start.ly Logistics is a mobile first responsive website template for logistics or transportation.</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
</ul>
</aside>
</div>
<div class="col-md-3 col-xs-6">
<aside class="f_widget link_widget">
<div class="f_title">
<h3>Quick Links</h3>
</div>
<ul>
<li><a href="#">INVESTER RELATIONS</a></li>
<li><a href="#">PRESS & MEDIA</a></li>
<li><a href="#">CAREER OPENINGS</a></li>
<li><a href="#">OUR PARTNERS</a></li>
<li><a href="#">LEGAL NOTICE</a></li>
<li><a href="#">COOKIE POLICY</a></li>
<li><a href="#">TERMS & CONDITIONS</a></li>
</ul>
</aside>
</div>
<div class="col-md-3 col-xs-6">
<aside class="f_widget service_widget">
<div class="f_title">
<h3>Services</h3>
</div>
<ul>
<li><a href="#">Standard Air Freight Services</a></li>
<li><a href="#">Sea Freight Services</a></li>
<li><a href="#">Full loads and part loads</a></li>
<li><a href="#">Specialized Transport</a></li>
<li><a href="#">Logistics Solutions</a></li>
<li><a href="#">Tailored Project Transport</a></li>
</ul>
</aside>
</div>
<div class="col-md-3 col-xs-6">
<aside class="f_widget info_widget">
<div class="f_title">
<h3>Contact</h3>
</div>
<div class="contact_details">
<p>21 E. Valley Stream Blvd.<br class="info_br" /> Valley Stream, NY 11580, USA</p>
<p>Phone: <a href="tel:+1-(255)-7899"></a></p>
<p>Fax: <a href="#"></a></p>
<p>Email: <a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#7119141d1d1e311d1e161802051812025f121e1c"><span class="__cf_email__" data-cfemail="553d3039393a15393a323c26213c36267b363a38">[email&#160;protected]</span></a></p>
</div>
</aside>
</div>
</div>
</div>
</div>
<div class="footer_copy_right">
<div class="container">
<h4>Copyright © <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script>. All rights reserved.</h4>
</div>
</div>
</footer>


<script src="js/jquery-2.2.4.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/script.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8310ad2c9daf3c99","version":"2023.10.0","r":1,"token":"1a2187940c214caa9d3fed19b4904902","b":1}' crossorigin="anonymous"></script>
</body>
</html>
<?php 
}//else
?>