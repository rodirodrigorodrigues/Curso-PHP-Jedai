<?php
class Marca
{
    private $nome = null;
    private $produtos = [];

    public function __construct($nome, $produtos)
    {
        $this->nome = $nome;
        $this->produtos = $produtos;
    }

    public function getNome()
    {
        echo $this->nome;
        echo "<br/>";
    }

    public function getMarcas()
    {
        foreach ($this->produtos as $key => $value) {
            echo $value;
            echo "<br/>";
        }
    }
}

$marca = new Marca("Marca X", ["Produto X1", "Produto X2"]);
$marca->getNome();
$marca->getMarcas();
?>