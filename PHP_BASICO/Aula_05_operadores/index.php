<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
  <?php
    $mike1 = "PPENAL";
    $mike2 = "PMILITAR";
    $idadeMike1 = 30;
    $idadeMike2 = "30";

    // Operadores de comparação (compara apenas o valor)
    if($mike1 == $mike2){
        echo "As variáveis são iguais.";
    } else {
        echo "As variáveis são diferentes.";
    }
    
    // Operador de identidade
    if($mike1 != $mike2){
        echo "<br>As variáveis são diferentes.";
    } else {
        echo "<br>As variáveis são iguais.";
    }

    // Operador de identidade (compara valor e tipo)
    if($idadeMike1 === $idadeMike2){
        echo "<br>As variáveis são idênticas.";
    } else {
        echo "<br>As variáveis não são idênticas.";
    }
  ?>
</body>
</html>