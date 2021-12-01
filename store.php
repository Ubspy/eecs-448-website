<?php

$richardOne = $_POST["richard-1"];
$richardTwo = $_POST["richard-2"];
$richardThree = $_POST["richard-3"];
$richardFour = $_POST["richard-4"];
$shipping = $_POST["shipping"];

$username = $_POST["username"];
$password = $_POST["password"];

$subTotal = 0;
$total = 0;

echo "<h1>Welcome, " . $username . "</h1>";
echo "<h3>Because we're an extremely secure storefront, we stored your password: " . $password . " in plain text :) </h3>";

echo "<p>Here is your recipt:</p>";
echo "<table><thead><tr><th>Item</th><th>Price</th></tr></thead><tbody>";

for($i = 0; $i < $richardOne; $i++)
{
	echo "<tr><td>Richard</td><td>$35.00</td></tr>";
}

for($i = 0; $i < $richardTwo; $i++)
{
	echo "<tr><td>Richard 2: Richarder</td><td>$20.00</td></tr>";
}

for($i = 0; $i < $richardThree; $i++)
{
	echo "<tr><td>Richard 3: Richardest</td><td>$625.00</td></tr>";
}

for($i = 0; $i < $richardFour; $i++)
{
	echo "<tr><td>Richard 4: Woof</td><td>$140.00</td></tr>";
}

$subTotal = 35 * $richardOne + 20 * $richardTwo + 625 * $richardThree + 140 * $richardFour;
$tax = $subTotal * 0.098;
$total = $subTotal + $tax;

echo "<tr><td>Subtotal</td><td>$" . $subTotal . "</td></tr>";
echo "<tr><td>Shipping</td><td>$" . $shipping . "</td></tr>";
echo "<tr><td>Tax</td><td>$" . $tax . "</td></tr>";
echo "<tr><td>Total</td><td>$" . $total . "</td></tr>";

echo "</tbody></table>";

?>
