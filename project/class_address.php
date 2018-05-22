<?php
/**
* 
*/
class person 
	{
		// explicitly adding class properties are optional - but 
		// is good practice
		var $name;	 
		function __construct($persons_name) {
			$this->name = $persons_name;
		 }
 
		 public function get_name() {
		 	return $this->name;
		 }
 
		 // protected methods and properties restrict access to 
		 // those elements.
		 protected function set_name($new_name) {
		 	 if ($this->name !=  "Jimmy Two Guns") {
		 	 	$this->name = strtoupper($new_name);
		 	 } 
		}
	} 

?>