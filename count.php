<?php
	
	
	session_start();
	error_reporting(0);	
	include 'config.php';
	include 'magic_quote.php';
	
	if($s_status==1 && $s_uname=="admin")
	{
	$query = "select count, count(*) as total from users group by count order by count desc" ;
	$result = mysql_query($query);
	print "<table border=\"1\" align=\"center\"><tr><th>Level</th><th>No of Players</th></tr>";	
	while($row = mysql_fetch_array($result))
	{
	print "<tr><td>";
	print $row['count'];
	print "</td><td>";
	print $row['total'];
	print "</td></tr>";
	}
	mysql_close();	
	}
	else
	{
		header('Location: login.php');
	}
?>
