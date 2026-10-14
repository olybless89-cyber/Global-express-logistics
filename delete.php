<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
 include('database.php');
 
 // check if the 'cid' variable is set in URL, and check that it is valid
 if (isset($_GET['cid']) && is_numeric($_GET['cid']))
 {
 // get cid value
 $cid = $_GET['cid'];
 
 // delete the entry
 $tbl_courier = dbQuery("DELETE FROM tbl_courier WHERE cid=" . (int)$cid);
 
 // redirect back to the view page
 header("Location: courier-list.php");
 }
 else
 // if cid isn't set, or isn't valid, redirect back to view page
 {
 header("Location: courier-list.php");
 }
 
?>