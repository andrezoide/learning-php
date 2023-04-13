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
  $dividendo = $_REQUEST["dividendo"] ?? null;
  $divisor = $_REQUEST["divisor"] ?? null;
  ?>
  <header>
    <h1>Anatomia de uma Divisão</h1>
  </header>
  <main>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="dividendo">Dividendo<input type="number" name="dividendo" value="<?= $dividendo ?>"></label>
      <label for="divisor">Divisor  <input type="number" name="divisor" value="<?= $divisor ?>"></label>
      <input type="submit" value="SOMAR">
    </form>
  </main>
  <section id="resultado">
    <h2>Estrutura da divisão</h2>
    <?php
    $result = $dividendo / $divisor;
    echo "<strong>$result</strong>";
    ?>
  </section>
</body>

</html>