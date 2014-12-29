<?php
	
	
session_start();
error_reporting(0);

	if($s_status==1 && $s_uname=="koushik.edu@gmail.com")
	{
		$s_count = $_POST['lvl'];
		header('Location: loggedin.php'); 
	}
	else
	{
		header('Location: login.php');
	}

?>
