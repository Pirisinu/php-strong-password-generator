<?php
//Import generatore di Password
include_once __DIR__ . '/partials/function.php';

//Controllo se è stato selezionato un numero
if(isset($_POST['numSelected'])){
  //Controllo validita lunghezza desiderata
  if($_POST['numSelected'] >= 8 && $_POST['numSelected'] <= 32){
    session_start();
    $_SESSION['password_sended'] = randomPswGen($_POST['numSelected']);
    header("Location: ./pswPage.php");
  }else{
    echo "Seleziona una lunghezza di almeno 3 caratteri o inferiore ai 32 caratteri.";
  }
}
//Import head
include_once __DIR__ . '/partials/head.php';
?>
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