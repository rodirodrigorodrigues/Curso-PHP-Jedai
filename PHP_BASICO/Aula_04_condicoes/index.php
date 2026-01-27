<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicoes</title>
</head>
<body>
  <?php
    $instituicao = "Policia Penal";
    if($instituicao == "Policia Penal") {
      echo "<h1>Bem vindo Policial Penal</h1>";
    } else if($instituicao == "Policia Civil") {
      echo "<h1>Bem vindo Policial Civil</h1>";
    } else {
      echo "<h1>Bem vindo Visitante</h1>";
    }
  ?>
</body>
</html>