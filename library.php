<?php 
require_once('database.php');

function assign_rand_value($num)
{
// accepts 1 - 36
  switch($num)
  {
    case "1":
     $rand_value = "a";
    break;
    case "2":
     $rand_value = "b";
    break;
    case "3":
     $rand_value = "c";
    break;
    case "4":
     $rand_value = "d";
    break;
    case "5":
     $rand_value = "e";
    break;
    case "6":
     $rand_value = "f";
    break;
    case "7":
     $rand_value = "g";
    break;
    case "8":
     $rand_value = "h";
    break;
    case "9":
     $rand_value = "i";
    break;
    case "10":
     $rand_value = "j";
    break;
    case "11":
     $rand_value = "k";
    break;
    case "12":
     $rand_value = "l";
    break;
    case "13":
     $rand_value = "m";
    break;
    case "14":
     $rand_value = "n";
    break;
    case "15":
     $rand_value = "o";
    break;
    case "16":
     $rand_value = "p";
    break;
    case "17":
     $rand_value = "q";
    break;
    case "18":
     $rand_value = "r";
    break;
    case "19":
     $rand_value = "s";
    break;
    case "20":
     $rand_value = "t";
    break;
    case "21":
     $rand_value = "u";
    break;
    case "22":
     $rand_value = "v";
    break;
    case "23":
     $rand_value = "w";
    break;
    case "24":
     $rand_value = "x";
    break;
    case "25":
     $rand_value = "y";
    break;
    case "26":
     $rand_value = "z";
    break;
    case "27":
     $rand_value = "0";
    break;
    case "28":
     $rand_value = "1";
    break;
    case "29":
     $rand_value = "2";
    break;
    case "30":
     $rand_value = "3";
    break;
    case "31":
     $rand_value = "4";
    break;
    case "32":
     $rand_value = "5";
    break;
    case "33":
     $rand_value = "6";
    break;
    case "34":
     $rand_value = "7";
    break;
    case "35":
     $rand_value = "8";
    break;
    case "36":
     $rand_value = "9";
    break;
  }
return $rand_value;
}

function get_rand_id($length)
{
  if($length>0) 
  { 
  $rand_id="";
   for($i=1; $i<=$length; $i++)
   {
   mt_srand((double)microtime() * 1000000);
   $num = mt_rand(1,36);
   $rand_id .= assign_rand_value($num);
   }
  }
return $rand_id;
} 

// Verify a password against a stored value. Accepts a bcrypt/argon hash,
// and also legacy plaintext rows so existing accounts keep working after
// they are migrated to hashes.
function verifyPassword($plain, $stored)
{
        if ($stored === '') {
                return false;
        }
        if (!empty(password_get_info($stored)['algo'])) {
                return password_verify($plain, $stored);
        }
        return hash_equals($stored, $plain);
}

// Hash a password for storage. A value that is already a hash is returned
// unchanged so re-saving an account does not double-hash it.
function hashPassword($plain)
{
        if (!empty(password_get_info($plain)['algo'])) {
                return $plain;
        }
        return password_hash($plain, PASSWORD_DEFAULT);
}

// Admin credentials come from the environment so they are not stored in the
// repository. If unset, no hardcoded admin account exists.
function adminCredentials()
{
        $user = getenv('ADMIN_USERNAME');
        $hash = getenv('ADMIN_PASSWORD_HASH');
        if (($user === false || $user === '') && ($hash === false || $hash === '')) {
                return null;
        }
        return array('username' => $user, 'hash' => $hash);
}

function checkUser($un, $pwd) {
        $admin = adminCredentials();
        if ($admin !== null && $un === $admin['username']) {
                if (!empty($admin['hash']) && verifyPassword($pwd, $admin['hash'])) {
                        $_SESSION['user_name'] = 'Admin';
                        $_SESSION['user_type'] = 'admin-role';
                        header('Location: admin.php');
                        return;
                }
        }

        // Look up the account, then compare the password in PHP. The query is
        // parameterised so user input can never change its structure.
        global $dbConn;
        $stmt = mysqli_prepare($dbConn, "SELECT cid, officer_name, off_pwd FROM tbl_courier_officers WHERE officer_name = ?");
        if (!$stmt) {
                return "...invalid details. Please try Again.";
        }
        mysqli_stmt_bind_param($stmt, 's', $un);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = $result ? mysqli_fetch_assoc($result) : null;
        mysqli_stmt_close($stmt);

        if ($row && verifyPassword($pwd, $row['off_pwd'])) {
                // Upgrade legacy plaintext passwords to a hash on first login.
                if (empty(password_get_info($row['off_pwd'])['algo'])) {
                        upgradePasswordHash((int)$row['cid'], $pwd);
                }
                $_SESSION['user_name'] = $row['officer_name'];
                $_SESSION['user_type'] = 'officer';
                header('Location: admin.php');
        } else {
                return "...invalid details. Please try Again.";
        }
}//checkUser

function upgradePasswordHash($cid, $plain)
{
        global $dbConn;
        $stmt = mysqli_prepare($dbConn, "UPDATE tbl_courier_officers SET off_pwd = ? WHERE cid = ?");
        if ($stmt) {
                $hash = hashPassword($plain);
                mysqli_stmt_bind_param($stmt, 'si', $hash, $cid);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
        }
}

function isUser(){
        if(!isset($_SESSION['user_name'])){
                header('Location: login.php');
                exit;
        }

}
?>