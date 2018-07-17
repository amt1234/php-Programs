<?php
include 'Utility.php';

echo"\nEnter the day : ";
$day=Utility::numericInput();
echo "\n Enter ther month :";
$month=Utility::numericInput();
echo "\nEnter the year :";
$year=Utility::numericInput();
Utility::dayOfWeek($day, $month, $year);
?>