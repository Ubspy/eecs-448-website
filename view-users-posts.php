<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "j015m286", "hooTae4P", "j015m286");

if($mysqli->connect_errno)
{
    echo "Connection failed: " .  $mysqli->connect_error;
    exit();
}

$username = $_POST['user'];

$selectPostsQuery = "SELECT * FROM Posts WHERE AuthorId='" . $username . "'";

if($selectPostRes = $mysqli->query($selectPostsQuery))
{
	$i = 0;

	while($row = $selectPostRes->fetch_assoc())
	{
		$i += 1;
		echo "<tr><td>$i</td><td>" . $row['Content'] . "</td></tr>"; 
	}

	$selectPostRes->free();
}

$mysqli->close();

?>
