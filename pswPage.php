<?php
  session_start();

  if(isset($_SESSION["password_sended"])){
    $text = $_SESSION["password_sended"];
  }else{
    header("Location: ./index.php");
  }


  include __DIR__ . "/partials/head.php";
?>
<body>
  <h1>Password Generata</h1>
  <h2><strong><?php echo $text ?></strong></h2>
  <form action="index.php">
    <button type="submit" class="submit">Torna indietro</button>
  </form>
</body>
</html>