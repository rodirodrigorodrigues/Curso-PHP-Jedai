<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <?php
      $nome = "Pedro";
      $idade = 25;
      $tem_carro = true;

      echo "Olá, meu nome é ".$nome.".";
      echo "<br>";
      echo "Eu tenho ".$idade." anos.";
      echo "<br>";
      echo "Possuo carro? ".$tem_carro;

      // Constantes
      define("PP", "Policia Penal");
      const SALARIO = 4500.50;
      echo "<br>";
      echo "Eu sou da classe ".PP;
      echo "<br>";
      echo "Meu salário é ".SALARIO;
    ?>
</body>
</html>