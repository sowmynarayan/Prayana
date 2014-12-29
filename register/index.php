<?php
	session_start();	
require_once('recaptchalib.php');
$publickey = "6LdV-goAAAAAAPj6i_lXrLGygIuInxoYpB_GXn1_"
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
            
                    <h1>Register</h1>
                   
		<form action="register.php" method="post"> 
		<center> 
		<table>
		<tr><td>Email Id</td><td> 
		<input type="text" name="username">
		</td></tr>
		<tr><td>
		Password</td><td>
		<input type="password" name="password">
		</td></tr>
		<tr><td>
		Confirm Password</td><td>
		<input type="password" name="cpassword">
		</td></tr>
		<tr><td>
		College</td><td>
		<input type="text" name="college">
		</td></tr>
		<tr><td>
		Contact No.</td><td>
		<input type="text" name="contact">
		</td></tr>
		<tr><td>Security</td><td>
		<?php echo recaptcha_get_html($publickey); ?>
		</td></tr>
		</table>
		
		<input type="submit" name="sub" value="Register">
		</center>
		</form>

     
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

