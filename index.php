<?php
session_start();
error_reporting(0);
if($s_status != 1)
{
		session_unregister($s_auth);
		//$s_auth = 1;	
}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Prayana'10</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="unitpngfix.js"></script>
</head>
<body>

	<!-- the path to redemption doesn't start here --> 
	
		<!-- This is where clues may (mis)guide you -->
			
	<!-- the path to redemption doesn't end here --> 		

<div id="main_container">
	<div class="top_leafs"><img src="images/top_leafs.png" alt="" title=" "/></div>
	<div id="header">
    	<div class="logo">
       <a href="index.html">Prayana'10</a>
        </div>

        <div class="menu">
        	<ul>                            
       		<li class="selected"><a href="#">home</a></li>
		<li><a href="http://tecuthsav.tce.edu/forum" target="_blank">forum</a></li>
                <li><a href="contact.php">contact us</a></li>
		<?php
		if($s_status == 0)
		{?>
		<li><a href="login.php">login</a></li>
		<?php
		}
		else
		{?>	
			<li><a href="logout.php">logout</a></li>
		<?php } ?>
        	</ul>
        </div>
        
    </div>
    
    
    <div id="center_content">
    		<div class="left_content">
            
                    <h1>Welcome to Prayana'10</h1>
                    <p>
                    
                    </p>
        
        
                    <h1><center>Things we would like you to know </center></h1>
                    <p><h3>
			<ol>
                    <li>Prayana is a Web Treasure hunt. Take time and go get yourself familiar with the normal treasure hunt rules.<br \>
			Just in case :</li>
			<ul>
				<li>The aim of the game is to move from one level/webpage/screen to another till you reach the last level/webpage/screen.</li>
				<li>The clues are hidden in the images, image name, URL, pagesource(Ctrl + U) and other places that we don't remember now.</li>
				<li>Some amount of download/manipulation may be required mostly by changing the last part of the location (.php) to .jpg,.doc,.rar</li>
				<b><li>All answers must be in lowercase WITHOUT SPACES.</li></b>
				<li>Not everything you see leads to the answer, most of them are for showing off.</li>
				<li>Look for clickable objects, Enter answer in text box or change URL or do whatever you need to do to get to the next level.</li>
				<li>Use altavista, wolframalpha, cuil, bing, askjeeves and others for help. (we told you we like to show off)</li>
			</ul>

		<li> Firefox/ Chrome is the recommended browser. </li>
		<li>A screen resolution of 1024x768 is recommended for best experience.</li>
		<li>The Forum will help you out with anything except the answers. Please take a few minutes and register.</li>
		<li>All are welcome to participate but only winners are welcome to the prize distribution. :)</li>
		<li>There is no rule 6.</li>
			</ol></h3>
                    </p>
                
                   <h1> <a href = "login.php" >  Let the journey begin!</a></h1>
                     <div class="photos_block"> 
                    
                    	  <div class="photo_box">
                        	 
                               
                    </div>  
            
            
            </div>
            
            
           
            
            </div>
            
            
            <div class="bottom_content">
            	
           
                
                <div class="footer">
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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
