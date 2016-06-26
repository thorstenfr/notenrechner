<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Notenrechner :: Start</title>
  <link href="css/normalize.css" rel="stylesheet" media="all">
  <link href="css/style.css" rel="stylesheet" media="all">
    <style>
    

    </style>
    
  </head>
<body class="body">
<?php
if (isset($_GET["f"]) && $_GET["f"] == 1)
 {
  echo "<p class='fehler'>Login-Daten nicht korrekt</p>";
}
?>
  <div class="anmeldung">
    
    <form method="post" action="login.php">
    <div class="form">
      Dein Name: <br />
      <input type="text" name="name" size="20" />
      <br />
      Passwort: <br />
      <input type="password" name="passwort" size="20" /><br />
    </div>
    <input id="los" type="submit" value="Login"  class="ntr-button"/>
    <input type="checkbox" name="angemeldetbleiben" value="angemeldet"> Angemeldet bleiben

    

    </form>

  </div>
</body>
</html>
