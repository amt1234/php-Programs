<?php
include 'Node.php';

class LinkedList
{
    public $head;
    public $last;
    public $size;

    public function __construct()
    {
        $this->head = new Node();
        $this->last = new Node();
        $this->size = 0;
    }

    public function insert($data)
    {
        $node = new Node();
        $node->data = $data;

        if ($this->head->next == null) {
            $this->head->next = $node;
            $this->size++;
        } else {
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $node;
            $this->size++;
        }
    }

    public function show()
    {
        $node = $this->head;
        while ($node->next != null) {
            echo $node->data . "\n";
            $node = $node->next;
        }
        echo $node->data . "\n";
    }

    public function remove($target)
    {
        $status = false;
        if (($this->head->data) == ($target)) {
            $this->head = $this->head->next;
            $status = true;
            $this->size--;
        } else if (($this->last->data) == ($target)) {
           
            $prev = new Node();
            $current = $this->head;
            while ($current->next != null) {
                $this->prev = $current;
                $current = $current->next;
                
            }
            $this->last = $this->prev;
            $this->last->next = null;
            $status = true;
            $this->size--;
        } else {
            
            $prev = new Node();
            $current = $this->head;
            while ($current != null && !($status = (($current->data) == ($target)))) {
                $this->prev = $current;
                $current = $current->next;
            }
            if ($status) {
                $this->prev->next = $current->next;
                $this->size--;
            }
        }
        return $status;
    }

    function pop($position){
        $node = $this->head->next;
        $pointer = 0;
        $prev = null;
        while($pointer != $position){
            $prev = $node;
            $node = $node->next;
            $pointer++;
        }
        if($node->next == null){
            $prev=null;
            return $node->data;
        }else{
            if($this->head->next == $node){
                $this->head->next = $node->next;
                $node->next=null;
                return $node->data;
            }else{
                $prev->next = $node->next;
                $node->next = null;
                return $node->data;
            }
        }
    }

    public function search($target)
    {
        $node = $this->head;

        while ($node != null) {
            if (($node->data) == ($target)) {
                return true;
            }
            $node = $node->next;
        }
        return false;
    }

    function size(){
        return $this->size;
    }
}
