<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>tipos primitivos</h1>
  <?php
  $nome = "true";
  var_dump($nome);

  echo " existem 4 tipos primitivos complementares ";

  $nome = "andre \u{1F596}";
  echo "$nome \"andre\" caralho";
  ?>
  <p>1- string que é texto entre aspas duplas: "string"</p>
  <p>2- float/double que é um numero com com ponto: 3.1415</p>
  <p>3- bool/boolean, verdadeiro ou falso basicamente: true or false</p>
  <p>4- int é um numero inteiro normal, que nao tem separaçao por ponto igual ao float: 258</p>
  <h2>
    exemplo de array:
  </h2>
  <p>
    ele suporta qualquer tipo dentro do vetor, abaixo tem o tipo INT, FLOAT, STRING e BOOL <br />
    $vet = [3, 1.5, "andre", false,];
  </p>

  <ul>
    <li>\n = Nova linha</li>
    <li>\t = tabula;ao horizontal</li>
    <li>\\ = barra invertida</li>
    <li>\$ = sinal de cifrao</li>
    <li>\u{} = codepoint unicode</li>
  </ul>

  <h2>
    sintaxe heredoc eh muito boa da pra escrever de qualquer jeito dentro de la <br/>
    a gente monta ela assim: <<< FRASE (ou oque eu quiser)     FRASE;   precisa escrever novamente pra fechar<br/>
    a proxima frase vai ser escrita usando isso
  </h2>
  <?php 
  $catName = "Sacola";
  $catTwoName = "Tody";
  $year = date('Y');

  echo <<< GATOS
    O ano eh $year
   A $catName, oque falar dessa gatinha pilantra que so fica de zoio esperando uma comidinha cair \n
   Esse $catTwoName entao pelo amor de deus, eu vou acabar etendo um derrame pensando nesse gordo vagabundo.
  GATOS;
  ?>
  <h2>
    tem a sintaxe nowdoc tambem que eh igual <<< FRASE (oque eu quiser) FRASE; <br/>
    a diferenca e que nao tem interpetracao
  </h2>
</body>

</html>