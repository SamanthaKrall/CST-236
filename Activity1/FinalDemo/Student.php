<?php
require_once 'Person.php';
class Student extends Person {
    public function growOlderBy($decade) {
        $this->age = $this->age + 10 * $decade;
    }
}

?>