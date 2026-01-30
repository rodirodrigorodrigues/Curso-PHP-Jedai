<?php
  abstract class Teste {
    abstract function func2();
  }

  class Principal extends Teste {
    function func2() {
        echo "O método func2 da classe abstrada Teste foi implementado.";
        echo "<br/>";
    }
  }

  $principal = new Principal;
  $principal->func2();
?>