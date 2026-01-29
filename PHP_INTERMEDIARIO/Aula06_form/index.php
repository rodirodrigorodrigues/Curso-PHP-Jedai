<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form: GET e POST</title>
</head>
<body>
  <?php
    // $name = $_GET['name'];
    // $email = $_GET['email'];

    // echo $name;
    // echo "<br/>";
    // echo $email;

    $name = $_POST['name'];
    $email = $_POST['email'];

    echo $name;
    echo "<br/>";
    echo $email;
  ?>
  <form action="POST">
    <input type="text" name="name" id="name">
    <input type="text" name="email" id="email">
    <input type="submit" name="acao" value="Enviar">
  </form>
</body>
</html>