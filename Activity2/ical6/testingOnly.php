<?php
require_once 'UserDataService.php';
require_once 'Person.php';

$u = new UserDataService();

echo "<pre>" . print_r($u->findByFirstName("a"), TRUE) . "</pre>";
// echo json_encode($u->findByFirstName("a"));
//echo "<pre>" . print_r($u->findByLastName("a"), TRUE) . "</pre>";
//echo "<pre>" . print_r($u->findById(2), TRUE) . "</pre>";
if ($u->deleteItem(5)) {
    echo "Item 5 deleted<br>";
} else {
    echo "Failure to delete item 5";
}
echo "<hr>";
$newguy = new Person(100, "Howard", "Hughes");
echo "<pre>" . print_r($u->findById(9), TRUE) . "</pre>";
$u->updateOne(9, $newguy);
echo "<pre>" . print_r($u->findById(9), TRUE) . "</pre>";
?>