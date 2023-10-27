<?php

$saluto = "ciao da php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Password Generator</title>
</head>
<body>
  <h1>Strong Password Generator</h1>
  <h2>Genera una password sicura</h2>
  <div class="container">
    <div class="info">
      <p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
    </div>
    <form class="setting">
      <span>Lunghezza password:</span>
      <input type="number"><br>

      <button class="submit" type="submit">Invia</button>
      <button class="reset" type="reset">Annulla</button>
    </form>
  </div>
</body>
</html>