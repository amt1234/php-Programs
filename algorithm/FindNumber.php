<?php
include 'Utility.php';
echo "Enter the number";
$N=Utility::numericInput();
echo "Enter the target : ";
$target=Utility::numericInput();
$result=Utility::findNumber($N,$target);
if ($result != -1) {
    echo "\nElement is found at $result position ";
} else {
    echo "\n Element is not found";
}
?>