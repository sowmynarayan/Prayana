<?php
session_start();
error_reporting(0);
if($s_count >= 17 && $s_status==1 )
{
$s_count = 17;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Level 17</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="unitpngfix.js"></script>
</head>
<body>

	<!-- the path to redemption doesn't start here --> 
	
		<!-- Perhaps the Proteas would have thanked this Indian -->
			
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
    
    
    <div id="center_content">
    		<div class="left_content">
            
                    <h1>Level 17</h1>
                    <p style = "font-size: 20px; line-height: 30px">It was a cloudy day.The Rebels were fighting the New Order to acquire the twenty precious stones.Then the heavens opened up.The Englishmen suggested to the Rebels that they sacrifice 19 people.The Indian thought 14 would do.The Rebels followed the Indian's sayings,which spelled their doom.The remaining Rebels had to join the New Order.
                    </p>
                    <br/ >
                    Answer : 
			<form action="db_verify.php" method = "post">
			<input type = "text" name = "answer_1">
			<input type = "submit" name = "submit">
			</form>	
                      	  <div class="photo_box">
                        	 
                               
                    </div>  
                     <div class="photos_block"> 
                    
                    	  <div class="photo_box">
                        	 
                               
                    </div>  
            
            </div>
          
            
            </div>
            
            
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
