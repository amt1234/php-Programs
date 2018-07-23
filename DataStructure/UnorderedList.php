<?php
include 'LinkedList.php';
include 'Utility.php';

$path = "/var/www/html/DataStructure/file.txt";
$file = fopen($path, "ra+");
$wordsort = [];
$list = new LinkedList();
while (($line = fgets($file)) !== false) {
    $wordarray = explode(" ", $line);
    foreach ($wordarray as $word) {
        $list->insert($word);
    }
}

$list->show();
echo "\nEnter the target word :";
$target = Utility::stringnumbericInput();

$list->search($target);

if ($list->search($target)) {
    echo "element is found and delete it";
    $list->remove($target);
} else {
    echo "element is not found and add it";
    $list->insert($target);
}

$list->show();
$handle = fopen($path, "w");
$size = $list->size();
for ($i = 0; $i < $size; $i++) {
    fwrite($handle, " " . $list->pop(0));
}
fclose($file);

?>