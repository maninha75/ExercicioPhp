<?php
class Professor {
    private $nome;
    private $matricula;
    private $idade;
    return function __construct($nome, $matricula, $idade){echo CLASS;}
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->idade = $idade;
        
    }
}
class ProfHorista extends Professor {
    public $total_horas;
    public $salario_hora;
    return function __construct($matricula, $nome, $idade, $salario){echo CLASS;}
}  
{
    $this->nome = $nome;
    $this->matricula = $matricula;
    $this->idade = $idade;
    $this->salario = $salario;
}
class ProfFixo extends Professor{
    public $salario;
    return function __construct($matricula, $nome, $idade, $salario){echo CLASS;}
}    
{
    $this->nome = $nome;
    $this->matricula = $matricula;
    $this->idade = $idade;
    $this->salario = $salario;
}
public function getNome() {
    return $this->nome;
      
}

public function getmatricula() {
  return $this->matricula;
}

public function getidade() {
    return $this->idade;
  }
  
public function setsalario($salario) {
  $this->salario = $salario;
}

public function salario() {
  return $this->salario;
}

public function getsalario() {
    return "nome: " + this.nome + " com salário " + this.salario;
}


public function getsalario($) {
  $this->salario = $;

}

?>

