<?php
  $typeFiles = ['jpg', 'png', 'gif']; // поддерживаемые типы файлов
  $dirUploadedFiles = 'userImages'; // директория для загружаемых файлов
  $dirOriginImg = $dirUploadedFiles . '/';
  $dirMinImg = $dirOriginImg . 'min/';
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('DB', 'user_file');

?>