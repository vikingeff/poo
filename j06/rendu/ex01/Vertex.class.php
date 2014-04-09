<?php
require_once 'Color.class.php';

Class Vertex {

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 0;
	private $_color;
	static $verbose = False;

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
	public function getColor() { return $this->_color; }

	public function setX( $x ) { $this->_x = $x; return; }
	public function setY( $y ) { $this->_y = $y; return; }
	public function setZ( $z ) { $this->_z = $z; return; }
	public function setW( $w ) { $this->_w = $w; return; }
	public function setColor ( $color ) { $this->_color = $color; return; }

	public function __construct(array $kwargs){
		if (array_key_exists('x', $kwargs) && array_key_exists('y', $kwargs) && array_key_exists('z', $kwargs))
		{
			$this->_x = $kwargs['x'];
			$this->_y = $kwargs['y'];
			$this->_z = $kwargs['z'];
		}
		else
			exit("Arguments are missing, need x, y, z and w.");
		if (array_key_exists('w', $kwargs))
			$this->_w = $kwargs['w'];
		else
			$this->setW (1.0);
		if (array_key_exists('color', $kwargs))
			$this->_color = $kwargs['color'];
		else
		{
			$white = new Color(array( 'red' => 0xff, 'green' => 0xff, 'blue' => 0xff ));
			$this->_color = $white;
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
		if (self::$verbose === True)
			$str = "Vertex( x: ".number_format($this->getX(), 2, '.', '').", y: ".number_format($this->getY(), 2, '.', '').", z:".number_format($this->getZ(), 2, '.', '').", w:".number_format($this->getW(), 2, '.', '').", ".$this->_color." )";
		else
			$str = "Vertex( x: ".number_format($this->getX(), 2, '.', '').", y: ".number_format($this->getY(), 2, '.', '').", z:".number_format($this->getZ(), 2, '.', '').", w:".number_format($this->getW(), 2, '.', '')." )";
		return $str;
	}

	static public function doc(){
		echo file_get_contents( "Vertex.doc.txt" );
		return;
	}
}
?>