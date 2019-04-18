<?php
final class Person {
    public $name;
    public $age;
    public function growOlderBy($year){
        $this->age = $this->age + $year;
    }
}

?>