<?php
	

	class Primitive
	{
		/**
		* Creates a new primitive object
		*
		* @access	public
		* @param	resource	GD image resource
		*/
		
		function Primitive($img)
		{
			$this->img = $img;
		}
		
		/**
		* Draws a straight line
		*
		* @access	public
		* @param	integer		line start (X)
		* @param	integer		line start (Y)
		* @param	integer		line end (X)
		* @param	integer		line end (Y)
		* @param	Color		line color
		*/
		
		function line($x1, $y1, $x2, $y2, $color, $width = 1)
		{
			imagefilledpolygon($this->img, array($x1, $y1 - $width / 2, $x1, $y1 + $width / 2, $x2, $y2 + $width / 2, $x2, $y2 - $width / 2), 4, $color->getColor($this->img));
//			imageline($this->img, $x1, $y1, $x2, $y2, $color->getColor($this->img));
		}
	}
?>