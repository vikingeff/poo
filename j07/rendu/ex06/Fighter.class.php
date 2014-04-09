<?php

	class Fighter{

		public $type_f;
		
		public function getT() { return $this->type_f; }

		public function __construct( $type ) {
			$this->type_f = $type;
			return; 
		}
	}
?>