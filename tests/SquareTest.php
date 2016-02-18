<?php

include_once('./src/Square.php');

class SquareTest extends\PHPUnit_Framework_TestCase {

	public $square;
	
	public function setUp()
	{		
		$this->square = new Shapes\Square(25);
	}

	public function testSquareClass()
	{		
		$expectedArea = 625;
		$expectedPerimeter = 100;
		$expectedVolume = 0;
		
		$this->assertEquals($expectedArea, $this->square->area());
		$this->assertEquals($expectedPerimeter, $this->square->perimeter());
		$this->assertEquals($expectedVolume, $this->square->volume());
		
	}

}
