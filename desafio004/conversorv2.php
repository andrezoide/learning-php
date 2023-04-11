<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>conversor v2</title>
</head>

<body>
  <header>
    <h1>
      Conversor v2.0
    </h1>
  </header>
  <main>
    
    <section>
      <h2>Conversor de real para dolar</h2>
      <form action="result.php">
        <label>
          quanto tem ai na carteira ?
          <input type="number" name="number" />
        </label>
        <input type="submit" value="converter" />
      </form>
    </section>
  </main>
  <footer>
  <?php
    $url = "https://economia.awesomeapi.com.br/last/USD-BRL";
    $data = json_decode(file_get_contents($url), true);
    $cotacao = number_format($data["USDBRL"]["high"]);
    echo "O preço do dolar atual é: $cotacao esta sendo puxado da <a target=\"blank\" href=\"https://economia.awesomeapi.com.br/last/USD-BRL\">API</a>";

    ?>
  </footer>
</body>

</html>