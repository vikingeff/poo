<?php
	class Jaime extends Lannister{
		public function __construct() {
			return;
		}
		public function getSize() {
			return "Tall";
		}
		public function sleepWith( $biatch ){
			if (get_class($biatch) === "Cersei")
				echo "With pleasure, but only in a tower in Winterfell, then.\n";
			else if (get_class($biatch) === "Sansa")
				echo "Let's do this.\n";
			else
				echo "Not even if I'm drunk !\n";
		}
	}
?>