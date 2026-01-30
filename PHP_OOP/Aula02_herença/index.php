<?php
  class SerHumano{
    private $raca = "Ser Humano";
    private $habitacao = "Terra";

    public function getRaca() {
        echo $this->raca;
        echo "<br/>";
    }

    public function getHabitacao() {
        echo $this->habitacao;
        echo "<br/>";
    }

    protected function dna($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        echo $randomString;
        echo "<br/>";
    }
  }

  class Pessoa extends SerHumano{
    private $nome = null;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        echo $this->nome;
        echo "<br/>";
    }

    public function gerarDna() {
        // Obter métodos da classe pai
        echo parent::dna();
    }
  }

  $pessoa1 = new Pessoa;
  $pessoa1->setNome("Rodrigo");
  $pessoa1->getNome();
  $pessoa1->getRaca();
  $pessoa1->getHabitacao();
  // protected não pode ser chamado externamente, somente na classe pai ou filha
  // $pessoa1->dna();
  $pessoa1->gerarDna();
?>