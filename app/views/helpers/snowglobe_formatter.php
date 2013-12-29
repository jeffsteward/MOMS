<?php

class SnowglobeFormatterHelper extends AppHelper {
	var $helpers = array('Fraction','Html');


	function renderPrimaryImage($sg, $size, $options = null) {
		$path = 'snowglobes/';
		$primaryImage = 'no_image.jpg';

		switch ($size) {
			case 'small':
				$path .= '75x75/';
				break;
			case 'medium':
				$path .= '200x200/';
				break;
			case 'large':
				$path .= '400x400/';
				break;
			default:
				$path .= '75x75/';
		}

		if (!is_null($sg['PrimaryImage']['FileName']))
			$primaryImage = $sg['PrimaryImage']['FileName'];

		return $this->Html->image($path.$primaryImage, $options);
	}

	function renderScaledImage($sg) {
		$scaleFactor = '';
		$scalePositionTop = '';
		$scalePositionLeft = '';
		$scaledImage = '';

		// Compute the scaling and positioning values for the relative size view of the snowglobe
		// 1/4" = 14.5px, 1/2" = 25px
		if ($sg['Snowglobe']['Height'] >= $sg['Snowglobe']['BaseWidth']) {
			$scaleFactor = floor(($sg['Snowglobe']['Height']/0.25)*14);

			$scalePositionTop = floor(200 - $scaleFactor/2);	// 150
			$scalePositionLeft = floor(200 - $scaleFactor/2) + 15; //Fudge factor for  125
		} else {
			$scaleFactor = floor(($sg['Snowglobe']['BaseWidth']/0.25)*14);
			$scaleFactor-=20;	//Fudge factor for image borders

			$scalePositionTop = floor(200 - $scaleFactor/2) + 20;	// 150
			$scalePositionLeft = floor(200 - $scaleFactor/2) + 10; //Fudge factor for  125
		}


		$scaledImage = '<div style="background-color:#ffffff;position:relative;">';
		$scaledImage .=	$this->renderPrimaryImage(
								$sg, 'large',
								array("title" => $sg['Snowglobe']['Name'],
								"height"=>$scaleFactor,
								"width"=>$scaleFactor,
								"style"=>"position:relative;z-index:10;top:".$scalePositionTop."px;left:".$scalePositionLeft."px;"));
		$scaledImage .= '<div style="position:absolute;top:0px;left:0px;z-index:20;">'.$this->Html->image("hand_overlay.png").'</div></div>';

		return $scaledImage;

	}


	function renderInterpretation($sg) {
		$interpretation = '';
		if (!empty($sg['Snowglobe']['Description']))
			$interpretation = $sg['Snowglobe']['Description'].' ';

		if (!empty($sg['Snowglobe']['Notes']))
			$interpretation .= $sg['Snowglobe']['Notes'];

		if (!empty($interpretation) && !empty($sg['Snowglobe']['LabelText']))
			$interpretation .= '<br/><br/>';

		if (!empty($sg['Snowglobe']['LabelText']))
			$interpretation .= $sg['Snowglobe']['LabelText'];

		return $interpretation;
	}

	function renderBaseDimensions($sg) {
		$dimsBase = '';
		if (!empty($sg['Snowglobe']['BaseWidth']))
			$dimsBase = $this->Fraction->toFraction($sg['Snowglobe']['BaseWidth']).'"W x '.
						$this->Fraction->toFraction($sg['Snowglobe']['BaseDepth']).'"D x '.
						$this->Fraction->toFraction($sg['Snowglobe']['Height']).'"H';

		return $dimsBase;
	}

	function renderMaxDimensions($sg) {
		$dimsMax = '';
		if (!empty($sg['Snowglobe']['MaxWidth']))
			$dimsMax = $this->Fraction->toFraction($sg['Snowglobe']['MaxWidth']).'"W x '.
						$this->Fraction->toFraction($sg['Snowglobe']['MaxDepth']).'"D x '.
						$this->Fraction->toFraction($sg['Snowglobe']['Height']).'"H';

		return $dimsMax;
	}

}

?>