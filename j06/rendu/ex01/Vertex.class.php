<?php
require_once 'Color.class.php';

Class Vertex {

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 0;
	private $_color = new Color(array( 'red' => 0   , 'green' => 0   , 'blue' => 0 ));
	static $verbose = False;

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }

	public function setX( $x ) { $this->_x = $x; return; }
	public function setY( $y ) { $this->_y = $y; return; }
	public function setZ( $z ) { $this->_z = $z; return; }
	public function setW( $w ) { $this->_w = $w; return; }

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
		$str = "Color ( red: ".$this->red.", green: ".$this->green.", blue: ".$this->blue.")";
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