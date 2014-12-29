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

	$query= "select * from answer where qid='$s_count'";
	$res = mysql_query($query);
	$ans = mysql_fetch_array($res);
	$p = cleanQuery($ans['answer']);		// actual answer fetched from mysql
	$n = cleanQuery($ans['near']);			// Nearest answer
	$desc = cleanQuery($ans['desc']);		// Nearest Description
	$a = cleanQuery($_POST["answer_1"]);		// user entered answer

	
	if (strcmp($a,$p)==0  && $s_status==1 )
	{
		$s_brute = 1;
		mysql_close();
		header('Location: loggedin.php');
	}
	elseif (strcmp($a,$n) == 0 && $s_status==1 )
	{
		$s_brute = 1;
		$s_desc = $desc;
		mysql_close();
		$s_nearcheck = 1;
		header('Location: near.php'); 
	}
	else
	{
		mysql_close();
		header('Location: loggedin.php'); 
	}
	}
}
else
{
	header('Location: login.php');
}

?>
