<?php
	class Tyrion extends Lannister{
		public function __construct() {
			return; 
		}
		public function getSize() {
			return "Short";
		}
		public function sleepWith( $biatch ){
			if (get_class($biatch) === "Sansa")
				echo "Let's do this.\n";
			else
				echo "Not even if I'm drunk !\n";
		}
	}
?>