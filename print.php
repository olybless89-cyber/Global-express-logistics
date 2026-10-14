<?php

require_once('database.php');
require_once('library.php');

$cid= (int)$_GET['cid'];

$sql = "SELECT cid, cons_no, s_add, s_name, s_phone, s_mail, r_phone, r_add, r_mail, r_name, type, product, qty, weight, mode, origin, pmode, destination, status, freight, pick_date, dept_date, invoice_no, status
		FROM tbl_courier
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);		
$result_1 = dbQuery($sql_1);
while($data = dbFetchAssoc($result)) {
extract($data);
?>

  <!DOCTYPE html>
<html>
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>Print Invoice</title>
	
	<!-- Define Charset -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- Page Description and Author -->
	<meta name="description" content="DHL EXPRESS LOGISTICS"/>
	<meta name="keywords" content="Courier Delivery & Logistic Company" />
	<meta name="author" content="Viz">	
	
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="css/bootstrap2.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./css/print-invoice.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="barcode.html"></script>
	
	
<style>
	    
	    #background{
    position:absolute;
    z-index:0; 
    display:block;
    min-height:70%; Z
    min-width:70%; 
}

#content{X
    position:absolute;
    z-index:1;
}

#bg-text
{
    color:grey;
    font-size:36px;
    transform:rotate(300deg);
    -webkit-transform:rotate(300deg);
}
	    
	</style>
	
	
 


  </head>
  <body  style="background-color:teal;"  onload="window.print();">
      
      
	
	
    <div class="wrapper" id="background"> <p id="bg-text">Certified True Copy</p>

      <!-- Main content -->
      <section class="invoice" >
        <!-- title row -->
        <div class="row"  >
          <div class="col-xs-12">
            <h2 class="page-header">
			  <span><img src="images/logo.png"
                                alt="Air shipment tracking system, Sea shipment tracking system, Cargo tracking system"
                                title="Worldwide ExpressForce & shpiment tracking system" width="190" height="85" border="0"> 
			  
			  
		
			  <img class="pull-right"  src="images/banner.png" alt=""  height="185"/> 
			  
			  <h3 style="color:red;"><strong> Tracking Number:  <?php echo $cons_no; ?></strong>
			  </h3></span>
			  
            </h2>
          </div><!-- /.col -->
        </div>
        
					

         
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
			   <center> 
			       <strong style="color:green;">DHL EXPRESS LOGISTICS<br>
Address: China, Asia and Europe<br>
Email: support@dhlexpresslogistics.online<br>
Company Website: www.dhlexpresslogistics.online</strong></center>
            </h2>
          </div><!-- /.col -->
        </div>
        
        
         <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <strong style="color:blue;">FROM (SENDER)</strong>
            <address>
              <h3><strong style="color:green;"><?php echo $s_name; ?></strong></h3><br>

              <b>Address:</b>&nbsp;&nbsp;<?php echo $s_add; ?><br/>
			  <b>Phone No:</b>&nbsp;&nbsp;<?php echo $s_phone; ?><br/>
			  <b>Origin Office:</b> &nbsp;&nbsp;<?php echo $origin; ?>    </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <strong style="color:blue;">TO (CONSIGNEE)</strong>
            <address>
              <h3><strong style="color:green;">&nbsp;&nbsp;<?php echo $r_name; ?></strong></h3><br>
               
			  <b>Address:</b>&nbsp;&nbsp;<?php echo $r_add; ?><br/>
              <b>Phone:</b> &nbsp;&nbsp;<?php echo $r_phone; ?><br/>
			 
              <b>Destination Office:</b>&nbsp;&nbsp;<?php echo $destination; ?>       </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
		  <table>
                                        	<tr>
                                                <td>
                                                    <center>
                                                        <img src="images/barcode810e.png?text=testing" alt="testing" /><br>
                                                        <strong><?php echo $cons_no; ?></strong><br>
                                                    </center>
                                                </td>
                                                
                                            </tr>
                                        </table>
			<br/>
            <b>Order ID:</b>&nbsp;&nbsp;<?php echo $cid; ?><br/>
            <b>Est. Delivery Date:</b>&nbsp;<?php echo $pick_date; ?><br/>
			<b>Payment Mode:</b> <small class="label label-danger"><i class="fa fa-money"></i>&nbsp;&nbsp;<?php echo $pmode; ?></small><br/> 
			<b>Mode of Transport:</b>&nbsp;<?php echo $mode; ?><br/>
			
          </div><!-- /.col -->		 
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Qty</th>
                  <th>Type of Shipment</th>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Total Cost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $qty; ?></td>
                  <td><?php echo $type; ?></td>
                  <td><?php echo $product; ?></td>
                  <td><?php echo $status; ?></td>
				  <td><?php echo $freight; ?></td>
                </tr>               
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->
		
		      
		
		<br>
		<br>
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            <p class="lead"><strong>Payment Methods:</strong></p>
            <img src="images/securepayment.png" alt="Methods payments" /> 
           
         
          </div>
          
          <div class="col-xs-6">
            <p class="lead"><strong>Official Stamp/ <?php echo date ("l, d.M.Y");?> </strong></p>
            <img src="images/stamp1.png" alt="" height="100" />           
             
          </div>
          
          
          
          
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="js/app.min.js" type="text/javascript"></script>
  </body>

</html>
<?php } 
?>