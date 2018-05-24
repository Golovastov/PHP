<?php

  function getFile($typeFiles, $dirOriginImg ,$dirMinImg) {
    if(isset($_FILES['userImg'])) {
      $check = canUploadImg($_FILES['userImg'], $typeFiles); // инициализация проверки типа и размера файла
      if ($check === true) {
        makeUpload($_FILES['userImg'], $dirOriginImg, $dirMinImg); // инициализация загрузки файла
      } else
          echo "<div class='status' style='background-color: rgb(243, 92, 92);'>Недопустимы формат или размер привышает 3 Мб</div>";
    }
  }

  function canUploadImg($file, $typeFiles) {
    // если больше 3мб
    if ($file['size'] > 3e+6) {
      $check = false;
    } else {
        $getMime = explode('.', $file['name']); // разбиваем имя файла по точке и получаем массив
        $mime = strtolower(end($getMime)); // переводим в нижний регистр
        // если расширение не входит в список допустимых
        if(!in_array($mime, $typeFiles)) {
          $check = false;
        } else
          $check = true;
      }
      return $check;
    }
  // Метод загрузки файла
  function makeUpload($file, $dirOriginImg, $dirMinImg) {
    // новое имя файла
    $newNameFile = hash_file('md5', $file['tmp_name']) . '.' . end(explode('.', $file['name']));
    // путь к файлу
    $path =  $dirOriginImg . $newNameFile;
    // путь к минимизированному фалу
    $pathMin = $dirMinImg . $newNameFile;
    $size = $file['size'];
    if (file_exists($path)) {
      echo "<div class='status' style='background-color: rgb(243, 92, 92);'>Файл был загружен ранее!</div>";
    } else if (move_uploaded_file($file['tmp_name'], $path)) {
      // SQL запрос добавления в базу
      $sql = "INSERT into images (name, size, src) value ('$newNameFile', '$size', '$path')";
      if (!executeQuery($sql)) {
        echo "<div class='status' style='background-color: rgb(243, 92, 92);'>Файл был загружен!<br> <b>База данных не доступна!!!</b></div>";
      } else {
          echo "<div class='status' style='background-color: rgb(145, 232, 142);'>Файл загружен!</div>";
        }
      // Минимизация изображения
      create_thumbnail($path, $pathMin, 200, 200);
    } else {
        echo 'Ошибка загрузки!';
      } 
  }
  // Метод вывода изображений в браузер
  function render($dir) {
    $arrMinImg = scandir($dir);
    foreach ($arrMinImg as $imgMin) {
      if (preg_match("/\.(png|gif|jpg)$/i", $imgMin)) {
        $imageGelary['imgMin'][] = $imgMin;
      }
    }
    return $imageGelary;
  }
?>