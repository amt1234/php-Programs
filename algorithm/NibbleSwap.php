<?php
include 'Utility.php';

echo "Enter the number : ";
$number = Utility::numericInput();
$result = Utility::decimal($number);
$nibbleresult = Utility::nibbleSwap($result);
Utility::binaryToDecimal($nibbleresult);
?>