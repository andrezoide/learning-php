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
  <?php
  $value = $_REQUEST["value"];
  ?>
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
          <input type="number" name="value" value="<?= $value ?>">
        </label>
        <input type="submit" value="Depositar">
      </form>

      <h2>
        Notas disponiveis
      </h2>
      <div>
        <ul>
          <li>
            <img src="notas/2.PNG" alt="Nota de 2 reais">
          </li>
          <li>
            <img src="notas/5.PNG" alt="Nota de 5 reais">
          </li>
          <li>
            <img src="notas/10.PNG" alt="Nota de 10 reais">
          </li>
          <li>
            <img src="notas/20.PNG" alt="Nota de 20 reais">
          </li>
          <li>
            <img src="notas/50.PNG" alt="Nota de 50 reais">
          </li>
          <li>
            <img src="notas/100.PNG" alt="Nota de 100 reais">
          </li>
        </ul>
      </div>
    </section>
  </main>
</body>

</html>