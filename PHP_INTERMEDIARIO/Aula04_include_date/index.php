<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Date</title>
</head>
<body>
  <?php
    include("header.php");
    date_default_timezone_set("America/Sao_Paulo");
    echo date("d/m/y");
    echo date("d/m/y H:i:s");
    include("footer.php");
  ?>
</body>
</html>