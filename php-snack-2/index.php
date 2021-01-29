<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php
      if ((strlen($name) > 3) && (strpos($mail, '@') !== false && strpos($mail, '.') !== false) && (is_numeric($age) === true)) {
        echo 'Accesso riuscito';
      } else {
        echo 'Accesso negato';
      };
    ?>
  </h1>
</body>
</html>