<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medias Aritmeticas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  //simple:
  $number1 = $_REQUEST["number1"] ?? 0;
  $number2 = $_REQUEST["number2"] ?? 0;

  $simplearithmetic = $number1 + $number2;
  $simplearithresult = $simplearithmetic / 2;
  ?>
  <?php
  //weighted
  $weight1 = $_REQUEST["weight1"] ?? 1;
  $weight2 = $_REQUEST["weight2"] ?? 1;


  $weightxnumber1 = $weight1 * $number1;
  $weightxnumber2 = $weight2 * $number2;

  $weightsumweight = $weight1 + $weight2;

  $sumweightxnumber = $weightxnumber1 + $weightxnumber2;
  
  $result = $sumweightxnumber / $weightsumweight;
  $tratedresult = number_format($result, 2, ",");
  ?>
  <main>
    <h1>
      Médias Aritméticas
    </h1>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="number1">
          1º valor
        </label>
        <input type="number" name="number1" value="<?= $tratednumber1 ?>">
        <label for="weight1">
          1º peso
        </label>
        <input type="number" name="weight1" value="<?= $tratedweight1 ?>">
        <label for="number2">
          2º valor
        </label>
        <input type="number" name="number2" value="<?= $tratednumber2 ?>">
        <label for="weight2">
          2º peso
        </label>
        <input type="number" name="weight2" value="<?= $tratedweight2 ?>">
        <input type="submit" value="calcular" name="calcular">
    </section>
    </form>
    <?php
    echo "A média aritmética <strong>simples</strong> é: <strong> $simplearithresult </strong> <br/>";
    echo "A média aritmética <strong>aritmética</strong> é: <strong>$tratedresult </strong>";
    ?>
  </main>

</body>

</html>