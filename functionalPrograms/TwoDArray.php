<?php
include 'Utility.php';

echo "Enter the number of rows : ";
$rows=numericInput();
echo "Enter the number of columns : ";
$columns=numericInput();

twoDArray($rows,$columns);
?>