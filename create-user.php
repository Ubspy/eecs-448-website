<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "j015m286", "hooTae4P", "j015m286");

if($mysqli->connect_errno)
{
    echo "Connection failed: " .  $mysqli->connect_error;
    exit();
}

$postUsername = $_POST["username"];

$sqlUsernameQuery = "SELECT UserId FROM Users WHERE UserId='" . $postUsername . "'";

if($selectRes = $mysqli->query($sqlUsernameQuery))
{
	if(mysqli_num_rows($selectRes) > 0)
	{
		echo "false";
	}
	else
	{
		$createUserQuery = "INSERT INTO Users(UserId) VALUES('$postUsername')";

		if($insertRes = $mysqli->query($createUserQuery))
		{
			echo "true";
		}
	}

	$selectRes->free();
}

$mysqli->close();

?>
