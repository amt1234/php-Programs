<?php
class Stack
{
    public $top;
    public $stackarray;

    public function __construct()
    {
        $this->top = 0;
        $this->stackarray = array();
    }

    public function isEmpty()
    {
        return $this->top <= 0;
    }

    public function push($data)
    {
        $this->stackarray[$this->top] = $data;
        $this->top++;
    }

    public function pop()
    {
        $this->top--;
        $temp = $this->stackarray[$this->top];
        $this->stackarray[$this->top] = 0;
    }

    public function show()
    {
        foreach (($this->stackarray) as $stk) {
            echo " $stk";
        }
    }
}
?>