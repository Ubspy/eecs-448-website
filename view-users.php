<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "j015m286", "hooTae4P", "j015m286");

if($mysqli->connect_errno)
{
    echo "Connection failed: " .  $mysqli->connect_error;
    exit();
}

$selectQuery = "SELECT * FROM Users";

if($selectRes = $mysqli->query($selectQuery))
{
	while($row = $selectRes->fetch_assoc())
	{
		$selectPostsQuery = "SELECT * FROM Posts WHERE AuthorId='" . $row['UserId'] . "'";

		if($selectPostRes = $mysqli->query($selectPostsQuery))
		{
			echo "<td>" . $row['UserId'] . "</td><td>" . mysqli_num_rows($selectPostRes) . "</td>";
			$selectPostRes->free();
		}
	}

	$selectRes->free();
}

$mysqli->close();

?>
