<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword']);
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Access</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="background-wrap">
  <div class="background"></div>
</div>

<form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
  <h1 id="litheader">Administrator</h1>
 
  <div class="inset">
  <center> <font color="#FF0000"id="litheader" style="font-size:12px;">
								<?php echo $error; ?>
								</font></center><br>
    <p> 
      <input type="text" name="txtusername" id="txtusername"  autocomplete="off"   required >
    </p>
    <p>
      <input name="txtpassword" id="txtpassword" type="password"  autocomplete="off"  required >
    </p>
    <div style="text-align: center;">
     
     
    </div>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>
  
  <p class="p-container">
    <input type="submit" name="Submit" value="Authorize"><br>
	
  </p>
</form>
                 
</body>
</html>
