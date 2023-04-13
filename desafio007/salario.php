<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>desafio 07</title>
</head>

<body>
  <?php
  $salary = $_REQUEST["salary"] ?? null;
  ?>
  <header>
    <h1>informe seu salario</h1>
  </header>
  <main>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salary">Seu Salário
          <input type="number" name="salary" value="<?= $salary ?>"/>
        </label>
        <input type="submit" value="Calcular" name="calcular" />
      </form>
    </section>
  </main>
</body>

</html>