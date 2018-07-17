<?php
include 'Utility.php';

echo "Enter the temprature";
$temprature=Utility::numericInput();
Utility::tempratureConversion($temprature);
// echo "temprature conversion from Celsius to Fahrenheit :";

?>