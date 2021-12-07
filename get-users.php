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
		echo '<option value="' . $row['UserId']  . '">' . $row['UserId'] . '</option>'; 
	}

	$selectRes->free();
}

$mysqli->close();

?>
