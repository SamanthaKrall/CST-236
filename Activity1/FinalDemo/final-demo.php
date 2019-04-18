<?php
require_once 'Person.php';
require_once 'Student.php';
$newGuy1 = new Person;
$newGuy2 = new Student;
$newGuy1->growOlderBy(2);
$newGuy2->growOlderBy(2);
echo "The age of the first person is " . $newGuy1->age . "<br>";
echo "The age of the second person is " . $newGuy2->age . "<br>";