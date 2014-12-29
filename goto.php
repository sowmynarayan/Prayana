<?php
	
	
session_start();
error_reporting(0);
if($s_status==1 && $s_uname=="koushik.edu@gmail.com")
{
?>

Level No : 
<form name="level" action="gotoredirect.php" method="post">
<input type="text" name="lvl">
<input type="submit" name="go" value="Go To">
</form>

<?php
}
else
{
	header('Location: login.php');
}
?>

