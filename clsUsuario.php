<?php
//Classe usuario
class Usuario {
private $login;
private $senha;
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
public function validarSenha($senha){
return ($this->senha === $senha) ? true : false;
}
}

?>