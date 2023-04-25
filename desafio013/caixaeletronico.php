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
      $cash5 = 5;
      $cash10 = 10;
      $cash50 = 50;
      $cash100 = 100;

      echo "<h2> Quantidade de notas para R$$value </h2>";
      ?>
      <?php
      echo ""
      ?>
      <ul>
        <li>
          <?php 
          if ($value % 2 == 0 or $value /  == 1){
            echo "<script>alert('valor invalido');</script>";
          }
          ?>
          <img src="notas/5.PNG" alt="5reais">
        </li>
        <li>
          <img src="notas/10.PNG" alt="10reais">
        </li>
        <li>
          <img src="notas/50.PNG" alt="Nota de 50 reais">
        </li>
        <li>
          <img src="notas/100.PNG" alt="Nota de 100 reais">
        </li>
      </ul>
    </div>
  </main>
</body>

</html>