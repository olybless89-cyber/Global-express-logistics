<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT *
		FROM tbl_courier_officers
		WHERE cid = 1";
$result = dbQuery($sql);	
while($data = dbFetchAssoc($result)) {
extract($data);
?>

<!DOCTYPE html>
<html lang="en" class="wf-flaticon-n4-inactive wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-simplelineicons-n4-active wf-lato-n3-active wf-lato-n4-active wf-lato-n7-active wf-lato-n9-active wf-active" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button[not:disabled]:hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel[not:disabled]:hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger[not:disabled]:hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Change Password</title>
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
		<!-- Fonts and icons -->
	<script src="assets/home/webfont.min.js.download"></script>
	 <script type="text/javascript" src="assets/home/countries.js.download"></script>
<link href="css/new/inter-trans.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>


	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/home/bootstrap.min.css">
	<link rel="stylesheet" href="assets/home/atlantis.min.css">

	 <link href="assets/home/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script src="assets/home/SpryTabbedPanels.js.download" type="text/javascript"></script>

<script language="JavaScript">
<!--
function Check_form() {


// Check Password 
		if ( signupForm.txtp.value == "" )
		{
			alert( "Kindly enter a password." );
			signupForm.txtp.focus( );
			return false;
		}

		if ( signupForm.txtp.value.length < 4 )
		{
			alert( "Password must be atleast 4 characters." );	
			signupForm.txtp.focus( );
			return false;
		}


		if ( signupForm.txtp.value.length > 20 )
		{
		alert( "Password must be Max 20 characters." );	
		signupForm.txtp.focus( );
		return false;
		}

		if ( signupForm.txtcp.value == "" )
		{
			alert( "Kindly enter a confirm password." );
			signupForm.txtcp.focus( );
			return false;
		}

		if ( signupForm. txtp.value != signupForm. txtcp.value )
		{
			alert( "Password and Confirm password must be same." );
			signupForm.txtp.value = "";
			signupForm.txtcp.value = "";

			signupForm.txtp.focus( );

			return false;
		}

		tmpPass = signupForm.txtp.value;

		goodPasswd = 1;

		for( var idx=0; idx< tmpPass.length; idx++ )
		{
			ch = tmpPass.charAt(idx);

			if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z')) && !((ch>=0) && (ch <=9)) )
			{
				goodPasswd = 0;
				break;
			}
		}

		if( goodPasswd ==0 )
		{
			alert( "Password must contains only letters and digits." );
			signupForm. txtp.value="";
			signupForm. txtcp.value="";
			signupForm. txtp.focus();
			return false;
		}

	

return true;
}

//-->
</script>

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
<div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>

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
<li class="nav-item"> <a href="admin.php"><img src="assets/home/1.png"> <p style="color:blue;"> <strong>&nbsp;&nbsp; Main Menu</strong></p> </a> </li>

<li class="nav-item"> <a href="add-courier.php"><img src="assets/home/8.png"> <p style="color:green;"> <strong>&nbsp;&nbsp; Create Shippments</strong></p> </a> </li>
<li class="nav-item"> <a href="courier-list.php"><img src="assets/home/5.PNG"> <p style="color:brown;"> <strong>&nbsp;&nbsp;List of Shippments</strong></p> </a> </li>
<li class="nav-item"> <a href="delivered-list.php"><img src="assets/home/10.png"> <p style="color:red;"> <strong>&nbsp;&nbsp; Delivered Shippments</strong></p> </a> </li>
<li class="nav-item"> <a href="search-edit.php"><img src="assets/home/2.png"><p style="color:brown;"> <strong>&nbsp;&nbsp;Search & Edit</strong></p> </a> </li>
<li class="nav-item   active"> <a href="change-password.php"><img src="assets/home/4.png"> <p style="color:teal;"> <strong>&nbsp;&nbsp; Change Password</strong></p> </a> </li> 
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
				
				
				

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">
	
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
      <tbody><tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      
	  
	  
	  
		
          
	  
	  
	  
	  
	  
	  
	  
	  
      <tr>
        <td height="25"><div class="headtext13" align="center"><strong>Change Admin Password </strong></div></td>
        </tr>
      <tr>
        <td height="25"><div class="redtext" align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">
           <form method="post" action="process.php?action=change-pass" name="frmShipment" id="frmShipment"> 
            <table border="0" cellpadding="0" cellspacing="0" align="center" width="60%">
              <tbody><tr>
                <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
                <td background="images/boxtopBG.gif" width="734"></td>
                <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
              </tr>
              <tr>
                <td background="images/boxleftBG.gif"></td>
                <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                    <tbody><tr>
                      <td colspan="2" height="4"></td>
                    </tr>
                    <tr>
                      <td height="18"><table class="newtext" border="0" cellpadding="2" cellspacing="2" align="center" width="100%">
                        <tbody><tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
						
			<input name="cid" type="hidden" id="cid"  value="<?php echo $cid; ?>"  class="form-control" autocomplete="off" required>
				
						
						<tr>
             <td width="40%"><div align="right">User ID  :</div></td>
           <td width="60%"><div align="left"><input name="ManagerName" type="TEXT" id="ManagerName"  value="<?php echo $officer_name; ?>" size="40"  maxlength="100" readonly> </div></td>
          </tr>
          <tr>
            <td><div align="right">Old Password   :</div></td>
           
            <td><input  maxlength="20" value="" placeholder="(unchanged)"   size="40" type="password" readonly></div></td>
          </tr>
         <tr>
            <td><div align="right">New Password   :</div></td>
           
            <td><input name="Password" id="Password" maxlength="20"   size="40" type="text"></div></td>
          </tr>
						
                        <tr>
                          <td>&nbsp;</td>
                          <td><div align="left">
                           <button disabled type="submit" name="submit" id="submit" class="btn btn-primary pull-right"> Change Password</button>
         
                          </div></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                </tbody></table></td>
                <td background="images/boxrightBG.gif"></td>
              </tr>
              <tr>
                <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
                <td background="images/boxbtmBG.gif" width="734"></td>
                <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
              </tr>
            </tbody></table>
            </form>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>
<?php } 
?>