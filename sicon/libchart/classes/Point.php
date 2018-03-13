<?php
	

	class Point
	{
		/**
		* Creates a new sampling point of coordinates (x, y)
		*
		* @access	public
    		* @param	integer		x coordinate (label)
    		* @param	integer		y coordinate (value)
		*/
		
		function Point($x, $y)
		{
			$this->x = $x;
			$this->y = $y;
		}

		/**
		* Gets the x coordinate (label)
		*
		* @access	public
    		* @return	integer		x coordinate (label)
		*/
		
		function getX()
		{
			return $this->x;
		}

		/**
		* Gets the y coordinate (value)
		*
		* @access	public
    		* @return	integer		y coordinate (value)
		*/
		
		function getY()
		{
			return $this->y;
		}
	}
?>