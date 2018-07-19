<?php
include 'Utility.php';
echo "Enter the amount : ";
$amount=Utility::numericInput();
//Utility::vendingMachine($amount);
$index=0;
Utility::vending($amount, $index);
?>