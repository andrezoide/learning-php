<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>exemplo php</h1>
  <?php
  // exemplo de variavel PHP:
  $nome = "Andre";
  $sobrenome = "Urbaneck";

  //exemplo de constante PHP:
  const cidade = "curitiba";
  date_default_timezone_set("America/Sao_Paulo");
  echo "hoje e dia " . date("d:m:y");
  echo " e a hora atual " . date("G:i:s");
  echo " e meu nome é $nome $sobrenome, e estou estudando PHP,
   declarei meu nome em duas variaveis moro em " . cidade;
  echo " minha cidade foi declarada dentro de uma constante"
  ?>
  <h2>regras para nomes de identificadores:</h2>
  <ul>
    <li>
      variaveis sempre começam com o simbolo $
    </li>
    <li>
      o segundo caracter pode ser letra ou simbolo _
    </li>
    <li>
      aceita caracteres [a-z], [A-Z], [0-9] e [_]
    </li>
    <li>
      aceita caracteres da tabela ASCII e partir de 128
    </li>
    <li>
      aceita caracteres acentuados como á, õ, ç
    </li>
    <li>
      a linguagem é case sensitive em relação aos nomes
    </li>
    <li>
      nomes especiais como $this nao podem ser usados
    </li>
  </ul>

</body>

</html>