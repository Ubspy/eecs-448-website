<?php 
// First echo the table tag
echo "<table>";

$tableMax = 100;

// Now let's generate the head
echo "<thead><tr>";
echo "<th> </th>"; // Empty entry to line up the table

for($i = 1; $i <= $tableMax; $i++)
{
	echo "<th>" . $i . "</th>";
}

echo "</tr></thead>";


// Time for the table body
echo "<tbody>";

 
for($row = 1; $row <= $tableMax; $row++)
{
	echo "<tr>";

	echo "<td><strong>" . $row . "</strong></td>"; 
	
	for($col = 1; $col <= $tableMax; $col++)
	{
		echo "<td>" . ($row * $col) . "</td>";
	}

	echo "</tr>";
}

echo "</tbody>";

echo "</table>";
?>
