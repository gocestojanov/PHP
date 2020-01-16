<?php

class MyClass {

  private $a = 1;
  private $b = 2;

  public function add(int $a) {
    //$this->a += $a;
    $b = $a+1;
    return $this;
  }

  public function get() {
    return 6;
  }
}


$object = new MyClass();

var_dump($object->add(4)->get());

?>
