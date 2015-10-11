<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Notenrechner :: Start</title>
  <link href="css/normalize.css" rel="stylesheet" media="all">
  <link href="css/style.css" rel="stylesheet" media="all">
    <style>
      .fehler { 
        width: 80vw;;
        font-size: 2em;
        color: red; 
        position: absolute;
        top: 1vh;
        text-align: center;
        border-style: solid yellow;
        border-size: 10px;

      }
      .body {               
        background-color: #226666;
        display: -webkit-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;  
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;  
      }
      .anmeldung {
        background-color: #669999;
        font-size: 2em;
        font-family: sans-serif;
        margin: auto;
        padding: 1vw;        
      }
      input[type="submit"] {
          padding-top: -;
          padding-bottom: -;
          margin-top: 10px;
          margin-bottom: 10px;
          padding-left: 10px;
          padding-right: 10px;
          border-radius: 25px;
      }
      .form {        
          margin-left: 2vw;
          margin-right: 2vw;
          margin-bottom: 2vh;
          margin-top: 2vh;     
      }
      

    </style>
    
  </head>
<body class="body">
<?php
if (isset($_GET["f"]) && $_GET["f"] == 1) {
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
