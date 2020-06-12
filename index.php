<?php
class Professor {
    private $nome;
    private $matricula;
    private $idade;

    public function getNome() {
      return $this->nome;
    }

    public function getMatricula() {
      return $this->matricula;
    }

    public function getIdade() {
      return $this->idade;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function setMatricula($matricula) {
      $this->matricula = $matricula;
    }

    public function setIdade($idade) {
      $this->idade = $idade;
    }

    public function __construct($nome, $idade, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->idade = $idade;
        echo __CLASS__."<br>";
     }
    }
class ProfHorista extends Professor {
    private $totalHoras;
    private $salarioHoras;
    
    public function __construct($nome, $idade, $matricula, $salarioHoras, $totalhoras){
    Professor::setNome($nome);
    Professor::setIdade($idade);
    Professor::setMatricula($matricula);
    $this->salarioHoras = $salarioHoras;
    $this->totalHoras = $totalHoras;
    echo __CLASS__."<br>";
    }

    public function CalcularSalario(){
      return $this->totalHoras*$this->$salarioHoras*4;
      }
  }
class ProfFixo extends Professor{
  private $salario;
  public function __construct($nome, $idade, $matricula, $salario){
    Professor::setNome($nome);
    Professor::setIdade($idade);
    Professor::setMatricula($matricula);
    $this->salario = $salario;
    echo __CLASS__."<br>";
    }
  }    
$Professor = new Professor('Aparecida', 44, 120118830);
$ProfHorista = new ProfHorista('Aparecida', 44, 120118830, 10, 300.00);
$ProfFixo = new ProfFixo('Aparecida', 44, 120118830, 2000.00);
echo $ProfHorista->CalcularSalario();
echo "<br><br><br>";
var_dump($Professor);

var_dump($ProfHorista);

var_dump($ProfFixo);


?>
