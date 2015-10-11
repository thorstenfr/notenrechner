<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] == "ok") {
?>

<!doctype html>
<html>
    <head>
	<!--	<meta http-equiv="refresh" content="5; URL=denkpause.html"> -->
    	<link href="css/normalize.css" rel="stylesheet" media="all">
		<link rel="stylesheet" href="css/style.css">
		<link rel="apple-touch-icon" href="pics/ntr_icon.png" />
	    <title>Notenrechner :: HOME</title>
		<meta charset="utf-8">		
		<meta name="description" content="Notenrechner berechnet Note und Notenpunkte">
		<meta name="keywords" content="Notenrechner Linearer Notenschlüssel Oberstufe">
		<meta name="author" content="Thorsten Freimann">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/nr.js"></script>
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-65645544-1', 'auto');
			  ga('send', 'pageview');
		</script>
		            
    </head>
    <script>
		function newDoc() {
		    window.location.assign("logout.php")
		}
	</script>
    <body>
    	<div class="wrap">
    		<div class="logo">
    			<p role="title" class="title">Notenrechner</p>    			
    			

    		</div>
			
			<div class="banner">
				<p>Lies die <a href="impressum.html#hilfe">Hilfe</a>, um zu verstehen, wie Notenrechner die 
					Noten berechnet  und entscheide selbst, ob das für dich passt!</p>
			</div>
			
			<div class="sektion">
					<div class="ausgabe">
						<div class="row">
							<div class="col-9">
								<p>Linearer Notenschlüssel:</p> 
							</div>
							<div class="col-3">
								<p class="badge gruen" id="linearer_notenschluessel">1.0</p>
							</div>
						</div>
						<div class="row">
							<div class="col-9">
								<p>Notenpunkte (Oberstufe):</p>
							</div>
							<div class="col-3">
								<p class="badge gruen" id="oberstufe"> 15</p>
							</div>
						</div>
						
					</div>
				<div class="eingabe">
					<div class="row">
						<div class="col-9">
							<p>Grundlagen</p>
						</div>
						<div class="col-3">
							
							<input class="input" id="grundlage" type="number" min="0" max="99" step="1" value="30" size="3">
						
						</div>
					</div>
					<div class="row">
						<div class="col-9">
							<p>Erreicht</p>
						</div>
						<div class="col-3">
							<input class="input" id="erreichte_punkte" type="number" name="quantity" min="0" max="99" step="1" value="30">
						</div>
									
					</div>
				</div>	
					<button class="ntr-button" id="los">Berechne!</button>
								
			</div>
			<footer role="contentinfo">
			
        <ul>        	
        	<li class="nav"><a href="impressum.html">Impressum</a></li>
        	<li class="nav"><a href="logout.php">Abmelden</a></li>        	
        </ul>
    </footer>	
				
		</div> <!--wrap-->
    </body>
</html>
<?php
} else {
  $host  = htmlspecialchars($_SERVER["HTTP_HOST"]);
  $uri   = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
  $extra = "start.php";
  header("Location: http://$host$uri/$extra");
}
?>
