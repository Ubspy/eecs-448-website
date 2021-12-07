<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "j015m286", "hooTae4P", "j015m286");

if($mysqli->connect_errno)
{
    echo "Connection failed: " .  $mysqli->connect_error;
    exit();
}

$postText = $_POST["post-text"];
$postUser = $_POST["username"];

$selectUserQuery = "SELECT UserId FROM Users WHERE UserId='$postUser'";

if($selectRes = $mysqli->query($selectUserQuery))
{
	if(mysqli_num_rows($selectRes) == 0)
	{
		echo "false";
	}
	else
	{
		$insertQuery = "INSERT INTO Posts(Content, AuthorId) VALUES('$postText', '$postUser')";

		if($queryRes = $mysqli->query($insertQuery))
		{
			echo "true";
		}
	}
}


$mysqli->close();

?>
