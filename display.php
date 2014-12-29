<?php
	
	
	session_start();
	error_reporting(0);	
	include 'config.php';
	include 'magic_quote.php';
	
	if($s_status==1 && $s_uname=="admin")
	{
	$query = "select * from users order by count desc, finish_date desc" ;
	$result = mysql_query($query);
	print "<table border=\"1\" align=\"center\"><tr><th>Name</th><th>Level</th><th>Finish Date</th></tr>";	
	while($row = mysql_fetch_array($result))
	{
	print "<tr><td>";
	print $row['username'];
	print "</td><td>";
	print $row['count'];
	print "</td><td>";
	print $row['finish_date'];
	print "</td></tr>";
	}
	mysql_close();	
	}
	else
	{
		header('Location: login.php');
	}
?>
