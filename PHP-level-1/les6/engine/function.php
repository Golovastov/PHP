<?php
  function new_arrivals() {
        $sql = 'SELECT * from `products` order by `date` desc limit 9';
        return getResult($sql);
      };
?>