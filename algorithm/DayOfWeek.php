<?php
include 'Utility.php';

echo "\nEnter the day : ";
$day = Utility::numericInput();
echo "\nEnter ther month :";
$month = Utility::numericInput();
echo "\nEnter the year :";
$year = Utility::numericInput();

function leapyear($year)
{
    if (strlen($year) == 4) {
        if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
            return true;
        } else {
            return false;
        }
    }
}

if (($day > 31) || ($month > 12) || (strlen($year) != 4)) {
    
        echo "Invalid input \n";
    
} else {
    if (($month == 2) ||(leapyear($year))) {
        echo "day should not be more than 29";
    } else {
        Utility::dayOfWeek($day, $month, $year);
    } 
}
?>