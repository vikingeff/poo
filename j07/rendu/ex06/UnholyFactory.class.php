<?php
	
	class UnholyFactory{

		public $saveup;

		public function __construct() {
			$this->saveup = array();
			return; 
		}
		public function absorb ( $victim ){
			$implem = class_parents(get_class($victim));
			if (array_key_exists('Fighter', $implem))
			{
				if (array_key_exists($victim->getT(), $this->saveup))
					echo "(Factory already absorbed a fighter of type ".$victim->getT().")\n";
				else
				{
					echo "(Factory absorbed a fighter of type ".$victim->getT().")\n";
					$this->saveup[$victim->getT()]=$victim;
				}
			}
			else
				echo "(Factory can't absorb this, it's not a fighter)\n"; 			
			return;
		}
		public function fabricate ( $evil ){
			if (array_key_exists($evil, $this->saveup))
			{
				echo "(Factory fabricates a fighter of type ".$evil.")\n";
				return $this->saveup[$evil];
			}
			else
				echo "(Factory hasn't absorbed any fighter of type ".$evil.")\n";
			return;
		}
	}
?>