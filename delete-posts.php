<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "j015m286", "hooTae4P", "j015m286");

if($mysqli->connect_errno)
{
    echo "Connection failed: " .  $mysqli->connect_error;
    exit();
}

foreach($_POST as $postId)
{
	$deleteQuery = "DELETE FROM Posts WHERE PostId='$postId'";

	$mysqli->query($deleteQuery);
}

/*
$username = $_POST['user'];

$selectPostsQuery = "SELECT * FROM Posts WHERE AuthorId='" . $username . "'";

if($selectPostRes = $mysqli->query($selectPostsQuery))
{
	$selectPostRes->free();
} */

$mysqli->close();

?>
