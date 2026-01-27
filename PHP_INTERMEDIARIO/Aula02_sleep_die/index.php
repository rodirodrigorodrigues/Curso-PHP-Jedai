<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleep e Die</title>
</head>
<body>
  <?php
    sleep(3);
    echo "Mensagem após o servidor dormir por 3s";
    echo "<br>";

    die("Servidor desligado!");
    echo "Não sera exibido!";
  ?>
</body>
</html>