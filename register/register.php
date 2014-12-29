<?php
error_reporting(0);
require_once('recaptchalib.php');
$privatekey = "6LdV-goAAAAAAM8XrX8OdF_Kk2QD-zoMWHQWXeR-";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript" src="../unitpngfix.js"></script>
</head>
<body>

<div id="main_container">
	<div class="top_leafs"><img src="../images/top_leafs.png" alt="" title=" "/></div>
	<div id="header">
    	<div class="logo">
       <a href="../index.php">Prayana'10</a>
        </div>

        <div class="menu">
        	<ul>                            
        	<li class="selected"><a href="../index.php">home</a></li>            
                <li><a href="http://tecuthsav.tce.edu/forum" target="_blank">forum</a></li>
                <li><a href="../contact.php">contact us</a></li>
        	</ul>
        </div>
        
    </div>
     <div id="center_content">
    		<div class="left_content">
<?php
$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  print "<center><h2>Registration Failed</h2><br />You didn't provide a challenging response for the captcha.<br /><a href=\"../index.php\">Go back to registration</a></center>";
}
else
{

// Parameters to open DB


include("../config.php");
include("../magic_quote.php");
// Details got from HTML page


$name=cleanQuery($_POST['username']);
$pass=cleanQuery($_POST['password']);
$cpass=cleanQuery($_POST['cpassword']);
$college=cleanQuery($_POST['college']);
$contact=cleanQuery($_POST['contact']);

if( $name == '' || $pass == '' || $college == '' || $contact == '' || (!validEmail($name)) || $pass != $cpass )
{
 echo "<br /><br /><center><h1>Registration failed</h1></center> ";
 echo "<br /><br />";
 echo "<center><h3><a href = \"index.php\"> Go back to register </a></h3></center>";
 mysql_close();
} 
         
//Inserting info abt user
else
{
$query1 = "select username from users where username = '$name'";
$res = mysql_query($query1);
$ans = mysql_num_rows($res);
if($ans != 0)
{
     echo "<br /><br /><center><h1>Email already exists</h1></center> ";
     echo "<br /><br />";
     echo "<center><h3><a href = \"index.php\"> Go back to register </a></h3></center>";
     mysql_close();
}
else
{
$query="insert into users values ('$name','$pass','$college','$contact',0,'yet to start','yet to start')";  // 0 is added for count value.. So add extra column in user table
mysql_query($query);

mysql_close();
echo "<meta http-equiv = \"refresh\" content = \"0; url = ../index.php\" >";
}
}
}
?>
  <div class="photos_block"> 
                    	  <div class="photo_box">
                            </div>  
            </div>
            
            
         
            
            </div>
            
            
            <div class="bottom_content">
            	
               
                
                <div class="footer">
                
                &copy; Prayana 2010. All Rights Reserved
		<br />
		 CSS designed by <a href="http://csstemplatesmarket.com"> CSStemplatesmarket.com </a>
                </div> 
            
            
            </div>
    
    
    
    </div>
    
    

    
</div>
<!-- end of main_container -->

</body>
</html>

