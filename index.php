<?php
//Generatore di Password
function randomPswGen($numSelected){
  /* data */
  $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $lowercase = 'abcdefghijklmnopqrstuvwxyz';
  $numbers = '0123456789';
  $specialChars = '!@#$%^&*()_-+=[]{}|<>?';
  $allChars = $uppercase . $lowercase . $numbers . $specialChars;
  /* Passwold base */
  $password = '';
  /* Password base set*/
  $password .= $uppercase[rand(0,strlen($uppercase)-1)];
  $password .= $lowercase[rand(0,strlen($lowercase)-1)];
  $password .= $numbers[rand(0,strlen($numbers)-1)];
  $password .= $specialChars[rand(0,strlen($specialChars)-1)];
  /* Password restante */
  for($i = 0; $i < ($numSelected - 4); $i++) {
    $randomChar = rand(0, strlen($allChars)-1);
    $password .= $allChars[$randomChar];
  }
  return $password;
}
//Controllo se è stato selezionato un numero
if(isset($_POST['numSelected'])){
  //Controllo validita lunghezza desiderata 
  if($_POST['numSelected'] >= 8 && $_POST['numSelected'] <= 32){
    echo "La password generata è:" . randomPswGen($_POST['numSelected']);
  }else{
    echo "Seleziona una lunghezza di almeno 3 caratteri o inferiore ai 32 caratteri.";
  }
}

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
    <form action="index.php" method="POST" class="setting">
      <span>Lunghezza password:</span>
      <input name="numSelected" type="number"><br>

      <button class="submit" type="submit">Invia</button>
      <button class="reset" type="reset">Annulla</button>
    </form>
  </div>
</body>
</html>