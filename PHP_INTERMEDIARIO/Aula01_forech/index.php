<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
  <?php
    $arr = ["PP", "PC", "PM"];
    foreach($arr as $key => $value) {
      echo $key." - ".$value;
      echo "<br>";
    }

    $tamanhoDoArray = count($arr);
    for($i = 0; $i < $tamanhoDoArray; $i++) {
      echo $arr[$i];
      echo "<br>";
    }
  ?>
</body>
</html>