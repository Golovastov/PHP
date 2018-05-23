<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <title>д/з #5 Головастов К</title>
</head>
<body>
  <form method="POST" enctype="multipart/form-data">
    <input name="userImg" type="file">
    <br><br>
    <input type="submit" value="Добавить">
  </form>
  <?php
    require_once('config/config.php');
    require_once('engine/resize.php');
    require_once('engine/function.php');
    getFile($typeFiles, $dirOriginImg, $dirMinImg);
    $imageGelary = render($dirMinImg);
  ?>
  <div class="galery">
    <? if (is_array($imageGelary)) : ?>
    <? foreach($imageGelary['imgMin'] as $imgMin) : ?>
    <div>
      <a href='origin_img.php?hashName=<?=$imgMin?>' target="_blanc">
        <img src="<?=$dirMinImg . $imgMin?>">
      </a>
    </div>
  <? endforeach; ?>
  <? endif; ?>
  </div>
</body>
</html>