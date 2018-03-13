<?php
	

	/**
	* Base chart class
	*
	* @author   Jean-Marc Trémeaux (jm.tremeaux at gmail.com)
	* @abstract
	*/

	class Chart
	{
		/**
		* Creates a new chart
		*
		* @access	protected
    		* @param	integer		width of the image
    		* @param	integer		height of the image
		*/
		
		function chart($width, $height)
		{
			$this->width = $width;
			$this->height = $height;

			$this->reset();
		}

		/**
		* Initialize the chart
		*
		* @access	private
		*/
		
		function reset()
		{
			$this->text = new Text();		
			$this->point = array();

			unset($this->lowerBound);
			unset($this->upperBound);

			$this->setTitle("Untitled chart");
			//$this->setLogo(dirname(__FILE__) . "/../images/LOGO_hidro.png");
		}

		/**
		* Add a new sampling point to the chart
		*
		* @access	public
		* @param	Point		sampling point to add
		*/
		
		function addPoint($point)
		{
			array_push($this->point, $point);
		}

		/**
		* Sets the title
		*
		* @access	public
		* @param	string		new title
		*/
		
		function setTitle($title)
		{
			$this->title = $title;
		}

		/**
		* Sets the logo image file name
		*
		* @access	public
		* @param	string		new logo image file name
		*/
		
		function setLogo($logoFileName)
		{
			$this->logoFileName = $logoFileName;
		}

		/**
		* Print the title to the image
		*
		* @access	private
		*/
		
		function printTitle()
		{
			$this->text->printCentered($this->img, ($this->labelMarginTop + $this->margin) / 2, $this->textColor, $this->title, $this->text->fontCondensedBold);
		}

		/**
		* Print the logo image to the image
		*
		* @access	private
		*/
		
		function printLogo()
		{
			@$logoImage = imageCreateFromPNG($this->logoFileName);

			if($logoImage)
				imagecopymerge($this->img, $logoImage, 2*$this->margin, $this->margin, 0, 0, imagesx($logoImage), imagesy($logoImage), 100);
		}

		/**
		* Set the outer margin
		*
		* @access	public
		* @param	integer		outer margin value in pixels
		*/
		
		function setMargin($margin)
		{
			$this->margin = $margin;
		}

		/**
		* Set the label left margin
		*
		* @access	public
		* @param	integer		label left margin value in pixels
		*/
		
		function setLabelMarginLeft($labelMarginLeft)
		{
			$this->labelMarginLeft = $labelMarginLeft;
		}

		/**
		* Set the label right margin
		*
		* @access	public
		* @param	integer		label right margin value in pixels
		*/
		
		function setLabelMarginRight($labelMarginRight)
		{
			$this->labelMarginRight = $labelMarginRight;
		}

		/**
		* Set the label top margin
		*
		* @access	public
		* @param	integer		label top margin value in pixels
		*/
		
		function setLabelMarginTop($labelMarginTop)
		{
			$this->labelMarginTop = $labelMarginTop;
		}

		/**
		* Set the label bottom margin
		*
		* @access	public
		* @param	integer		label bottom margin value in pixels
		*/
		
		function setLabelMarginBottom($labelMarginBottom)
		{
			$this->labelMarginBottom = $labelMarginBottom;
		}

		/**
		* Creates and initialize the image
		*
		* @access	protected
		*/
		
		function createImage()
		{
			$this->img = imagecreatetruecolor($this->width, $this->height);
			
			$this->primitive = new Primitive($this->img);

			$this->backGroundColor = new Color(255, 255, 255);
			$this->textColor = new Color(0, 0, 0);

			// White background

			imagefilledrectangle($this->img, 0, 0, $this->width - 1, $this->height - 1, $this->backGroundColor->getColor($this->img));
		}
	}
?>