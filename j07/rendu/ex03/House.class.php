<?php

	class House {
		public function __construct() {
			return;
		}
		public function introduce() {
			$str = "House ".$this->getHouseName()." of ".$this->getHouseSeat()." : \"".$this->getHouseMotto()."\"\n";
			echo $str;
		}
	}
?>