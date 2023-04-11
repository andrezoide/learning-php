<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>conversor de moeda v1.0</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Conversor de moedas v1.0</h1>
  </header>
  <main>

    <section>
      <h2>Escolha o valor que deseja converter</h2>
      <form action="result.php" method="get">
        <label> quantos reais voce tem na carteira ?
          <input type="number" name="number" />
        </label>
        <input type="submit" value="converter" />
      </form>
    </section>
    <?php
    $dolar = 5;
    echo "valor do dolar: R$$dolar,00   11/04/2023"
    ?>
  </main>


</body>

</html>