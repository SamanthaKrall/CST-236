<?php

require_once 'BusinessService.php';
$searchPhrase = $_GET['name'];
$bs = new BusinessService();
$persons = $bs->findByFirstName($searchPhrase);
?>

<h2>Search Results</h2>
<p>Here is what we found</p>
<?php 
if ($persons) {
    include '_displaySearchResults.php';
} else {
    echo "Nobody found like that<br>";
}
?>