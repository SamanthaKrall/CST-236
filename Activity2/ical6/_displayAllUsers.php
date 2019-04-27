<?php
?>
<html>
	<body>
		<table>
			<tr>
				<th>ID</th>
				<th>First name search results</th>
				<th>Last name</th>
			</tr>
			<?php 
			 for ($x = 0; $i < count($users); $x++) {
			     echo "<tr>";
			     echo "<td>" . $users[$x][0] . "</td>" 
			         . "<td>" . $users[$x][1] . "</td>" . "</td>" 
			         . "<td>" . $users[$x][2] . "</td>";
			     echo "<tr>";
			 }
			?>
		</table>
	</body>
</html>