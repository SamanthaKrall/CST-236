<?php
require_once 'Animal.php';
class Dog extends Animal {
    public function talk(){
        echo "Bark bark<br>";
    }
    public function doTrick()
    {
        echo "Fetch, Jump, Anything you want<br>";
    }

}

?>