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
            if (is_string($string)) {
                return $string;
            } else {
                throw new Exception("Enter string only");
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

    public static function primeAnagramAndPalindrom($primeArray)
    {
        $result1 = array();
        $result2 = array();
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

    public static function palindrome($primeArray)
    {
        for ($i = 0; $i < count($primeArray); $i++) {
            for ($j = ($i + 1); $j < count($primeArray); $j++) {
                $number = $primeArray[$i];
                $temp = $number;
                $sum = 0;
                while ($number > 0) {
                    $number2 = $number % 10;
                    $number = floor($number / 10);
                    $sum = $sum * 10 + $number2;
                }
                if ($sum == $primeArray[$j]) {
                    echo "\n number is palindrome : $temp and $primeArray[$j]";
                }
            }
        }
    }
    public static function tempratureConversion($celsius)
    {
        $fahrenheit = ($celsius * (9 / 5)) + 32;
        echo "\n Temprature conversion from Celsius to Fahrenheit : $fahrenheit";

        $celsius = (($fahrenheit - 32) * (5 / 9));
        echo "\n Temprature conversion from Fahrenheit to Celsius : $celsius";
    }

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

    public static function monthlyPayment($principal, $rate, $year)
    {
        $r = $rate / (12 * 100);
        $n = 12 * $year;
        $total = (($principal * $r) / (1 - pow((1 + $r), (-$n))));
        echo "total : $total";
    }

    public static function squareRoot($number)
    {
        $epsilon = 1e-15;
        $newnumber = $number;

        while (abs($newnumber - $number / $newnumber) > $epsilon * $newnumber) {
            $newnumber = ($number / $newnumber + $newnumber) / 2.0;
        }
        echo $newnumber;
    }

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

    public static function nibbleSwap($result)
    {
        $length=strlen($result);
        echo "length".$length;
        // $nibble=array();
        $temp = 0;
       echo chunk_split($result,4,".");
        // echo "length".$len;
       // print_r(str_split($result,4));
       // array_push($nibble, (str_split($result, 4)));
        echo "array size :" . count($result)."\n";
      // print_r($result);
         for($i=0;$i<count($result);$i++)
         {
             for($j=($i+1);$j<count($result);$j++)
             {
                
                $temp=$result[$i];
                $result[$i]=$result[$j];
                $result[$j]=$temp;
             }
             echo "\nafter nibble swapping : ".$result[$i]." ".$temp;
         }

    }

}
