<?php
/*
* GoogleQRCodeHelper by Jeff Steward
*
* Google charts reference
*
* http://code.google.com/apis/chart/
*
* Usage
*
* http://chart.apis.google.com/chart?cht=qr&chs=350x350&chl=test
*
*/
class GoogleQRCodeHelper extends AppHelper {

	var $helpers = array('Html');

	var $staticUrl = 'http://chart.apis.google.com/chart?';

	function renderQR($text, $width = null, $height = null) {

        if (is_null($width)) {
            $width = '200';
        }
        if (is_null($height)) {
            $height = '200';
        }

		$url = $this->staticUrl;

		$url .= 'cht=qr';

		$url .= '&chs='.$width.'x'.$height;

		$url .= '&chl='.$text;

		return $this->Html->image($url, array("height"=>$width, "width"=>$height));
	}
};

?>