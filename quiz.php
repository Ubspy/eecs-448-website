<?php

$questionOne = $_POST["question-1"];
$questionTwo = $_POST["question-2"];
$questionThree = $_POST["question-3"];
$questionFour = $_POST["question-4"];
$questionFive = $_POST["question-5"];

$currentScore = 0;
$questionTotal = 5;

echo "<h2>Question 1</h2>";
echo "<h3>What is the company motto for Deep Rock Galactic?</h3>";
echo "<p><strong>Your answer:</strong> " . $questionOne . "<br>";
echo "<strong>Correct answer:</strong> Rock and Stone!</p>";

if($questionOne == "Rock and Stone!")
{
    $currentScore += 1;
}

echo "<h2>Question 2</h2>";
echo "<h3>What is the name of the M.U.L.E. that Deep Rock Galactic sends you with on missions?</h3>";
echo "<p><strong>Your answer:</strong> " . $questionTwo . "<br>";
echo "<strong>Correct answer:</strong> Molly</p>";

if($questionTwo == "Molly")
{
	$currentScore += 1;
}

echo "<h2>Question 3</h2>";
echo "<h3>Which of these creatures has no way of harming you?</h3>"; 
echo "<p><strong>Your answer:</strong> " . $questionThree . "<br>";
echo "<strong>Correct answer:</strong> Glyphid Warden</p>";

if($questionThree == "Glyphid Warden")
{
	$currentScore += 1;
}

echo "<h2>Question 4</h2>";
echo "<h3>Which of the following is not a weapon for the Engineer?</h3>";
echo "<p><strong>Your answer:</strong> " . $questionFour . "<br>";
echo "<strong>Correct answer:</strong> DRAK-25 Plasma Carbine</p>";

if($questionFour == "DRAK-25 Plasma Carbine")
{
	$currentScore += 1;
}

echo "<h2>Question 5</h2>";
echo "<h3>Which biome can you not find Bismor in?</h3>";
echo "<p><strong>Your answer:</strong> " . $questionFive . "<br>";
echo "<strong>Correct answer:</strong> Sandblasted Corridors</p>";

if($questionFive == "Sandblasted Corridors")
{
	$currentScore += 1;
}

echo "<h2>Your score:</h2>";
echo "<p>You scored " . $currentScore . "/" . $questionTotal . ", which is a ";
echo ($currentScore / $questionTotal * 100) . "%.";

?>
