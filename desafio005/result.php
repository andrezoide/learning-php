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
    <h1>Analisador de número real</h1>
  </header>
  <main>
    <?php 
    $number = $_REQUEST["number"];
    $fullnumber = number_format($number, 0, ',', '.');
    $fracnumber = fmod($number, 1);
    $ok = number_format($fracnumber, 3, ',');
  

    echo "O valor inteiro do número informado é: <strong> $fullnumber </strong>  <br/>";
    echo "O valor fracionado do número informado é: <strong step=\"0.001\"> $ok </strong>";
    ?>
    <input type="submit" value="voltar" onclick="history.go(-1)" />
  </main>

</body>

</html>