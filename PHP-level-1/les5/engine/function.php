<?php
  function getFile() {
    if(isset($_FILES['userImg'])) {
      $check = canUploadImg($_FILES['userImg'], $typeFilse); // инициализация проверки типа и размера файла
      if ($check === true) {
        makeUpload($_FILES['userImg'], $dirUploadedFiles); // инициализация загрузки файла
        echo "<div style='text-align:center'>Файл успешно загружен!</div>";
      } else
          echo "<div style='text-align:center'>Недопустимы формат или размер привышает 3 Мб</div>";
    }
  }

  function canUploadImg($file, $typeFilse) {
    // если больше 3мб
    if ($file['size'] > 3e+6) {
      return false;
    } else {
        $getMime = explode('.', $file['name']); // разбиваем имя файла по точке и получаем массив
        $mime = strtolower(end($getMime)); // переводим в нижний регистр
        // если расширение не входит в список допустимых
        if(!in_array($mime, $typeFilse)) {
          return false;
        }
          return true;
      }
    }

  function makeUpload($file, $dirUploadedFiles) {
    $newNameFile = hash_file('md5', $file['tmp_name']. '.' .end(explode('.', $file['name'])));
    $path =  '/' . $dirUploadedFiles . '/' . $newNameFile;
    $pathMin = '/' . $dirUploadedFiles . '/min/' . $newNameFile;
    if (file_exists($path)) {
      echo " был загружен ранее!";
      if (move_uploaded_file($file['tmp_name'], $path)) {
        print 'Файл загруже!';
        create_tumbnail($path, $pathMin, 250, 250);
      } else {
          echo 'Ошибка загрузки!';
        }
    } 
    return $render = true;   
  }

  function render() {
    $file = scandir()
  }
?>