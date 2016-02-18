<?php

include_once('./src/Circle.php');

class CircleTest extends\PHPUnit_Framework_TestCase {

	public $circle;
	
	public function setUp()
	{		
		$this->circle = new Shapes\Circle(10);
	}

	public function testCircleClass()
	{		
		$expectedArea = 100 * pi();
		$expectedPerimeter = 20 * pi();
		$expectedVolume = 0;
		
		$this->assertEquals($expectedArea, $this->circle->area());
		$this->assertEquals($expectedPerimeter, $this->circle->perimeter());
		$this->assertEquals($expectedVolume, $this->circle->volume());
		
	}
}
