<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Головастов Константин д/з #4</title>
</head>
<body>
  <form method="POST" enctype="multipart/form-data">
  <input name="userImg" type="file">
  <br><br>
  <input type="submit" value="Добавить">
  </form>
  <?php
    // Config 
    $root = $_SERVER['DOCUMENT_ROOT']; // корневая директория
    $dirFiles = '/usrerImages'; // имя директории с загруженными файлами
    $arrTypeFiles = ['jpg', 'png']; // поддерживаемые типы файлов
    $newNameFile = '/userImg'; // Новое имя загруженного файл
    $countUploadedFiles = 0; // счетчик загруженных файлов
    // End Config

   
    $dirUploadedFiles =  $root . $dirFiles; // директория с загруженными файлами
    countUploadedFiles($arrTypeFiles); // инициализация счетчика загруженных файлов
    $uploadedFileInfo = $_FILES['userImg']; // массив с информацией о файле
    // Проверяем тип загруженного файла и дописываем расширение
 
    
    function countUploadedFiles($arrTypeFiles) {
      for ($i = 0; $i <= count($arrTypeFiles); $i++) {
        $count =  count(glob($dirUploadedFiles . '/*.' . $arrTypeFiles[$i]));
        $countUploadedFiles += $count;
      };
      return $countUploadedFiles;
    }
    function checkFileType($arrTypeFiles) {
      for ($i = 0; $i <= count($arrTypeFiles); $i++) {
            
      }
    }
  ?>
</body>
</html>