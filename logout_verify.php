<?php

error_reporting(0);
session_start();
if($s_status == 1)
{
	include 'config.php';
	$s_count=14;
	$today = date("F j, Y, g:i a");		// retrieving date od last answer
	// changing count
	$query1= "update users set count = '$s_count' where username = '$s_uname' AND '$s_count' > count";
	$res1 = mysql_query($query1);
	// date when he finishes a particular level
	$query2= "update users set finish_date = '$today' where username = '$s_uname' AND '$s_count' >= count";	
	$res2 = mysql_query($query2);
	
	header('Location: loggedin.php');	
	
}
else
{
	header('Location: login.php');
}

?>
