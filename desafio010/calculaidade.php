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
    <main>
      <h1>
        Calculador de idade
      </h1>
      <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"></form>
        <label for="nascimento">
          Ano de nascimento?
        </label>
        <input type="number" name="nascimento" value="<?= $nascimento ?>> ">
      </section>
    </main>
</body>

</html>