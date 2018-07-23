<?php
include ('Stack.php');
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

    //To use this function inculde linkedlist.php in the parent class..
    public static function unorderedList($wordlist,$target)
    {
        $list=new LinkedList();
        for($i=0;$i<count($wordlist);$i++)        
        {
            if($wordlist[$i]==$target)
            {
                echo "Word found at $i position ";
            }
            else{
                //$list->insert($target);
                return $target;
            }
        }
    }

    public static function expressionParantheses($expression)
    {
        $count=0;
        //converting string into array
        $stringarray = str_split($expression);
        $stack=new Stack();
        for($i=0;$i<count($stringarray);$i++)
        {
            if($stringarray[$i]=='(')
            {
                $stack->push($stringarray[$i]);
                $count++;
            }
            if($stringarray[$i]==')')
            {
                if($stack->isEmpty())
                {
                    $count--;
                }
                else{
                    $stack->pop();
                    $count--;
                }
            }
        }
        if ($stack->isEmpty() && $count == 0) {
			return true;
		} else {
			return false;
		}

    }

   /*function checkValidExpression($string) {
		int count = 0;
		Stack1 stack = new Stack1();
		for (int i = 0; i < string.length(); i++) {
			if (string.charAt(i) == '(') {
				stack.push(string.charAt(i));
				count++;
			}

			if (string.charAt(i) == ')') {
				if (stack.isEmpty()) {
					count--;
				} else {
					stack.pop();
					count--;
				}
			}
		}
		if (stack.isEmpty() && count == 0) {
			return true;
		} else {
			return false;
		}
	}*/
}
?>