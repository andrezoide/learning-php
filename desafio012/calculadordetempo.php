<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Tempo</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $seconds = $_REQUEST["seconds"];

  $week = $seconds 
  ?>
  <header>
    <h1>
      Calculador de Tempo
    </h1>
  </header>
  <main>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"">
        <label for="seconds">
          Segundos
        </label>
        <input type="number" name="seconds" value="<? $seconds ?>">
        <input type="submit" value="Calcular">
      </form>
      <h2>
        Totalizando tudo
      </h2>
      <?php 
      echo "Analisando o valorq ue você digitou, <strong>$seconds segunds</strong> equivalem a um total de: <br/>";
      echo "<li>$weeks Semanas</li> <br/>";
      echo "<li>$days Dias</li> <br/>";
      echo "<li>$hours Horas</li> <br/>";
      echo "<li>$minutes Minutos</li> <br/>";
      echo "<li>$secondss Segundos</li> <br/>";
      ?>
    </section>
  </main>
</body>

</html>