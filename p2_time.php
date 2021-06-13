<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1"/>
	<title>Time</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<center>
		<span style="font-size: 70px;"><b>
			<?php 
				date_default_timezone_set("Asia/Kolkata");
				echo date(" h: i : s A"); 
			?> 
		</b>
		</span>
	</center>
</body>
</html>