<?php
include 'Utility.php';

echo "Enter the x-coordinate distance : ";
$x = numericInput();
echo "\nEnter the y-coordinate distance : ";
$y = numericInput();

echo "\nThe Euclidean distance from the point (x, y) to the origin (0, 0) is : " . distance($x, $y);
