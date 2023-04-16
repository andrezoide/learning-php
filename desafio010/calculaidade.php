<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Calculador de Idade</title>
</head>

<body>
  <?php 
  $birth = $_REQUEST["birth"];
  $future = $_REQUEST["future"];
  $result = $future - $birth;

  ?>
  <main>
    <h1>
      Calculador de idade
    </h1>
    <section>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="birth">
          Ano de nascimento?
        </label>
        <input type="number" name="birth" value="<?= $birth ?>> ">
        <label for="future">
          Saber sua idade em qual ano?
        </label>
        <input type="number" name="future" value="<?= $future ?>> ">
        <input type="submit" value="Calcular">
      </form>

    </section>
    <?php 
    echo "Quem nasceu em <strong>$birth</strong> vai ter <strong>$result anos</strong> em $future! "
    ?>
  </main>
</body>

</html>