<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>resultado</title>
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
    </section>
    <?php
    $number = $_REQUEST["number"];
    $url = "https://economia.awesomeapi.com.br/last/USD-BRL";
    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) str_replace(',', '.', $data["USDBRL"]["high"]);
    $finalresult = $number / $cotacao;

    echo "O valor convertido é igual á: US$" . number_format($finalresult, 2, ",", ".");
    ?>
    <input type="submit" value="voltar" onclick="history.go(-1)" />
  </main>
  <footer>
    <?php
    $dolarvalue = number_format($data["USDBRL"]["high"], 2, ',', '.');

    echo "O preço do dolar atual é: $dolarvalue e esta sendo puxado da <a target=\"blank\" href=\"https://economia.awesomeapi.com.br/last/USD-BRL\">API</a>";
    ?>
  </footer>
</body>

</html>