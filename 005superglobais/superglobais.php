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
    <pre>
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

        <h2>
          outras super globais:
        </h2>
        <p>
          $_COOKIE: contem informação dos cookies, sao pequenas variaveis guardadas dentro do navegador<br/>
          $_FILES: se fizermos upload de arquivos da pra pegar os dados do arquivo por essa super global.<br/>
          $_SESSION: ela permite que variaveis de sessao(variaveis que nao se perdem entre as navegações de paginas)<br/>
          possam ser utilizadas.<br/>
          $_ENV: sao variaveis de ambiente do servidor. <br/>
          $_SERVER: <br/>
          $GLOBALS: ela é a mais completa, mostra os dados de todas as outras. parece ser confuso
        </p>

        <?php
        echo "<h1> exemplo do COOKIE </h1><br/>";
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
        var_dump($_COOKIE);

        echo "<h1>exemplo do SESSION </h1>";
        session_start();
        $_SESSION["teste"] = "deu certo";
        var_dump($_SESSION);

        echo "<h1>exemplo do SERVER</h1>";
        var_dump($_SERVER);

        echo "<h1>exemplo do GLOBALS</h1>";
        var_dump($GLOBALS);

        ?>
      </section>
      </pre>
  </main>
</body>

</html>