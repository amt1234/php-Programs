<?php
include 'Utility.php';

echo "Enter the number :";
$number = Utility::numericInput();

$string=Utility::decimal($number);
echo "\nafter left padding :".$string;

//$result = Utility::decimalToBinary($number);
//echo "after left padding : \n" . $result;

?>