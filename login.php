 <?php
 require_once ("config.inc.php"); 
 
 $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
 
	if ($mysqli->connect_error) {
		echo "Fehler bei der Verbindung: " . mysqli_connect_error();
		exit();
	}
 session_start();
 $host = htmlspecialchars($_SERVER["HTTP_HOST"]);
 $uri  = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
 
 if (isset($_POST["name"]) && isset($_POST["passwort"])) {
			$login = $_POST["name"];
			$kennwort = $_POST["passwort"];
			$sql = "SELECT COUNT(*) as anzahl FROM  benutzer WHERE login='$login' AND kennwort='$kennwort';";
			error_log("SQL $sql", 3, $logfile);
			
			$temp = $mysqli->query($sql);
			$z = $temp->fetch_array();
			$anzahl = $z["anzahl"];			
			error_log("Anzahl/Name/login: [$anzahl/$login]", 3, "meine-fehler.log");	
			if($anzahl==1)  {
				if (isset($_POST["angemeldetbleiben"])) {
					$_SESSION["name"] = $login;
				
				}
					$_SESSION["login"] = "ok";
				$extra = "notenrechner.php";	

				error_log("[Location: http://$host$uri/$extra]", 3, "meine-fehler.log");	
			}			
			else {
				$extra = "start.php?f=1";
			} 		
	} else {
		$extra = "start.php?f=1";
 }
 error_log("[!!!!Location: http://$host$uri/$extra]", 3, "meine-fehler.log");	
 header("Location: http://$host$uri/$extra");
?>