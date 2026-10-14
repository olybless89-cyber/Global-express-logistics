<?php

require_once 'database.php';
require_once 'process.php';

function send_email($data) {
	$to = $data['to'];
	$sub = $data['sub'];
	$msg = $data['msg'];
	$message = get_email_msg($data);
    $header = "From: DHL EXPRESS LOGISTICS <support@dhlexpresslogistics.com>  \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$retval = mail ($to,$sub,$message,$header);
	
  
	
}

function get_email_msg($data) {
	$msg_text = "";
	
	switch($data['msg']) {
		
		case 'update-status':
			$msg_text = $data['body'];
		break;
		
		case 'add-cons':
			$msg_text = $data['body'];
		break;
		
	}//switch
	return $msg_text;
}

?>