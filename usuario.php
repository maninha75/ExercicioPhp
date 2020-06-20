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

  public function setlogin($login) {
  $this->login = $login;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
    }
    
  public function __construct($login, $senha){
      $this->login = $login;
      $this->senha = $senha;
 }

public function validarSenha($senha, $login){
           if($login("cida") && $senha("123456789-09")){
                echo "Usuário logado com sucesso.";
            }else{
                echo "Login ou senha inválidos!";
           }
     }  
}

?>
