<?php
if(isset($_POST["submit"])) {
	$name = $_POST["name"];
	$mailFrom = $_POST["mail"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];

	$mailTo = "support@globalexpresslogistics.com";
	$headers = "From: ".$mailFrom;
	$txt = "Global Express Logistics Contact: You have received an e-mail from ".$name.".\n\n".$mail.".\n\n".$phone.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	    header("Location: contact_successful.html");
}

