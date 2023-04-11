<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      toma ai teu resultado
    </h1>
  </header>
  <main>
    <?php
    $number = $_REQUEST["numero"];
    $ceilnumber = $number + 1;
    $floornumber = $number - 1;
    echo "<p> O número informado foi: <strong>$number</strong> <br/>
    Seu antecessor é $floornumber <br/> Seu sucessor é $ceilnumber </p>"
    ?>
    <input type="button" onclick="history.go(-1)"/>
  </main>

</body>

</html>