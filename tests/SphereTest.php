<?php

include_once('./src/Sphere.php');

class SphereTest extends\PHPUnit_Framework_TestCase {

	public $sphere;
	
	public function setUp()
	{		
		$this->sphere = new Shapes\Sphere(75);
	}

	public function testSphereClass()
	{		
		$expectedArea = 22500 * pi();
		$expectedPerimeter = 150 * pi();
		$expectedVolume = 562500 * pi();
		
		$this->assertEquals($expectedArea, $this->sphere->area());
		$this->assertEquals($expectedPerimeter, $this->sphere->perimeter());
		$this->assertEquals($expectedVolume, $this->sphere->volume());
		
	}		

}
