<?php
include 'Utility.php';

echo "Enter the size of array : ";
$arraysize = numericInput();

$arrays = array();
echo "Enter the elements in array : ";
for ($i = 0; $i < $arraysize; $i++) {
    array_push($arrays, numericInput());
}
print_r($arrays);
triplets($arrays);
