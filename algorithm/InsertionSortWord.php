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
print_r($wordsort);
Utility::insertionSort($wordsort);
fclose($file);
?>