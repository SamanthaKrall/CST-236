<?php
require_once 'Animal.php';
class Cat extends Animal{
    public function talk(){
        echo "Meow meow<br>";
    }
    public function doTrick()
    {
        echo "You think a cat will do a trick?!<br>";
    }

}

?>