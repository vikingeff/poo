<?php
	class NightsWatch {
		public function __construct() {
			return; 
		}
		public function recruit( $budy ){
			$implem = class_implements(get_class($budy));
			if (array_key_exists('IFighter', $implem))
				$budy->fight();
			return;
		}
		public function fight(){
			return;
		}
	}

?>