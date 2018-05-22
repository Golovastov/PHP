<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="les4.css">
  <title>Головастов Константин д/з #4</title>
</head>
<body>
  <div class="upldForm">
    <form method="POST" enctype="multipart/form-data">
    <input name="userImg" type="file">
    <br><br>
    <input type="submit" value="Добавить">
    </form>
  </div>
  <?php
    if(isset($_FILES['userImg'])) {
      $check = canUploadImg($_FILES['userImg']); // инициализация проверки типа и размера файла
      if ($check === true) {
        makeUpload($_FILES['userImg']); // инициализация загрузки файла
        echo "<div style='text-align:center'>Файл успешно загружен!</div>";
      } else
          echo "<div style='text-align:center'>Ошибка! Для загрузки выберите файл типа .jpg .png .gif</div>";
    }

    function canUploadImg ($file) {
      if ($file['size'] > 3e+6) {
        echo 'Ошибка! Размер файла слишком большой!';
        exit;
      }
	    $getMime = explode('.', $file['name']); // разбиваем имя файла по точке и получаем массив
      $mime = strtolower(end($getMime)); // переводим в нижний регистр
      $typeFiles = ['jpg', 'png', 'gif']; // поддерживаемые типы файлов
      // если расширение не входит в список допустимых
      if(!in_array($mime, $typeFiles)) {
        return 'Ошибка! Для загрузки выберите файл типа: jpg png gif';
      }
        return true;
    }

    function makeUpload($file) {
      $dirUploadedFiles =  $_SERVER['DOCUMENT_ROOT'] .'/usrerImages/'; // имя директории с загруженными файлами
      // определяем тип файла
      switch ($_FILES['userImg']['type']) {
        case 'image/jpeg':
          $type = '.jpg';
          break;
        case 'image/png':
          $type = '.png';
          break;
        case 'image/gif':
          $type = '.gif';
          break;
        default:
          return 'Ошибка $type';
          break;
      }
      $newNameFile = 'userImg' . mt_rand(0, 10000) . $type; // Новое имя загруженного файл
      move_uploaded_file($file['tmp_name'], $dirUploadedFiles . $newNameFile);
      render();
    }

  ?>
  <div class="uploadImg">
    <?php
      function render() {
        $wimage = "";
        $fimg = "";
        $path = "usrerImages/"; // задаем путь до сканируемой папки с изображениями
        $images = scandir($path); // сканируем папку
        if ($images !== false) { // если нет ошибок при сканировании
          $images = preg_grep("/\.(png|gif|jpg)$/i", $images); // через регулярку создаем массив только изображений
          if (is_array($images)) { // если изображения найдены
            foreach($images as $image) { // делаем проход по массиву
              $fimg .= "<img src='".$path.htmlspecialchars(urlencode($image))."' alt='".$image."' />";
            }
            $wimage .= $fimg;
            } else  //  если нет изображений
                $wimage .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
        } else  //  если директория пуста или произошла ошибка
          $wimage .= "<div style='text-align:center'>Директория пуста или произошла ошибка при сканировании.</div>";
          echo $wimage; // выводим полученный результат 
      } 
    ?>
  </div>
</body>
</html>