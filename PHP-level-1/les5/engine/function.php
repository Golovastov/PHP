<?php

  function getFile($typeFiles, $dirOriginImg ,$dirMinImg) {
    if(isset($_FILES['userImg'])) {
      $check = canUploadImg($_FILES['userImg'], $typeFiles); // инициализация проверки типа и размера файла
      if ($check === true) {
        makeUpload($_FILES['userImg'], $dirOriginImg, $dirMinImg); // инициализация загрузки файла
      } else
          echo "<div style='text-align:center'>Недопустимы формат или размер привышает 3 Мб</div>";
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

  function makeUpload($file, $dirOriginImg, $dirMinImg) {
    $newNameFile = hash_file('md5', $file['tmp_name']) . '.' . end(explode('.', $file['name']));
    $path =  $dirOriginImg . $newNameFile;
    $pathMin = $dirMinImg . $newNameFile;
    if (file_exists($path)) {
      echo "<div style='text-align:center'> был загружен ранее!</div>";
    } else if (move_uploaded_file($file['tmp_name'], $path)) {
      echo "<div style='text-align:center'>Файл загружен!</div>";
      create_thumbnail($path, $pathMin, 200, 200);
    } else {
        echo 'Ошибка загрузки!';
      } 
  }

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