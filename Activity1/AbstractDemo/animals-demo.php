<?php
require_once 'Dog.php';
require_once 'Cat.php';
$cat1 = new Cat("Wubba", "Orange");
$dog1 = new Dog("MillyMoo", "Black");
$cat1->talk();
$dog1->talk();
$cat1->doTrick();
$dog1->doTrick();
?>