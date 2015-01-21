<?php
	class Student
	{
		private $name, $id; 

		public function __construct($name, $id) {

			if(preg_match('/[0-9]{7}/', $id)) {
			$this->name = $name; 
			$this->id = $id; 
			} else {
				echo "id must be 7 numbers<br>";
				return 0;
			}

		} 
		function printNameId() { 
			print "Name: $this->name id: $this->id <br>";
		}


	}
 	
?>