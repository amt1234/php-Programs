<?php
include 'Utility.php';
$path = "/var/www/html/algorithm/file.txt";
$file = fopen($path, "r");
$wordsort = [];
while (($line = fgets($file)) !== false) {
    $wordarray = explode(" ", $line);
    foreach ($wordarray as $word) {
        echo "$word \n";
        array_push($wordsort, $word);
    }
}
sort($wordsort);
print_r($wordsort);
echo "Enter the element to find : ";
$find = Utility::stringnumbericInput();
$arraysize = count($wordsort);
$result = Utility::binarySearch($wordsort, 0, $arraysize, $find);
if ($result != -1) {
    echo "\nElement is found at $result position ";
} else {
    echo "\n Element is not found";
}
fclose($file);
?>