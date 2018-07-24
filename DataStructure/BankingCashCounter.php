<?php
include 'Queue.php';
include 'Utility.php';

static $amount = 10000;
$choice = 0;
$queue = new Queue();
echo "               Welcome in bank xxx:             \n";
while ($choice != 4) {
    echo "\nEnter the choice \n
        1.Deposite \n
        2.Withdrawn \n
        3.Number of people in the Queue \n
        4.Exit\n";

    $choice = Utility::numericInput();

    switch ($choice) {
        case 1:
            echo "Enter the amount you want to Deposit : ";
            $queue->enQueue(Utility::numericInput());
            $queue->showDeposite();
            break;

        case 2:
            echo "Enter the amount you want to Withdraw ";
            $data = $queue->deQueue(Utility::numericInput());
            if ($data <= $amount) {
                $amount = ($amount - $data);
            } else {
                echo "Insufficent balance:";
            }
            echo "Balanced is :$amount ";
            break;

        case 3:
            echo "NUmber of people in queue : " . $queue->getSize();
            break;
        case 4:
            echo "Exit";
            break;
        default:
            echo "Invalid choice \n";
    }
}
?>