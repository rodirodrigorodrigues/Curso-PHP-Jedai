<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Funções</title>
</head>
<body>
  <?php
    function livePix($valor = 71) {
        echo "Anonimo contribiu com o valor de ".$valor."<br>";
    }

    livePix();
    livePix(150);
  ?>
</body>
</html>