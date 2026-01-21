<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
      $policias = array("Militar", "Civil", "Penal");
      echo "<h2>Tipos de Polícias</h2>";
      echo "<ul>";
        echo "<li>" . $policias[0] . "</li>";
        echo "<li>" . $policias[1] . "</li>";
        echo "<li>" . $policias[2] . "</li>";
      echo "</ul>";

      $frutas = ["Manga", "Banana", "Uva", "Abacaxi"];
      echo "<h2>Frutas</h2>";
      echo "<ul>";
        echo "<li>" . $frutas[0] . "</li>";
        echo "<li>" . $frutas[1] . "</li>";
        echo "<li>" . $frutas[2] . "</li>";
        echo "<li>" . $frutas[3] . "</li>";
      echo "</ul>";
    ?>
</body>
</html>