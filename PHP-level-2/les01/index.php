<?php
// Task 1-4
  class Cart {
    public $items = [];
    function totalPrice() {
      $total = 0;
      for ($i = 0; $i <= count($this->items); $i++) { 
        $total = $total + $this->items[$i]['price'];
      }
      return $total;
    }
  }

  class CartAuthUser extends Cart {
    public $idUser;
    function getShipingInfo() {
      $sql = 'SELECT `shipingInfo` from `users` where `id` = '$this->idUser'';
      $shipingInfo = getAssocResult($sql);
      return $shipingInfo;
    }
  }

  // Task 5
  class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
  }
  $a1 = new A();
  $a2 = new A();
  $a1->foo(); //1
  $a2->foo(); //2
  $a1->foo(); //3
  $a2->foo(); //4
  /* 
    Статическая переменная не теряет своего значения, когда выполнение программы 
    выходит из области видимости.
  */

// Task 6
  class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
  }
  class B extends A {
  }
  $a1 = new A();
  $b1 = new B();
  $a1->foo(); //1
  $b1->foo(); //1
  $a1->foo(); //2
  $b1->foo(); //2
  /* 
   Класс В унаследовал свою статическую переменную х
  */
?>