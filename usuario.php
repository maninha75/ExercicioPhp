<?php
//Classe usuario

class Usuario {
  private $login;
  private $senha;
  private $repete;
  
  public function getLogin() {
    return $this->login;
  }

  public function getSenha() {
    return $this->senha;
  }

  //public function getRepet() {
    //return $this->repete;
  //}
  public function setlogin($login) {
  $this->login = $login;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
    }
  //public function setRepete($repete) {
      //$this->repete = $repete;
      //}
    
  public function __construct($login, $senha){
      $this->login = $login;
      $this->senha = $senha;
      //$this->repete = $repete;
}

public function validarSenha($senha, $login){

            
            // Estamos comparando uma instância(objeto) com uma string
            if($login("cida") && $senha("123456789-09")){
                echo "Usuário logado com sucesso.";
            }else{
                echo "Login ou senha inválidos!";
            }
        }
      
}



  //  if ($senha == $repete) {
//echo "Senhas conferem";
//}
//else {
//echo "Senhas não conferem";
//}
//}
//}
//$Usuario = new Usuario("Aparecida",12345, 12345);
//echo $Usuario->validarSenha();
?>
