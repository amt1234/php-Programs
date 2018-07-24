<?php
 class NodeD
  {
	public $data;
	public $link;

	/* Constructor */
	// function __construct() {
	// 	$this->link = null;
	// 	$this->data = 0;
	// }

	/* Constructor */
	function __construct($data2, $n) {
		$this->data = $data2;
		$this->link = $n;
	}

    /* Function to set link to next NodeD
     */
	public function setLink($n) {
		$this->link = $n;
	}

    /* Function to set data to current NodeD
     */
	public function setData($d) {
		$this->data = $d;
	}

	/* Function to get link to next node */
	public function getLink() {
		return $this->link;
	}

    /* Function to get data from current NodeD
     */
	public function getData() {
		return (int) $this->data;
	}
}