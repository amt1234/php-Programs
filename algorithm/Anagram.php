<?php
include 'Utility.php';

echo "Enter the first String : ";
$string1=Utility::stringInput();

echo "\nEnter the second String :";
$string2=Utility::stringInput();

$utility=new Utility();
$result=$utility->anagram($string1,$string2);
echo "Result is : ".$result."\n";
?>
