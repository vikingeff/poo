<?php
require_once 'Color.class.php';

Class Vector {

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 0;
	static $verbose = False;

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }

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

	public function magnitude(){

	}

	public function normalize(){

	}

	public function add( Vector $rhs ){

	}

	public function sub( Vector $rhs ){

	}

	public function opposite(){

	}

	public function scalarProduct ( $k ){

	}

	public function dotProduct( Vector $rhs ){

	}

	public function cos( Vector $rhs ){

	}

	public function crossProduct( Vector $rhs ){

	}

	static public function doc(){
		echo file_get_contents( "Vector.doc.txt" );
		return;
	}
}
?>