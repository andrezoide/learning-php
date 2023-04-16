<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>reajustador de preços</title>
</head>

<body>
  <?php
  $percent = $_REQUEST["percent"] ?? 0;
  $value = $_REQUEST["value"] ?? 0;
  $trated = number_format($value, 2, ",", ".");

  $tratedvalue = $value / 100;

  $result = $tratedvalue * $percent;
  $sumresult = $result + $value;
  $sumresulttrated = number_format($sumresult, 2, ",", ".");

  ?>
  <main>
    <h1>
      Reajustador de Preços
    </h1>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="value">
          Qual será o percentual de reajuste ?
        </label>
        <input type="number" name="value" value="<? $value ?>">

        <label for="percent">
          Qual será o percentual de reajuste ?
        </label>
        <input type="range" value="0" min="0" max="100" name="percent" value="<? $percent ?>" oninput="this.nextElementSibling.value = this.value">
        <output>0</output>%
        <input type="submit" value="Calular">
      </form>
    </section>
    <?php
    echo "O produto que custava <strong>R$$trated </strong>, com <strong>$percent% de aumento <br/> vai passar a custar R$$sumresulttrated</strong>"
    ?>
  </main>
</body>

</html>