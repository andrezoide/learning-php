<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Numero Real</title>
</head>

<body>
    <header>
      <h1>Analisador de número real</h1>
    </header>
    <main>
      <h2>Informe o numero desejado</h2>
      <section>
        <form action="result.php" method="get">
          <input step="0.001" type="number" name="number">
          <input type="submit" value="enviar">
        </form>
        
      </section>
    </main>
</body>

</html>