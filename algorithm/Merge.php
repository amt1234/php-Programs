<?php
include 'Utility.php';

echo "\nEnter the array size : ";
$arraysize = Utility::stringnumbericInput();

echo "\n Enter the elements in array : ";
$arrayelements = array();
for ($i = 0; $i < $arraysize; $i++) {
    array_push($arrayelements, Utility::stringnumbericInput());
}
print_r($arrayelements);
Utility::mergeSort($arrayelements, 0, count($arrayelements));
?>