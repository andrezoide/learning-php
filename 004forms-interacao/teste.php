<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>resultado do teste do nome censurado</h1>
  </header>
  <main>
    <?php
    $name = $_REQUEST["nome"] ?? "ue quem eh vc";
    $sobrenome = $_REQUEST["sobrenome"] ?? "que isso porra";
    echo "Sr(a) $name $sobrenome, o resultado para culometose melantica eh positivo"
    ?>
  </main>

</body>

</html>