<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>exercicio 06</title>
</head>

<body>
  <?php 
  //capturando os dados do formulario
  $valor1 = $_REQUEST["valor1"] ?? 0;
  $valor2 = $_REQUEST["valor2"] ?? 0;
  ?>
  <main>
    <h1>Somador de valores</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="valor1"><input type="number" name="valor1" value="<?=$valor1?>"></label>
      <label for="valor2"><input type="number" name="valor2" value="<?=$valor2?>"></label>
      <input type="submit" value="SOMAR">
    </form>
  </main>
  <section id="resultado">
    <h2>resultado da soma</h2>
    <?php 
      $sum = $valor1 + $valor2;
      echo "<strong>$sum</strong>";
    ?>
  </section>
</body>

</html>