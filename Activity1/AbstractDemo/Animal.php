<?php
abstract class Animal {
    public $name;
    public $color;
    public function __construct($n, $c){
        $this->name = $n;
        $this->color = $c;
    }
    abstract function talk();
    abstract function doTrick();
}

?>