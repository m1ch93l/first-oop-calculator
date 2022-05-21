<?php 

class calculateNow {
	public $num1;
	public $num2;
	public $calculate;

	public function __construct($num1, $num2, $calculate) {
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->calculate = $calculate;
	}

	public function calcMethod() {
		switch ($this->calculate) {
			case 'addition':
				$result = $this->num1 + $this->num2;
				break;

			case 'subraction':
				$result = $this->num1 - $this->num2;
				break;

			case 'multiplication':
				$result = $this->num1 * $this->num2;
				break;
			
			
			default:
				$result = "error";
				break;
		}
		return $result;
	}
}