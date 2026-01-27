<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
  <?php
    echo "<h1>FOR</h1>";
    // For
    for($i=0; $i <= 10; $i++){
        echo "O valor de i é: $i <br>";
    }

    echo "<h1>WHILE</h1>";
    // While
    $j = 0;
    while($j <= 10){
        echo "O valor de j é: $j <br>";
        $j++;
    }

    echo "<h1>DO WHILE</h1>";
    $k = 0;
    do{
      echo "O valor de j é: $k <br>";
      $k++;
    }while($k <=10)
  ?>
</body>
</html>