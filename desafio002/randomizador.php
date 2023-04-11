<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 2 ramdomizador de numeros</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ramdomizador turbo</h1>
  </header>
  <main>
    <strong>Esse randomizador funciona do 0 ao 99999</strong>
    <?php 
      $randomnumber = rand(0, 99999);
      echo "<p> <strong>O valor gerado é $randomnumber </strong> </p>";
    ?>
    <form method="POST">
      <input type="submit" value="gerar"/>
    </form>
  </main>
</body>

</html>