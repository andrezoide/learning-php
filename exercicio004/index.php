<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interacao com formularios</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      teste do cu melado
    </h1>
  </header>
  <section>
    <form action="teste.php" method="get">
      <label>Nome</label>
      <input type="text" name="nome" id="idNome">
      <br/>
      <label>Sobrenome</label>
      <input type="text" name="sobrenome" id="idSobrenome">
      <input type="submit" value="enviar">
    </form>
  </section>
</body>

</html>