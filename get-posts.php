<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "j015m286", "hooTae4P", "j015m286");

if($mysqli->connect_errno)
{
    echo "Connection failed: " .  $mysqli->connect_error;
    exit();
}

$selectQuery = "SELECT * FROM Posts";

if($selectRes = $mysqli->query($selectQuery))
{
	while($row = $selectRes->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row['PostId']  . "</td>";
		echo "<td>" . $row['AuthorId']  . "</td>";
		echo "<td>" . $row['Content']  . "</td>";
		echo "<td><input type='checkbox' name='" . $row['PostId'] . "'></td>";
		echo "</tr>";
	}

	$selectRes->free();
}

$mysqli->close();

?>
