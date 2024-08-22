<?php
// simple oops programming
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function __destruct() {
    echo "The fruit is {$this->name}.";
  }

  public function getName() {
    return $this->name;
  }
  public function getColor() {
    return $this->color;
  }
}

$fObj = new Fruit("apple","red");
$name=$fObj->getName();
$colour = $fObj->getColor();
print($name);
print($colour);




?>