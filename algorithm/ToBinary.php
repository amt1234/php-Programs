<?php
include 'Utility.php';

echo "Enter the number :";
$number = Utility::numericInput();
$result = Utility::decimalToBinary($number);
echo "after left padding : \n" . $result;
?>