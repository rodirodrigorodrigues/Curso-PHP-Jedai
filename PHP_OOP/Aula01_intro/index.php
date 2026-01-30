<?php
  class Pessoa{
    private $nome = "Rodrigo";
    private $peso = 90;
    private $idade = 29;
    // Atributos estaticos
    private static $raca = "Ser Humano";

    public function crescer() {
      $this->comer();  
      echo "Estou crescendo.";
      echo "<br/>";
    }

    private function comer() {
        echo "Estou comendo.";
        echo "<br/>";
    }

    public function getRaca() {
        echo Pessoa::$raca;
        echo "<br/>";
    }
  }

  $pessoa = new Pessoa;
  $pessoa->crescer();
  $pessoa->getRaca();

?>