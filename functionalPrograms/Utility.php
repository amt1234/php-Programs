<?php

//UserInput methods
function numericInput()
{
    fscanf(STDIN, "%d\n", $number);
    return $number;
}
function stringInput()
{
    fscanf(STDIN, "%s\n", $string);
    return $string;
}
function floatInput()
{
    fscanf(STDIN, "%f\n", $number);
    return $number;
}

//1.User Input and Replace String Template “Hello <<UserName>>, How are you?”
function stringReplace()
{
    $string = stringInput();
    if (strlen($string) >= 3) {
        return $string;
    } else {
        return null;
    }
}

//2.Flip Coin and print percentage of Heads and Tails
function flipCoin($number)
{
    $tails = 0.0;
    $head = 0.0;
    $i = 0;
    while ($i < $number) {
        $randomnumber = mt_rand(0.0, 1.0);
        if ($randomnumber < 0.5) {
            $tails++;
        } else {
            $head++;
        }

        $i++;
    }
    echo "tails : $tails \n";
    echo "head : $head \n";
    $totaltails = ($tails * 100) / $number;
    $totalheads = ($head * 100) / $number;

    return " Percentage of Head :$totalheads vs Tails :$totaltails";
}

//3.Leap Year
function leapYear($year)
{
    if (strlen($year) == 4) {
        if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
            return "leap year";
        } else {
            return "not leap year";
        }

    }
    return "Invalid year";
}

//4.Power of 2
function powerOftwo($number)
{
    $i = 0;
    while ($i <= $number && $number < 31) {
        $newnumber = pow(2, $i);
        echo "2^$i =" . $newnumber . "\n";
        $i++;
    }
    echo "Overflow";
}

//5.Harmonic Number
function harmonicNumber($number)
{
    $i = 1;
    $sumofnum = 0;
    echo "Harmonic number :";
    while ($i <= $number) {
        echo " 1/$i + ";
        $sumofnum = 1 / $i + $sumofnum;
        $i++;
    }
    return $sumofnum;
}

//6.Factors
function factor($number)
{
    // $i = 1;
    while ($number % 2 == 0) {
        // $number = $number / $i;
        //  $i++;
        echo 2+" ";
        $number = $number / 2;
    }

}

//7.Gambler
function gambler($stake, $goal, $time)
{

    $loss = 0;
    $won = 0;
    $beat = 0;
    while($time!=0){
    if ($stake > 0 && $stake < $goal) {
        $beat++;
        $randomnumber = mt_rand(0.0, 1.0);
        if ($randomnumber < 0.5) {
            $loss++;
            $stake--;

        } else {
            $won++;
            $stake++;
        }
       
    }
    $time--;
}
    $win = ($won * 100) / $beat;
    $lose = ($loss * 100) / $beat;

    return "The win time :$won and percentage won : $win vs loss : $lose";
}
//8.Coupon Numbers
function couponNumber($number)
{
    $count = 0;
    $coupons = array();

    while ((count(array_unique($coupons)) != $number)) {
        $randomnumber = mt_rand(1, $number);

        //pushing randomnumber in array
        array_push($coupons, $randomnumber);

        $count++;
    }
    //printing unique numbers from coupons
    print_r(array_unique($coupons));
    return $count;
}

//9.2D Array
function twoDArray($row, $column)
{
    echo "Enter your choice : \n1.Enter Integer \n2.Enter Double \n3.Enter Boolean";
    $choice = numericInput();
    $arrays = array(array());
    switch ($choice) {
        case 1:
            echo "Enter number : ";
            for ($i = 0; $i < $row; $i++) {
                for ($j = 0; $j < $column; $j++) {
                    $arrays[$i][$j] = numericInput();
                }
            }
            printArray($arrays, $row, $column);
            break;

        case 2:
            echo "Enter double : ";
            for ($i = 0; $i < $row; $i++) {
                for ($j = 0; $j < $column; $j++) {
                    $arrays[$i][$j] = floatval(floatInput());

                    // $test=floatval(floatInput());
                    // echo "test :".$test;
                }
            }
            printArray($arrays, $row, $column);
            break;

        case 3:
            echo "Enter boolean : ";
            for ($i = 0; $i < $row; $i++) {
                for ($j = 0; $j < $column; $j++) {
                    $arrays[$i][$j] = stringInput();
                }
            }
            printArray($arrays, $row, $column);
            break;

        default:
            echo "invalid choice";
    }
}
function printArray($arrays, $row, $column)
{
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {
            echo $arrays[$i][$j] . " ";

        }
        echo "\n";
    }
}

//10.Sum of three Integer adds to ZERO
function triplets($array)
{
    $triplet = 0;
    $nontriplet = 0;
    for ($i = 0; $i < count($array) - 2; $i++) {
        for ($j = ($i + 1); $j < count($array) - 1; $j++) {
            for ($k = ($j + 1); $k < count($array); $k++) {
                $result = $array[$i] + $array[$j] + $array[$k];
                echo "result is:" . $result;
                if ($result == 0) {
                    echo "\ntriplates are : $array[$i]+$array[$j]+$array[$k] ";
                    $triplet++;
                } else {
                    echo "\nNon trplates are : $array[$i]+$array[$j]+$array[$k] ";
                    $nontriplet++;
                }
            }
        }
    }
    echo "triplates :$triplet and non triplates : $nontriplet";
}

//11.find Distance
function distance($x, $y)
{
    $xcoordinate = pow($x, 2);
    $ycoordinate = pow($y, 2);

    $result = $xcoordinate + $ycoordinate;
    $output = sqrt($result);
    return $output;
}

//12.To return all permutation of a String

//13.Simulate Stopwatch Program
function stopwatch()
{
    $timestart = microtime();
    echo "Start time : " . $timestart;
    usleep(1000);
    $timeend = microtime();
    echo "\nEnd time : " . $timeend;

    $time = $timeend - $timestart;
    return $time;
}

//15.Quadratic equation
/*
for Root are real and unequal x2 +10x-24 = 0
for Root are real and equal
for imagenary x2+x+12 = 0.
 */
function quadraticEquation($a, $b, $c)
{
    $delta = (($b * $b) - (4 * $a * $c));
    echo "Delta is : " . $delta;

    if ($delta > 0) {
        echo "\nRoot are real and unequal ";
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "\nRoot1 of x : " . $root1;
        echo "\nRoot2 of x : " . $root2;

    } elseif ($delta == 0) {
        echo "\nRoot are real and equal ";
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        echo "\nRoot1 of x : " . $root1;

    } else {
        echo "\nRoot is imagenary ";
    }
}

//16.windchill
/*
$t for temprature
$v for speed
 */
function windChill($t, $v)
{
    if ($t > 50) {
        echo "Invalid rang";
    } elseif ($v > 120 && $v < 3) {
        echo "Invalid rang";
    } else {
        $w = 35.74 + 0.6215 * $t + (0.4275 * $t - 35.75) * pow($v, 0.16);
    }

    return $w;
}
