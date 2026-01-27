<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Date</title>
</head>
<body>
  <?php
    $sigla = "pp";
    switch($sigla) {
      case 'pp':
        echo "Policia Penal";
        break;
      case 'pc':
        echo "Policia Civil";
        break;
      case 'pm':
        echo "Policia Militar";
        break;
    }
  ?>
</body>
</html>