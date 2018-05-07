<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="StyleBasic.css" rel="stylesheet" type="text/css">
</head>

<body style="font-size: 50px; color: white; text-align: center;">
	<?php
		$servername = "twentyone.cyftfdbak2ux.us-east-2.rds.amazonaws.com";
		$username = "gordonj1679";
		$password = "Go051686";
	
		$conn = new MySQLi($servername,$username,$password);
	
		if ($conn->connect_error)
		{
			die("connection failed: " . $conn->connect_error);
		}
	
	echo "Connection Succeded!!!"
	?>
</body>
</html>