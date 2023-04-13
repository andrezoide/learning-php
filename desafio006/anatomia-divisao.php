<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 06</title>
</head>

<body>
  <?php
  //capturando os dados do formulario
  $dividendo = $_REQUEST["dividendo"] ?? null;
  $divisor = $_REQUEST["divisor"] ?? null;
  ?>
  <header>
    <h1>Anatomia de uma Divisão</h1>
  </header>
  <main>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="dividendo">Dividendo<input type="number" name="dividendo" value="<?= $dividendo ?>"></label>
      <label for="divisor">Divisor <input type="number" name="divisor" value="<?= $divisor ?>"></label>
      <input type="submit" value="SOMAR">
    </form>
  </main>
  <section id="resultado">
    <h2>Estrutura da divisão</h2>
    <div class="result">
      <?php
      $result = $dividendo / $divisor;
      $tratedresult = number_format($result, 0);
      $moduleresult = $dividendo % $divisor;
      echo "<strong>$dividendo</strong>  <strong>$divisor</strong> <br/>";
      echo "<strong>$moduleresult</strong><strong>$tratedresult</strong>";
      ?>
    </div>

  </section>
</body>

</html>