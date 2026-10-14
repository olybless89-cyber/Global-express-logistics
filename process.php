<?php 
//start session
session_start();
require_once('mail.php');
require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	
	case 'edit-cons':
		editCons();
	break;
	
	case 'delivered':
		markDelivered();
	break;
	
	case 'add-office':
		addNewOffice();
	break;
	
	case 'add-manager':
		addManager();
	break;
	
	case 'update-status':
		updateStatus();
	break;
	
	case 'change-pass':
		changePass();
	break;
			
	case 'logOut':
		logOut();
	break;		
	
}//switch

function addCons(){

	$s_name = $_POST['s_name'];
	$s_phone = $_POST['s_phone'];
	$s_mail = $_POST['s_mail'];
	$s_add = $_POST['s_add'];
	
	$r_name = $_POST['r_name'];
	$r_phone = $_POST['r_phone'];
	$r_mail = $_POST['r_mail'];
	$r_add = $_POST['r_add'];
	
	$cons_no = $_POST['cons_no'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$invoice_no = $_POST['invoice_no'];
	
	
	$product = $_POST['product'];
	$qty = $_POST['qty'];
	$Totalfreight = $_POST['Totalfreight'];
	$Mode = $_POST['Mode'];
	$pmode = $_POST['pmode'];
	
	
	$pickupdate = $_POST['pickupdate'];
	$Deptdate = $_POST['Deptdate'];
	$Origin = $_POST['Origin'];
	$Destination = $_POST['Destination'];
	$status = $_POST['status'];
	
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];
	
	

	$sql = "INSERT INTO tbl_courier (cons_no, s_name, s_phone, s_mail, s_add, r_name, r_phone, r_mail, r_add, invoice_no, type, product, weight, qty, mode, freight, dept_date, pick_date, pmode, origin, destination, status, lat, lon )
			VALUES('$cons_no', '$s_name','$s_phone', '$s_mail', '$s_add', '$r_name','$r_phone', '$r_mail', '$r_add', '$invoice_no', '$Shiptype', '$product', $Weight ,  $qty, '$Mode', '$Totalfreight', '$Deptdate', '$pickupdate', '$pmode', '$Origin', '$Destination',  '$status', '$lat', '$lon')";	
	//echo $sql;
	dbQuery($sql);
	
	
	 	
		//now send email
	//email it now.	

			$subject = "CONSIGNMENT REGISTRATION";
			$to = $r_mail;
			$msg_body  = "

			<!DOCTYPE html>
<html lang='en' >
<head>
  <meta charset='UTF-8'>
  <title>CONSIGNMENT REGISTRATION</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!--
 This is an example of a simple transactional email. 
 License: MIT
 Credit: Instagram
-->

<body style='margin:0;padding:0' dir='ltr' bgcolor='#ffffff'>
  <table border='0' cellspacing='0' cellpadding='0' align='center' id='m_-7626415423304311386email_table' style='border-collapse:collapse'>
    <tbody>
      <tr>
        <td id='m_-7626415423304311386email_content' style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;background:#ffffff'>
          <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
            <tbody>
              <tr>
                <td height='20' style='line-height:20px' colspan='3'>&nbsp;</td>
              </tr>
              <tr>
                <td height='1' colspan='3' style='line-height:1px'></td>
              </tr>
              <tr>
                <td>
                  <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse;text-align:center;width:100%'>
                    <tbody>
                      <tr>
                        <td width='15px' style='width:15px'></td>
                        <td style='line-height:0px;max-width:600px;padding:0 0 15px 0'>
                          <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                            <tbody>
                              <tr>
                                <td style='width:100%;text-align:left;height:33px'><img height='55' src='https://springjetexpress.com/assets/home/logo.png'></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td width='15px' style='width:15px'></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table border='0' width='430' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto'>
                    <tbody>
                      <tr>
                        <td>
                          <table border='0' width='430px' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto;width:430px'>
                            <tbody>
                              <tr>
                                <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                              </tr>
                              <tr>
                                <td>
                                  <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                            <tbody>
                                              <tr>
                                                <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                                                <td>
                                                  <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                    <tbody>
                                                      <tr>
                                                        <td>
                                                          <p style='margin:10px 0 10px 0;color:#565a5c;font-size:18px'>Dear $r_name</p>
                                                          <p>We are glad to inform you that your shippment has been created with Springjet Express Courier and Logistics Company, and hope you will take advantage of our wide variety of services.
														  <p> Visit our website on https://springjetexpress.com </p>
														  
														  </p>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td height='20' style='line-height:20px'>&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                       
                                                      </tr>
                                                      <tr>
                                                        <td height='20' style='line-height:20px'>
														</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td height='10' style='line-height:10px' colspan='1'>&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto;width:100%;max-width:600px'>
                    <tbody>
                      <tr>
                        <td height='4' style='line-height:4px' colspan='3'>&nbsp;</td>
                      </tr>
                      <tr>
                        <td width='15px' style='width:15px'></td>
                        <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                        <td style='text-align:center'>
                          
                          <div style='height:10px'></div>
                          <div style='color:#abadae;font-size:11px;margin:0 auto 5px auto'>Springjet Express Courier and Logistic Services, 1601 Willow Road, Menlo Park, CA 94025<br></div>
                           </td>
                        <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                        <td width='15px' style='width:15px'></td>
                      </tr>
                      <tr>
                        <td height='32' style='line-height:32px' colspan='3'>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td height='20' style='line-height:20px' colspan='3'>&nbsp;</td>
              </tr>
            </tbody>
          </table> </td>
      </tr>
    </tbody>
  </table>
</body>
<!-- partial -->
  
</body>
</html>
      
	";			 

	
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'add-cons', 'body' => $msg_body);
	send_email($mail_data);
			
                  //Text Msg
                
                    $account_sid = getenv("TWILIO_ACCOUNT_SID");
                    $auth_token = getenv("TWILIO_AUTH_TOKEN");
                    
                    $url = "https://api.twilio.com/2010-04-01/Accounts/$account_sid/SMS/Messages";
                    $to = $r_phone;
                    $from = getenv("TWILIO_FROM"); // twilio trial verified number
                    $body = "Dear $Receivername, \nYour Shippment have been created. Use the Code $ConsignmentNo to track your order. \nCheck your email for more details.";
                    $data = array (
                        'From' => $from,
                        'To' => $to,
                        'Body' => $body,
                    );
                    $post = http_build_query($data);
                    $x = curl_init($url );
                    curl_setopt($x, CURLOPT_POST, true);
                    curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                    curl_setopt($x, CURLOPT_USERPWD, "$account_sid:$auth_token");
                    curl_setopt($x, CURLOPT_POSTFIELDS, $post);
                    $y = curl_exec($x);
                    curl_close($x);
	
	
		if(isset($_FILES['profile'])){
            $file_tmp =$_FILES['profile']['tmp_name'];
            move_uploaded_file($file_tmp,"pic/".$product);
         
             }
	
	
	header('Location: courier-add-success.php'); 
	exit;
	//echo $Ship;
}//addCons

function editCons() {
    $cid = $_POST['cid'];
    $s_name = $_POST['s_name'];
	$s_phone = $_POST['s_phone'];
	$s_mail = $_POST['s_mail'];
	$s_add = $_POST['s_add'];
	
	$r_name = $_POST['r_name'];
	$r_phone = $_POST['r_phone'];
	$r_mail = $_POST['r_mail'];
	$r_add = $_POST['r_add'];
	
	$cons_no = $_POST['cons_no'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$invoice_no = $_POST['invoice_no'];
	
	
	$product = $_POST['product'];
	$qty = $_POST['qty'];
	$Totalfreight = $_POST['Totalfreight'];
	$Mode = $_POST['Mode'];
	$pmode = $_POST['pmode'];
	
	
	$pickupdate = $_POST['pickupdate'];
	$Deptdate = $_POST['Deptdate'];
	$Origin = $_POST['Origin'];
	$Destination = $_POST['Destination'];
	$status = $_POST['status']; 
	
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];
	
	$sql = "UPDATE tbl_courier SET
	cons_no = '$cons_no',
	s_name = '$s_name',
	s_phone = '$s_phone',  
	s_mail = '$s_mail', 
	s_add = '$s_add', 
	r_name = '$r_name', 
	r_phone = '$r_phone', 
	r_add = '$r_add', 
	invoice_no = '$invoice_no', 
	type = '$Shiptype', 
	product = '$product', 
	weight = '$Weight', 
	qty = '$qty', 
	mode = '$Mode', 
	freight = '$Totalfreight', 
	dept_date = '$Deptdate', 
	pick_date = '$pickupdate', 
	pmode = '$pmode', 
	origin = '$Origin', 
	destination = '$Destination', 
	status = '$status',
	lat = '$lat',
	lon = '$lon'
	WHERE cid = $cid";
	

	dbQuery($sql);
	
	
	header('Location: courier-edit-success.php'); 
	
}//editCons


function markDelivered() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_courier
			SET status = 'Delivered'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php'); 
			
}//markDelivered();

function addNewOffice() {
	
	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];
	
	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: office-add-success.php');
}//addNewOffice

function addManager() {
	
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	
	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo' )";
	dbQuery($sql);
	
	header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus() {
	
	$current_city = $_POST['current_city'];
	$update_date = $_POST['update_date'];
	$new_status = $_POST['new_status'];
	$comments = $_POST['comments'];
	$bk_time = $_POST['bk_time'];
	$cid = (int)$_POST['cid'];
	$cons_no = $_POST['cons_no'];
	$current_location = $_POST['current_location'];
	$r_name = $_POST['r_name'];
	$r_phone = $_POST['r_phone'];
	$r_mail = $_POST['r_mail'];
	$r_add = $_POST['r_add'];
	//$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_track (cid, cons_no, current_city, new_status, current_location, comments, update_date, bk_time, r_name, r_phone, r_mail, r_add)
			VALUES ($cid, '$cons_no', '$current_city', '$new_status', '$current_location', '$comments', '$update_date','$bk_time', '$r_name', '$r_phone', '$r_mail', '$r_add')";
	dbQuery($sql);
	
	$sql_1 = "UPDATE tbl_courier 
				SET status = '$status' 
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
	dbQuery($sql_1);
  
  
					//Text Msg
                
                     $account_sid = getenv("TWILIO_ACCOUNT_SID");
                    $auth_token = getenv("TWILIO_AUTH_TOKEN");
                    
                    $url = "https://api.twilio.com/2010-04-01/Accounts/$account_sid/SMS/Messages";
                    $to = $r_phone;
                    $from = getenv("TWILIO_FROM"); // twilio trial verified number
                    $body = "Dear $r_name, We wish to notify you of your consignment current status. \nKindly Check your email to view current location of your package. \nThanks";
                    $data = array (
                        'From' => $from,
                        'To' => $to,
                        'Body' => $body,
                    );
                    $post = http_build_query($data);
                    $x = curl_init($url );
                    curl_setopt($x, CURLOPT_POST, true);
                    curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                    curl_setopt($x, CURLOPT_USERPWD, "$account_sid:$auth_token");
                    curl_setopt($x, CURLOPT_POSTFIELDS, $post);
                    $y = curl_exec($x);
                    curl_close($x);
	
       	

		
		//now send email
	//email it now.	

			$subject = "CONSIGNMENT NEW LOCATION";
			$to = $r_mail;
			$msg_body  = "
			



			<!DOCTYPE html>
<html lang='en' >
<head>
  <meta charset='UTF-8'>
  <title>CONSIGNMENT LOCATION UPDATED </title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!--
 This is an example of a simple transactional email. 
 License: MIT
 Credit: Instagram
-->

<body style='margin:0;padding:0' dir='ltr' bgcolor='#ffffff'>
  <table border='0' cellspacing='0' cellpadding='0' align='center' id='m_-7626415423304311386email_table' style='border-collapse:collapse'>
    <tbody>
      <tr>
        <td id='m_-7626415423304311386email_content' style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;background:#ffffff'>
          <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
            <tbody>
              <tr>
                <td height='20' style='line-height:20px' colspan='3'>&nbsp;</td>
              </tr>
              <tr>
                <td height='1' colspan='3' style='line-height:1px'></td>
              </tr>
              <tr>
                <td>
                  <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse;text-align:center;width:100%'>
                    <tbody>
                      <tr>
                        <td width='15px' style='width:15px'></td>
                        <td style='line-height:0px;max-width:600px;padding:0 0 15px 0'>
                          <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                            <tbody>
                              <tr>
                                <td style='width:100%;text-align:left;height:33px'><img height='55' src='https://springjetexpress.com/assets/home/logo.png'></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td width='15px' style='width:15px'></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table border='0' width='430' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto'>
                    <tbody>
                      <tr>
                        <td>
                          <table border='0' width='430px' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto;width:430px'>
                            <tbody>
                              <tr>
                                <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                              </tr>
                              <tr>
                                <td>
                                  <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                            <tbody>
                                              <tr>
                                                <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                                                <td>
                                                  <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                    <tbody>
                                                      <tr>
                                                        <td>
                                                          <p style='margin:10px 0 10px 0;color:#565a5c;font-size:18px'>Dear $r_name</p>
                                                          <p>We are glad to inform you that the status of your shipment, Tracking No.: <span style='color:#960b12'> <strong> $cons_no</strong></span> has been updated.
														   </p>
														  
														  <p>Current Status: $new_status </p>
														  <p>Current Location: $current_city </p>
														  <p>Current Time: $update_date &nbsp; $bk_time </p>
														 
														  <p> Click the button below to view you current status </p>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td height='20' style='line-height:20px'>&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td><a href='https://springjetexpress.com/track.html' style='color:#1b74e4;text-decoration:none;display:block;width:370px' target='_blank' '>
                                                            <table border='0' width='390' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                              <tbody>
                                                                <tr>
                                                                  <td style='border-collapse:collapse;border-radius:3px;text-align:center;display:block;border:solid 1px #009fdf;padding:10px 16px 14px 16px;margin:0 2px 0 auto;min-width:80px;background-color:#47a2ea'>
                                                                      <center>
                                                                        <font size='3'><span style='font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#fdfdfd;font-size:16px;line-height:16px'><span class='il'>Track Shipment</span></font>
                                                                      </center>
                                                                    </a></td>
																	
                                                                </tr>
																

                                                              </tbody>
                                                            </table>
                                                          </a></td>
                                                      </tr>
                                                      <tr>
                                                        <td height='20' style='line-height:20px'>
														</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td height='10' style='line-height:10px' colspan='1'>&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto;width:100%;max-width:600px'>
                    <tbody>
                      <tr>
                        <td height='4' style='line-height:4px' colspan='3'>&nbsp;</td>
                      </tr>
                      <tr>
                        <td width='15px' style='width:15px'></td>
                        <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                        <td style='text-align:center'>
                          
                          <div style='height:10px'></div>
                          <div style='color:#abadae;font-size:11px;margin:0 auto 5px auto'>Springjet Express Courier and Logistic Services, 1601 Willow Road, Menlo Park, CA 94025<br></div>
                           </td>
                        <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                        <td width='15px' style='width:15px'></td>
                      </tr>
                      <tr>
                        <td height='32' style='line-height:32px' colspan='3'>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td height='20' style='line-height:20px' colspan='3'>&nbsp;</td>
              </tr>
            </tbody>
          </table> </td>
      </tr>
    </tbody>
  </table>
</body>
<!-- partial -->
  
</body>
</html>
	
	";

	
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'update-status', 'body' => $msg_body);
	send_email($mail_data);
				 
	
	header('Location: update-success.php');
	exit;
}//updateaccount



function changePass() {
	$cid = $_POST['cid'];
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	
	$sql = "UPDATE tbl_courier_officers SET
	officer_name = '$ManagerName',
	off_pwd = '$Password'
	WHERE cid = $cid";
	
	dbQuery($sql);
	header('Location: manager-changepass-success.php');

}//changePass





function logOut(){
	if(isset($_SESSION['user_name'])){
		unset($_SESSION['user_name']);
	}
	if(isset($_SESSION['user_type'])){
		unset($_SESSION['user_type']);
	}
	session_destroy();
	header('Location: login.php');
}//logOut








?>