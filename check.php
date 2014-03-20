<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php

 $ip = $_SERVER['REMOTE_ADDR'];

//echo  $_SERVER['REMOTE_ADDR'];

mail("cctv@raymonddillon.com", "CCTV", $_SERVER['REMOTE_ADDR']);
 
 
 
 echo '<p>When you visit our site we may automatically log your IP address, a unique identifier for your computer or other access device. We will not use your IP address to identify you in any way.</p>'; ?> 
 </body>
</html>