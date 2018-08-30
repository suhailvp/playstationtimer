<?php
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('cnj',$conn) or die("unable to connect to database"); 
       if ($sql==1) {
       date_default_timezone_set('Asia/Kolkata');
		   $time=date("h : i A");
       $query="UPDATE times SET stp = '$time' WHERE number=1";
		   $result = mysql_query($query);
		   if (!$result) {
    	  die('Invalid query: ' . mysql_error());
    	 }
       header("location:index.php");
    	 }
?>