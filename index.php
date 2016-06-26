<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta charset="UTF-8" />
	<title>Notenrechner :: </title>
	<style>
		.fehler { color: red; }
	 </style>
 </head>
 <body>
	<?php
		session_start();
		$host  = htmlspecialchars($_SERVER["HTTP_HOST"]);
		$uri   = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");		
		// if (isset($_SESSION["login"]) && $_SESSION["login"] == "ok") 
		if (1)
		{
			$extra = "notenrechner.php";			
		}
		else {
			$extra = "start.php";
		}
		
		 header("Location: http://$host$uri/$extra");
	?>
	
</body>
</html>