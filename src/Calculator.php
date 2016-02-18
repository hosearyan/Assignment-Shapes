<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		$total_area = 0;
		foreach($shapes as $area){
			$total_area = $total_area + $area->area();
		}
		return $total_area;
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		$total_volume = 0;
		foreach($shapes as $shape_3d){
			$total_volume = $total_volume + $shape_3d->volume();
		}
		return $total_volume;
	}

}
