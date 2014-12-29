<?php
session_start();
error_reporting(0);
if($s_count >= 36 && $s_status==1 )
{
$s_count = 36;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>You found it..!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="unitpngfix.js"></script>
</head>
<body>

	<!-- the path to redemption doesn't start here --> 
	
		<!--  Why still looking here.. Are you expecting some more levels????  Bon Voyage for PRAYANA'11  -->
			
	<!-- the path to redemption doesn't end here --> 

<div id="main_container">
	<div class="top_leafs"><img src="images/top_leafs.png" alt="" title=" "/></div>
	<div id="header">
    	<div class="logo">
       <a href="index.php">Prayana'10</a>
        </div>

        <div class="menu">
        	<ul>                            
        	<li>
        	<a>Welcome,<?php 
		if($s_status == 1)
		echo " ".$s_uname;
		?></a></li>
		<li>
		<a href="index.php" >home</a></li>
                <li><a href="http://tecuthsav.tce.edu/forum" target="_blank">forum</a></li>
                <li><a href="contact.php">contact us</a></li>
                <li><a href="logout.php">logout</a>
                </li>
              	</ul>
        </div>
        
    </div>
    
    
    		<div style="background-color:#fef8e6;width:749px;float:left;margin-left:70px;padding:15px 10px 10px 60px;">
           	<center>	
                    <h1>Awesome Achievement..! Now this HUGE TREASURE HEAP is Yours..!!</h1>
             	</center>
            	</div>
            
            
            
            </div>
            <center>
	    <img src="images/TrEaSuRe.jpg">
	    </center>
            
            <div class="bottom_content">
            	
                
               
              
                
                <div class="footer">
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                &copy; Prayana '10. All Rights Reserved
		<br />
		 CSS designed by <a href="http://csstemplatesmarket.com"> CSStemplatesmarket.com </a>
                </div> 
            
            
            </div>
    
    
    
    </div>
    
    

    
</div>
<!-- end of main_container -->

</body>
</html>
<?php }
else
{
	header('Location: login.php');
}			
?>
