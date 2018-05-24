<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Оригинальное изоброжение</title>
</head>
<body>
  <?php
    require_once('config/config.php');
    require_once('engine/function_SQL.php');
    $sql = "SELECT src from images where id='" . $_GET['id'] . "'";
    $srcOriginImg = getResult($sql);
    echo "<img src = $srcOriginImg[0]>";
  ?>
  
</body>
</html>