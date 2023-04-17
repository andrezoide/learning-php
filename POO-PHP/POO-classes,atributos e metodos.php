<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO-PHP</title>
</head>
<body>
  <h1>
    POO php - classes, atributos e metodos
  </h1>
  <?php 
  class Pessoa {
   //public são os atributos
    public $nome;
    public $idade;
    //metodo ou função:
    public function Falar() {
      // pra conseguir usar dentro do escopo da classe é com THIS

      echo $this->nome. " de " .$this->idade. " acabou de falar ";
    }
  }

  // esse andre vira um objeto
  $andre = new Pessoa();
  $andre->nome = "Andre Urbaneck ";
  $andre->idade = 21;
  $andre->Falar();
  
  ?>
</body>
</html>