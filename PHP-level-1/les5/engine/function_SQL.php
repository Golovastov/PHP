<?php
  // SQL
  function executeQuery($sql) {
    $db =  mysqli_connect(HOST, USER, PASS, DB);
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
  }
  function getResult($sql) {
    $db =  mysqli_connect(HOST, USER, PASS, DB);
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($result);
    mysqli_close($db);
    return $row;
  }
?>