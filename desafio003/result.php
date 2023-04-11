<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>resultado conversao</title>
</head>

<body>
  <header>
    <h1>Seu dinheiro convertido:</h1>
  </header>
  <main>
    <?php
    $number = $_REQUEST["number"];
    $dolar = 5;
    $converted = $number / $dolar;
    echo "<h3>seu valor convertido para US: $$converted,00 </h3>"
    ?>

    <?php
    echo "valor do dolar: R$$dolar,00   11/04/2023"
    ?>
    <input type="submit" value="voltar" onclick="history.go(-1)"/>
  </main>
</body>

</html>