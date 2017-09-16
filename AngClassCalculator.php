<?php 

	/**
	* 
	*/
	class Calculator
	{
		private $x, $y;

		function __construct($x, $y)
		{
			# code...
			$this->x = $x;
			$this->y = $y;
		}

		public function addNumbers(){
			return $this->x + $this->y;
		}

		public function subtractNumbers(){
			return $this->x - $this->y;
		}

		public function multiplyNumbers(){
			return $this->x * $this->y;
		}

		public function divideNumbers(){
			return $this->x / $this->y;
		}
	}

	$calculator = new Calculator(5, 2);
	echo "5 + 2 = " . $calculator->addNumbers() . "<br>";
	echo "5 - 2 = " . $calculator->subtractNumbers() . "<br>" ;
	echo "5 * 2 = " . $calculator->multiplyNumbers() . "<br>" ;
	echo "5 / 2 = " . $calculator->divideNumbers();

?>