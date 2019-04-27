<?php

?>
<table>
    <thead>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
    </thead>
<?php 
    for ($x = 0; $x < count($persons); $x++) {
        echo "<tr>";
        echo "<td>" . $persons[$x]->getId() . "</td>";
        echo "<td>" . $persons[$x]->getFirst_name() . "</td>";
        echo "<td>" . $persons[$x]->getLast_name() . "</td>";
        echo "</tr>";
    }
?>
</table>

