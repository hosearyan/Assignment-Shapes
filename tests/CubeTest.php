<?php

include_once('./src/Cube.php');

class CubeTest extends\PHPUnit_Framework_TestCase {

	public $cube;
	
	public function setUp()
	{		
		$this->cube = new Shapes\Cube(45);
	}

	public function testCubeClass()
	{		
		$expectedArea = 12150;
		$expectedPerimeter = 540;
		$expectedVolume = 91125;
		
		$this->assertEquals($expectedArea, $this->cube->area());
		$this->assertEquals($expectedPerimeter, $this->cube->perimeter());
		$this->assertEquals($expectedVolume, $this->cube->volume());
		
	}	

}
