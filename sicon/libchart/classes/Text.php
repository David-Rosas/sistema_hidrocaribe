<?php
	

	class Text
	{
		var $HORIZONTAL_LEFT_ALIGN = 1;		// PHP4 doesn't support class constants
		var $HORIZONTAL_CENTER_ALIGN = 2;
		var $HORIZONTAL_RIGHT_ALIGN = 4;
		var $VERTICAL_TOP_ALIGN = 8;
		var $VERTICAL_CENTER_ALIGN = 16;
		var $VERTICAL_BOTTOM_ALIGN = 32;

		/**
		* Creates a new text drawing helper
		*
		* @access	public
		*/
		
		function Text()
		{
			// Free low-res fonts based on Bitstream Vera <http://dejavu.sourceforge.net/wiki/>

			$this->fontCondensed = dirname(__FILE__) . "/../fonts/DejaVuSansCondensed.ttf";
			$this->fontCondensedBold = dirname(__FILE__) . "/../fonts/DejaVuSansCondensed-Bold.ttf";
		}

		/**
		* Print text
		*
		* @access	public
		* @param	Image		GD image
		* @param	integer		text coordinate (x)
		* @param	integer		text coordinate (y)
		* @param	Color		text color
		* @param	string		text value
		* @param	string		font file name
		* @param	bitfield	text alignment
		*/
		
		function printText($img, $px, $py, $color, $text, $fontFileName, $align = 0)
		{
			if(!($align & $this->HORIZONTAL_CENTER_ALIGN) && !($align & $this->HORIZONTAL_RIGHT_ALIGN))
				$align |= $this->HORIZONTAL_LEFT_ALIGN;

			if(!($align & $this->VERTICAL_CENTER_ALIGN) && !($align & $this->VERTICAL_BOTTOM_ALIGN))
				$align |= $this->VERTICAL_TOP_ALIGN;

			$fontSize = 8;
			$lineSpacing = 1;

 			list($llx, $lly, $lrx, $lry, $urx, $ury, $ulx, $uly) = imageftbbox($fontSize, 0, $fontFileName, $text, array("linespacing" => $lineSpacing));

			$textWidth = $lrx - $llx;
			$textHeight = $lry - $ury;

			$angle = 0;

			if($align & $this->HORIZONTAL_CENTER_ALIGN)
				$px -= $textWidth / 2;

			if($align & $this->HORIZONTAL_RIGHT_ALIGN)
				$px -= $textWidth;

			if($align & $this->VERTICAL_CENTER_ALIGN)
				$py += $textHeight / 2;

			if($align & $this->VERTICAL_TOP_ALIGN)
				$py += $textHeight;

			imagettftext($img, $fontSize, $angle, $px, $py, $color->getColor($img), $fontFileName, $text);
		}
		
		/**
		* Print text centered horizontally on the image
		*
		* @access	public
		* @param	Image		GD image
		* @param	integer		text coordinate (y)
		* @param	Color		text color
		* @param	string		text value
		* @param	string		font file name
		*/
		
		function printCentered($img, $py, $color, $text, $fontFileName)
		{
			$this->printText($img, imagesx($img) / 2, $py, $color, $text, $fontFileName, $this->HORIZONTAL_CENTER_ALIGN | $this->VERTICAL_CENTER_ALIGN);
		}

		/**
		* Print text in diagonal
		*
		* @access	public
		* @param	Image		GD image
		* @param	integer		text coordinate (x)
		* @param	integer		text coordinate (y)
		* @param	Color		text color
		* @param	string		text value
		*/
		
		function printDiagonal($img, $px, $py, $color, $text)
		{
			$fontSize = 8;
			$fontFileName = $this->fontCondensed;

			$lineSpacing = 1;

 			list($lx, $ly, $rx, $ry) = imageftbbox($fontSize, 0, $fontFileName, $text, array("linespacing" => $lineSpacing));
			$textWidth = $rx - $lx;

			$angle = -45;

			imagettftext($img, $fontSize, $angle, $px, $py, $color->getColor($img), $fontFileName, $text);
		}
	}
?>