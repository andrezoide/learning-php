<?php 
class Login {

  // when we turn in private why cant use this atribuites outside of class
  private $email;
  private $password;

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($e) {
    $this->email = $e;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($p) {
    $this->password = $p;
  }


  public function Logar() {
    if($this->email == "test@test.com" and $this->password == "123456"):
      echo "logado com sucesso";
    else:
      echo "dados invalidos";
    endif;
  }
}

$logar = new Login();
$logar->setEmail("test@test.com");
$logar->setPassword("123456");
$logar->Logar();
echo "<br/>";
echo $logar->getEmail();
echo $logar->getPassword();
