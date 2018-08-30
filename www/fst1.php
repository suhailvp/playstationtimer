<?php
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('cnj',$conn) or die("unable to connect to database"); 
       if ($sql==1) {
       $query="SELECT stp,str FROM times WHERE number=1";
       $result = mysql_query($query);
		   if (!$result) {
    	  die('Invalid query: ' . mysql_error());
    	 }
    	 	$row = mysql_fetch_row($result);
        	echo $row[1];
    	 }
?>