<?php
Class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static $verbose = False;

	public function getRed() { return $this->red; }
	public function getGreen() { return $this->green; }
	public function getBlue() { return $this->blue; }

	public function setRed( $r ) { $this->red = $r; return; }
	public function setGreen( $g ) { $this->green = $g; return; }
	public function setBlue( $b ) { $this->blue = $b; return; }

	public function __construct(array $kwargs){
		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = intval($kwargs['rgb']) / 65536 % 256;
			$this->green = intval($kwargs['rgb']) / 256 % 256;
			$this->blue = intval($kwargs['rgb']) % 256;
		}
		else
		{
			if (array_key_exists('red', $kwargs))
				$this->red = intval($kwargs['red']);
			if (array_key_exists('blue', $kwargs))
				$this->green = intval($kwargs['green']);
			if (array_key_exists('green', $kwargs))
				$this->blue = intval($kwargs['blue']);
		}
		if (self::$verbose === True)
			print($this." constructed.\n");
		return;
	}

	public function __destruct(){
		if (self::$verbose === True)
			print($this." destructed.\n");
		return;
	}

	public function __toString(){
		$str = "Color( red: ".$this->red.", green: ".$this->green.", blue: ".$this->blue.")";
		return $str;
	}

	public function add( Color $rhs ){
		$color = new Color( array( 'red' => $this->red + $rhs->red, 'green' => $this->green + $rhs->green, 'blue' => $this->blue + $rhs->blue));
		return $color;
	}
	
	public function sub( Color $rhs ){
		$color = new Color( array( 'red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green, 'blue' => $this->blue - $rhs->blue));
		return $color;
	}
	
	public function mult( $f ){
		$color = new Color( array( 'red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f));
		return $color;
	}

	static public function doc(){
		echo file_get_contents( "Color.doc.txt" );
		return;
	}
}
?>