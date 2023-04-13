<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>desafio 07</title>
</head>

<body>
  <?php
  $salary = $_REQUEST["salary"] ?? null;
  $salarytrated = number_format($salary, 2, ",", ".");
  const minimum = 1320;
  $divvalue = $salary / minimum;
  $minimumsalary = number_format($divvalue,1);
  $salaryminimun = floor($minimumsalary);
  $restsalary = $salary - $salaryminimun * minimum;
  $rest = number_format($restsalary, 2, ",", ".");

  ?>
  <header>
    <h1>informe seu salario</h1>
  </header>
  <main>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salary">Seu Salário
          <input type="number" name="salary" value="<?= $salary ?>"/>
        </label>
        <input type="submit" value="Calcular" name="calcular" />
      </form>
    </section>
    <section class="result">
      <h1>
        Resultado final
      </h1>
      <?php 
      echo "Quem recebe um salário de <strong>R$ $salarytrated </strong> ganha <strong>$salaryminimun salários mínimos</strong> + <strong>R$ $rest </strong>"
      ?>
    </section>
  </main>
  <footer class="footer">
         Valor do salário minimo de 2023: <strong>R$ 1.320,00 </strong>
  </footer>
</body>

</html>