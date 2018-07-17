<?php
include 'Utility.php';

echo "Enter the first String : ";
$string1=Utility::stringInput();

echo "\nEnter the second String :";
$string2=Utility::stringInput();

$result=Utility::anagramFunction($string1, $string2);
?>