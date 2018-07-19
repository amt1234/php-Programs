<?php
include 'Utility.php';

echo "Enter the Principal :";
$principal = Utility::numericInput();
echo "Enter the Rate :";
$rate = Utility::numericInput();
echo "Enter the year";
$year = Utility::numericInput();
Utility::monthlyPayment($principal, $rate, $year);
?>