<?php
include 'Utility.php';

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
        echo "\nbinarySearch method ";
        echo "\nEnter the array size : ";
        $arraysize = Utility::stringnumbericInput();

        echo "\n Enter the elements in array : ";
        $arrayelements = array();
        for ($i = 0; $i < $arraysize; $i++) {
            array_push($arrayelements, Utility::stringnumbericInput());
        }
        sort($arrayelements);
        print_r($arrayelements);

        echo "Enter the element to find : ";
        $find = Utility::stringnumbericInput();
        $result = Utility::binarySearch($arrayelements, $find);
        if ($result != null) {
            echo "\nElement is found at $result position ";
        } else {
            echo "\n Element is not found";
        }

        break;

    case 2:
        echo "\nInsertionSort method";
        echo "\nEnter the array size : ";
        $arraysize = Utility::stringnumbericInput();

        echo "\n Enter the elements in array : ";
        $arrayelements = array();
        for ($i = 0; $i < $arraysize; $i++) {
            array_push($arrayelements, Utility::stringnumbericInput());
        }
        //sort($arrayelements);
        print_r($arrayelements);

        Utility::insertionSort($arrayelements);
        break;
    case 3:
        echo "\nBubbleSort method";
        break;
    default:
        echo "Invalid choice";

}
/*echo "\nEnter the array size : ";
$arraysize = Utility::numericInput();

echo "\n Enter the elements in array : ";
$arrayelements = array();
for ($i = 0; $i < $arraysize; $i++) {
array_push($arrayelements, Utility::stringInput());
}

sort($arrayelements);
print_r($arrayelements);

echo "Enter the element to find : ";
$find = Utility::stringInput();
$result = Utility::binarySearch($arrayelements, $find);
if ($result != null) {
echo "\nElement is found at $result position ";
} else {
echo "\n Element is not found";
}*/
