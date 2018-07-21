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
$starttime = microtime();
echo "starting time : " . $starttime;
echo "  \n1.binarySearch method for integer and
        \nbinarySearch method for String
        \n2.insertionSort method for integer and
        \ninsertionSort method for String
        \n3.bubbleSort method for integer and
        \nbubbleSort method for String
        \nEnter the choice : ";

$choice = Utility::numericInput();
switch ($choice) {
    case 1:
        sort($arrayelements);
        print_r($arrayelements);
        echo "Enter the element to find : ";
        $find = Utility::stringnumbericInput();
        $arraysize = count($arrayelements) - 1;
        $result = Utility::binarySearch($arrayelements, 0, $arraysize, $find);
        if ($result != -1) {
            echo "\nElement is found at $result position ";
        } else {
            echo "\n Element is not found";
        }
        Utility::elapsedTime($starttime);
        break;

    case 2:
        echo "\nInsertionSort method";
        Utility::insertionSort($arrayelements);
        Utility::elapsedTime($starttime);
        break;

    case 3:
        echo "\nBubbleSort method";
        Utility::bubbleSort($arrayelements);
        Utility::elapsedTime($starttime);
        break;

    default:
        echo "Invalid choice";

}
?>