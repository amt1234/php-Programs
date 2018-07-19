<?php
include 'Utility.php';

echo "Enter the number : ";
$number = Utility::numericInput();
$result = Utility::primeNumberFunction($number);
Utility::primeAndAnagram($result);
?>