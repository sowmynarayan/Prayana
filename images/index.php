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
<meta name="robots" content ="noindex, nofollow">
<title>Prayana'10</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript" src="../unitpngfix.js"></script>
</head>
<body>

<div id="main_container">
	<div class="top_leafs"><img src="top_leafs.png" alt="" title=" "/></div>
	<div id="header">
    	<div class="logo">
       <a href="../index.php">Prayana'10</a>
        </div>

        <div class="menu">
        	<ul>                            
       		<li class="selected"><a href="../index.php">home</a></li>
		<li><a href="http://tecuthsav.tce.edu/forum" target="_blank">forum</a></li>
                <li><a href="../contact.php">contact us</a></li>
		<?php
		if($s_status == 0)
		{?>
		<li><a href="../login.php">login</a></li>
		<?php
		}
		else
		{?>	
			<li><a href="../logout.php">logout</a></li>
		<?php } ?>
        	</ul>
        </div>
        
    </div>
    
    
    <div id="center_content">
    		<div class="left_content">
            
                    <br /><br /><br /><br /><br />
                    <center><h1>
                            Oops, wrong turn :-O
                    </h1>
        
        
               	    <br /><br />
                
                    <h3><a href = "../loggedin.php" >  Go back to where you belong!</a></h3></center>
                     <div class="photos_block"> 
                    
                    	  <div class="photo_box">
                        	 
                               
                    </div>  
            
            
            </div>
            
            
           
            
            </div>
            
            
            <div class="bottom_content">
            	
           
                
                <div class="footer">
                 <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> &copy; Prayana 2010. All Rights Reserved
		<br />
		 CSS designed by <a href="http://csstemplatesmarket.com"> CSStemplatesmarket.com </a>
                </div> 
            
            
            </div>
    
    
    
    </div>
    
    

    
</div>
<!-- end of main_container -->

</body>
</html>
