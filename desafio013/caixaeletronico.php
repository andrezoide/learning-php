<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      Caixa eletronico
    </h1>
  </header>
  <main>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="value">
          Valor:
          <input min="2" type="number" name="value" value="<?= $value ?>">
        </label>
        <input type="submit" value="Depositar">
      </form>

    </section>
    <div>
      <?php
      $requestvalue = $_REQUEST["value"];
      $value = (int)number_format($requestvalue, 2, ",", ".");
      $cash5 = floor(($value / 5) % 2);
      $cash10 = floor(($value / 10) % 5);
      $cash50 = floor(($value / 50) % 2);
      $cash100 = floor(($value / 100) % 50);
      if ($value % 10 == 1 || $value % 10 == 2 || $value % 10 == 3 || $value % 10 == 4 || $value % 10 == 6 || $value % 10 == 7 || $value % 10 == 8 || $value % 10 == 9) {
        echo "<p style='color:red;'>Valor inválido!</p>";
      } else {
        echo "<h2> Quantidade de notas para R$$value </h2>";
        // código para exibir a lista de notas
      }
      ?>
      <ul>
        <li>
          <?php
          echo "$cash5";
          ?>
          <img src="notas/5.PNG" alt="5reais">
        </li>
        <li>
          <?php
          echo "$cash10";
          ?>
          <img src="notas/10.PNG" alt="10reais">
        </li>
        <li>
          <?php
          echo "$cash50";
          ?>
          <img src="notas/50.PNG" alt="Nota de 50 reais">
        </li>
        <li>
          <?php
          echo "$cash100";
          ?>
          <img src="notas/100.PNG" alt="Nota de 100 reais">
        </li>
      </ul>
    </div>
  </main>
</body>

</html>