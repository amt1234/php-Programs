<?php
class Utility
{
    //UserInput methods
    public static function numericInput()
    {
        try {
            fscanf(STDIN, "%s\n", $number);
            if (filter_var($number, FILTER_VALIDATE_INT)) {
                return $number;
            } else {
                throw new Exception("Enter integer number only");
            }

        } catch (Exception $e) {
            echo "Exception :" . $e->getMessage() . "\n" . "on line" . $e->getLine() . "\n";
        }
    }

    public static function stringInput()
    {
        try {
            fscanf(STDIN, "%s\n", $string);
            if (is_numeric($string)) {
                throw new Exception("Enter string only");
               
            } else {
                return $string;
            }

        } catch (Exception $e) {
            echo "Exception :" . $e->getMessage() . "\n" . "on line" . $e->getLine() . "\n";
        }
    }
    

    public static function floatInput()
    {
        try {
            fscanf(STDIN, "%s\n", $number);
            if (filter_var($number, FILTER_VALIDATE_FLOAT)) {
                return $number;
            } else {
                throw new Exception("Enter float number only");
            }

        } catch (Exception $e) {
            echo "Exception :" . $e->getMessage() . "\n" . "on line" . $e->getLine() . "\n";
        }
    }
    public static function stringnumbericInput()
    {
        try {
            fscanf(STDIN, "%s\n", $string);
            if (is_string($string)) {  
                return $string;
            } else {
                throw new Exception("Enter string only");
            }

        } catch (Exception $e) {
            echo "Exception :" . $e->getMessage() . "\n" . "on line" . $e->getLine() . "\n";
        }
    }
    //1.Anagram function
    public function anagram($string1, $string2)
    {
        //converting string into array
        $string1array = str_split($string1);
        $string2array = str_split($string2);

        $count = 0;
        for ($i = 0; $i < count($string1array); $i++) {
            for ($j = 0; $j < count($string2array); $j++) {
                if ($string1array[$i] == $string2array[$j]) {
                    $count++;
                }
            }
        }
        if ($count == count($string1array)) {
            return "\nstring is anagram";
        } else {
            return "\n string is not anagram";
        }
    }

    /* public static function anagramFunction($string1, $string2)
    {
    $string1array = str_split($string1);
    $string2array = str_split($string2);
    //1 way
    //Compare the values of two arrays, and return the matches:
    /*$matches = array_intersect($string1array, $string2array);
    print_r($matches);
    if (count($matches) == count($string1array)) {
    echo "anagram";
    } else {
    echo "not anagram";
    }*/
    //2 way
    /*   $countoffirstarray=count_chars($string1,0);
    $count2array=count_chars($string2,0);
    if($countoffirstarray==$count2array)
    echo "anagram";
    else
    echo "not anagram";
    }*/

    public static function primeNumber($number)
    {
        for ($i = 2; $i < $number; $i++) {

            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    //2.Take a range of 0 - 1000 Numbers and find the Prime numbers in that range.
    public static function primeNumberFunction($number)
    {
        $primeArray = array();
        for ($i = 1; $i < $number; $i++) {
            if (Utility::primeNumber($i)) {
                array_push($primeArray, $i);
            }
        }
        print_r($primeArray);
        return $primeArray;
    }

    //3.1 find the prime numbers that are Anagram
    public static function primeAndAnagram($primeArray)
    {
        for ($i = 0; $i < count($primeArray); $i++) {
            for ($j = ($i + 1); $j < count($primeArray); $j++) {
                Utility::angramForPrime($primeArray[$i], $primeArray[$j]);
            }
        }
    }

    public static function angramForPrime($result1, $result2)
    {
        $countoffirstarray = count_chars($result1, 0);
        $count2array = count_chars($result2, 0);
        if ($countoffirstarray == $count2array) {
            echo "\nanagram $result1 and $result2";
        }
    }

    //3.2 find the prime numbers that are palindrom
    public static function palindrome($primeArray)
    {
        for ($i = 0; $i < count($primeArray); $i++) {
            $number = $primeArray[$i];
            $temp = $number;
            $sum = 0;
            for ($j = ($i + 1); $j < count($primeArray); $j++) {

                while ($number > 0) {
                    $number2 = $number % 10;
                    $number = floor($number / 10);
                    $sum = $sum * 10 + $number2;
                }
            }
            if ($temp == $sum) {
                echo "\nnumber is palindrom : $temp and $sum";
            }
        }
    }

    //10.Find the Fewest Notes to be returned for Vending Machine
    public static function vending($amount, $index)
    {
        $vendingarray = array(1000, 500, 200, 100, 50, 20, 10, 5, 1);
        static $reminder = 0;
        if ($amount > 0) {
            if ($amount >= $vendingarray[$index]) 
            {
                $reminder = $amount % $vendingarray[$index];
                $count = floor($amount / $vendingarray[$index]);

                echo "\n amount is $amount withdrawn $vendingarray[$index] and count is $count ";
            }
            $index++;
            Utility::vending($reminder, $index);
        }
    }

    //11.dayOfWeek
    public static function dayOfWeek($day, $month, $year)
    {
        $year0 = floor(($year - (14 - $month)) / 12);
        $x = floor(($year0 + $year0 / 4) - ($year0 / 100 + $year0 / 400));
        $month0 = floor($month + (12 * ((14 - $month) / 12) - 2));
        $day0 = floor(($day + $x + (31 * $month0) / 12) % 7);
        echo "day : ";

        switch ($day0) {
            case 0:
                echo "sunday";
                break;
            case 1:
                echo "monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            default:
                echo "Invalid choice ";
        }
    }

    //12.temperaturConversion
    public static function tempratureConversion($celsius)
    {
        $fahrenheit = ($celsius * (9 / 5)) + 32;
        echo "\n Temprature conversion from Celsius to Fahrenheit : $fahrenheit";

        $celsius = (($fahrenheit - 32) * (5 / 9));
        echo "\n Temprature conversion from Fahrenheit to Celsius : $celsius";
    }

    //13.monthlyPayment
    public static function monthlyPayment($principal, $rate, $year)
    {
        $r = $rate / (12 * 100);
        $n = 12 * $year;
        $total = (($principal * $r) / (1 - pow((1 + $r), (-$n))));
        echo "total : $total";
    }

    //14.sqrt
    public static function squareRoot($number)
    {
        $epsilon = 1e-15;
        $newnumber = $number;

        while (abs($newnumber - $number / $newnumber) > $epsilon * $newnumber) {
            $newnumber = ($number / $newnumber + $newnumber) / 2.0;
        }
        echo $newnumber;
    }

    //15.toBinary
    public static function decimalToBinary($number)
    {
        //  decbin() function converts a decimal number to a binary number
        $binarynumber = decbin($number);
        echo " Decimal to binary conversion : $binarynumber \n";

        if (strlen($binarynumber) != 8) {
            return str_pad($binarynumber, 8, 0, STR_PAD_LEFT);
        } elseif (strlen($binarynumber) != 16) {
            return str_pad($binarynumber, 16, 0, STR_PAD_LEFT);
        }
    }

    public static function decimal($number)
    {
        static $sum = 0;
        $arrayelement = array();
        while ($number > 0) {
            $reminder = (int) $number % 2;
            $number = (int) $number / 2;
            array_push($arrayelement, $reminder);
        }

        $newarray = array();
        for ($i = count($arrayelement) - 1; $i >= 0; $i--) {
            array_push($newarray, $arrayelement[$i]);
        }
        echo "\nafter shifting :";
        print_r($newarray);
        $string = "";
        for ($i = 0; $i < count($newarray); $i++) {
            $string = $string . $newarray[$i];
        }
        echo "after conversion of array to string : $string";
        return Utility::checkStringLength($string);
    }
    //cheking string length for left padding
    public static function checkStringLength($string)
    {
        if ((strlen($string) == 8) || (strlen($string) == 16)) {
            return $string;
        } else {
            $string = "0" . $string;
            return Utility::checkStringLength($string);
        }
    }

    //16.Swap nibbles
    public static function nibbleSwap($result)
    {
        $temp = 0;
        $nibble = str_split($result, 4);
        echo "array size :" . count($nibble) . "\n";
        $newlen = count($nibble);
        print_r($nibble);
        for ($i = 0; $i < $newlen - 1; $i++) {
            for ($j = ($i + 1); $j < $newlen; $j++) {
                $temp = $nibble[$i];
                $nibble[$i] = $nibble[$j];
                $nibble[$j] = $temp;
            }
            echo "\nafter nibble swapping : " . $nibble[$i] . " " . $temp . "\n";
            return "$nibble[$i]$temp";
        }
    }

    public static function binaryToDecimal($nibbleresult)
    {
        //bindec() to convert binary to decimal
        $decimal = bindec($nibbleresult);
        echo "Binary to decimal : $decimal";
    }

    public static function binarySearch($arrayelement, $find)
    {
        for ($i = 0; $i < count($arrayelement); $i++) {
            if ($arrayelement[$i] == $find) {
                return "$i";
            }
        }
    }

    public static function insertionSort($arrayelement)
    {
        for($i=1;$i<count($arrayelement);$i++)
        {
            $j=$i;
               while($j>0 && ($arrayelement[$j-1]>$arrayelement[$j]))
                {
                    $key=$arrayelement[$j];
                    $arrayelement[$j]=$arrayelement[$j-1];
                    $arrayelement[$j-1]=$key;
                    $j--;
                }   
        }
        echo " elements after sorting  :\n ";
        foreach($arrayelement as $element)
        {
            echo $element."\n";
        }
    }

    public static function bubbleSort($arrayelement)
    {
        
    }
}
