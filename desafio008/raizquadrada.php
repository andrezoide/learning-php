<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>desafio 08</title>
</head>

<body>
  <?php
  $number = $_REQUEST["number"] ?? null;
  ?>
  <header>
    <h1>informe um número</h1>
  </header>
  <main>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salary">Número
          <input type="number" name="number" value="<?= $number ?>"/>
        </label>
        <input type="submit" value="Calcular" name="calcular" />
      </form>
    </section>
    <section class="result">
      <h1>
        Resultado final
      </h1>
      <?php 
      echo ">"
      ?>
    </section>
  </main>
</body>

</html>