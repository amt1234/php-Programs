<?php
include 'Utility.php';

echo "Enter the Stake : ";
$stake=numericInput();
echo "Enter the Goal : ";
$goal=numericInput();
echo "Enter the number of times : ";
$time=numericInput();
$result=gambler($stake,$goal,$time);
echo $result;
?>
