<?php
include 'Utility.php';

echo "Enter the expression :";
$expression = Utility::stringnumbericInput();

if (strlen($expression) == 0) {
    echo "Please Enter the expression.";
} else {
    $result = Utility::expressionParantheses($expression);
    if ($result == true) {
        echo "True!! It is valid expression.";
    } else {
        echo "False!! it is not valid expression";
    }
}

?>
