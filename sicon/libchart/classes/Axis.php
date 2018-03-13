<?php
	

	class Axis
	{
		/**
		* Creates a new axis formatter
		*
		* @access	public
    		* @param	integer		minimum value on the axis
    		* @param	integer		maximum value on the axis
		*/
		
		function Axis($min, $max)
		{
			$this->min = $min;
			$this->max = $max;

			$this->guide = 10;
		}

		/**
		* Computes value between two ticks
		*
		* @access	private
		*/

		function quantizeTics()
		{
			// Approximate number of decades, in [1..10[

			$norm = $this->delta / $this->magnitude;

			// Approximate number of tics per decade

			$posns = $this->guide / $norm;

		    	if ($posns > 20)
				$tics = 0.05;		// e.g. 0, .05, .10, ...
			else
			if ($posns > 10)
				$tics = 0.2;		// e.g.  0, .1, .2, ...
			else
			if ($posns > 5)
				$tics = 0.4;		// e.g.  0, 0.2, 0.4, ...
			else
			if ($posns > 3)
				$tics = 0.5;		// e.g. 0, 0.5, 1, ...
			else
			if ($posns > 2)
				$tics = 1;		// e.g. 0, 1, 2, ...
			else
			if ($posns > 0.25)
				$tics = 2;		// e.g. 0, 2, 4, 6 
			else
				$tics = ceil($norm);
			
			$this->tics = $tics * $this->magnitude;
		}

		/**
		* Computes automatic boundaries on the axis
		*
		* @access	public
		*/

		function computeBoundaries()
		{
			// Range

			$this->delta = abs($this->max - $this->min);

			// Check for null distribution
			
			if($this->delta == 0)
				$this->delta = 1;
			
			// Order of magnitude of range

			$this->magnitude = pow(10, floor(log10($this->delta)));
			
			$this->quantizeTics();

			$this->displayMin = floor($this->min / $this->tics) * $this->tics;
			$this->displayMax = ceil($this->max / $this->tics) * $this->tics;
			$this->displayDelta = $this->displayMax - $this->displayMin;
		
			// Check for null distribution
			
			if($this->displayDelta == 0)
				$this->displayDelta = 1;
		}

		/**
		* Set boundaries on the axis. Theses values override the automatic values.
		*
		* @access	public
		*/
		
		function setBoundaries($sampleCount, $yMinValue, $yMaxValue)
		{
			$this->sampleCount = $sampleCount;
			$this->yMinValue = $yMinValue;
			$this->yMaxValue = $yMaxValue;
		}

		/**
		* Get the lower boundary on the axis
		*
		* @access	public
		* @return	integer		lower boundary on the axis
		*/

		function getLowerBoundary()
		{
			return $this->displayMin;
		}

		/**
		* Get the upper boundary on the axis
		*
		* @access	public
		* @return	integer		upper boundary on the axis
		*/

		function getUpperBoundary()
		{
			return $this->displayMax;
		}

		/**
		* Get the value between two ticks
		*
		* @access	public
		* @return	integer		value between two ticks
		*/

		function getTics()
		{
			return $this->tics;
		}
	}
?>