<?php

error_reporting(0);
session_start();
if($s_status == 1)
{
	$s_brute =$s_brute + 1; 
	if($s_brute > 100)
		header('Location: logout.php');
	else
	{
	include 'config.php';
	include 'magic_quote.php';

	$query= "select password from users where username='$s_uname'";
	$res = mysql_query($query);
	$ans = mysql_fetch_array($res);
	$p = cleanQuery($ans['password']);		// actual answer fetched from mysql
	$a = cleanQuery($_POST["answer_1"]);		// user entered answer
	
	if (strcmp($a,$p) == 0 && $s_status==1 )
	{
		$s_count=8;
		$s_brute = 1;
	}
	header('Location: loggedin.php');	
	}	
}
else
{
	header('Location: login.php');
}

?>
