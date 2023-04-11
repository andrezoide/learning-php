<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>super globais</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
      <h1>
        Super globais php
      </h1>
    </header>
    <main>
      <section>
        <p>
          ja conhecemos $_GET, $_POST e $_REQUEST. as 3 geram vetores associativos.
        </p>
        <p>
          Super global GET
        </p>
        <?php 
        var_dump($_GET);
        ?>
        <p>Super global POST</p>
        <?php 
        var_dump($_POST);
        ?>
        <p>Super global REQUEST</p>
        <?php 
        var_dump($_REQUEST);
        ?>
      </section>
    </main>
</body>

</html>