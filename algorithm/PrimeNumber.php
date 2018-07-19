<?php
include 'Utility.php';

echo "Enter the number : ";
$number = Utility::numericInput();
Utility::primeNumberFunction($number);

?>