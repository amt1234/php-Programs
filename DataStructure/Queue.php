<?php
class Queue
{
    public $queuearray;
    public $size;
    public $rear;
    public $front;
   // public static $total;

    public function __construct()
    {
        $this->queuearray = [];
        $this->size = 0;
        $this->rear = 0;
        $this->front = 0;
       // $this->total=0;
    }
    public function enQueue($data)
    {
        $this->queuearray[$this->rear] = $data;
        $this->rear++;
        $this->size++;
    }

    public function deQueue($amount)
    {
        $data = ($this->queuearray[$this->front])-$amount;
        $this->front++;
        $this->size--;
        return $data;
    }
    
    public function show()
    {
        $total=0;
        $array=[];
        echo "\nDisplay Balance : ";
        for ($i = 0; $i < ($this->size); $i++) {   
          echo $this->queuearray[$this->front + $i] . " ";
         // $total=$total+($this->queuearray[$i]);
           
        }
    }
    
    public function getSize()
    {
        return $this->size;
    }

    //if true then return 1 else nothing(blank)
    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function isFull()
    {
        return $this->size == count($this->queuearray);
    }
}
