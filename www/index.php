<!doctype html>
<html>
<head>
<title>Coffe 'n' Joy</title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<script src="css/jquery-3.2.1.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<script>
	$(document).ready(function(){
		setInterval(function(){
			$('#toper').load('time.php')
		},1000);
	});
</script>
</head>
<body><center>
	<h1>Coffee 'n' Joy</h1>
	<h5>Playstation Time Controller</h5>
<div id="toper" class="stoper">
	

</div>

</center>
<center>
<table border=".5px black">
	<tr>
        <th>Number</th>
        <th>Playstation Space</th>
        <th>Action</th>
        <th> Starting Time</th>  
        <th> Ending Time</th>
    </tr>
  
    <tr class="s">
        <td>1</td>
        <td>Play Station #1</td>
        <td>
        	<form action="valstr0.php" method="GET">
        	<button class="gr"><i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
  	    	</form>
  	    	<form action="valstp0.php" method="GET">
        	<button class="rd"><i class="fa fa-stop-circle" aria-hidden="true"></i></button>
        	</form>
        	<form action="dlt0.php" method="GET">
        	<button class="out"><i class="fa fa-trash-o" aria-hidden="true"></i></button> 
        	</form>
        </td>
        <td>
		<?php include 'fst0.php';?>
		</td>
		<td>
		<?php include 'fsp0.php';?>	
		</td>
	</tr>
	<tr class="s">
		<td>2</td>
        <td>Play Station #2</td>
        <td>
        	<form action="valstr1.php" method="GET">
        	<button class="gr"><i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
  	    	</form>
  	    	<form action="valstp1.php" method="GET">
        	<button class="rd"><i class="fa fa-stop-circle" aria-hidden="true"></i></button>
        	</form>
        	<form action="dlt1.php" method="GET">
        	<button class="out"><i class="fa fa-trash-o" aria-hidden="true"></i></button> 
        	</form>
        </td>
         <td>
		<?php include 'fst1.php';?>
		</td>
		<td>
		<?php include 'fsp1.php';?>	
		</td>
	</tr>
	<tr class="s">
 		<td>3</td>
        <td>Play Station #3</td>
        <td>
        	<form action="valstr2.php" method="GET">
        	<button class="gr"><i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
  	    	</form>
  	    	<form action="valstp2.php" method="GET">
        	<button class="rd"><i class="fa fa-stop-circle" aria-hidden="true"></i></button>
        	</form>
        	<form action="dlt2.php" method="GET">
        	<button class="out"><i class="fa fa-trash-o" aria-hidden="true"></i></button> 
        	</form>
        </td>
        <td>
		<?php include 'fst2.php';?>
		</td>
		<td>
		<?php include 'fsp2.php';?>	
		</td>
	</tr>
</table>
</center>
<footer class="foot">
    <center>Terms of Use&nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy</center>

    <center><a href="http://www.foplus.in">Foplus Integrated Solutions</a></center>
</footer>
</body>
</html>