<?php
  require_once '../config/config.php';
  require_once '../engine/function_SQL';
  function reg(){
    $login = $_GET['login'];
    $pass = password_hash($_GET['pass'];
    $sql = "INSERT into `users` (`login`, `pass`) value ($login, $pass)";
    if (!executeQuery($sql)) {
      echo "<div>Логин занят</div>";
    }
    echo "<div>Регестрация завершена</div>";
  }();
?>