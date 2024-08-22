<?php

class Animal{

    public $name;
    public $sound;

    function __construct($name,$sound)
    {
        $this->name = $name;
        $this->sound =$sound;
    }

    function eat(){
        return ("the animal with the name".$this->name ."will eat food");
    }

    
}

class Dog extends Animal{

    public $color;

    function __construct($name,$sound,$color)
    {
        $this->name = $name;
        $this->sound =$sound;
        $this->color = $color;
    }

    function bark(){
        return ("the animal with the name".$this->name ."will make".$this->sound);
    }

    function eat(){
        return ("the animal with the name".$this->name ."will eat bone");
    }

}

$dObj = new Dog("gems","bow bow",'black');
print($dObj->bark());
echo "<br>";
print($dObj->eat());

 ?>