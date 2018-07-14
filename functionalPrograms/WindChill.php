<?php
include 'Utility.php';
echo "Enter the temprature (in Fahrenheit) : ";
$temprature=numericInput();
echo "Enter the wind speed v (in miles per hour) : ";
$speed=numericInput();
$windchillresult=windChill($temprature,$speed);
echo "Wind Chill result : ".$windchillresult;
?>