<?php
class FractionHelper extends AppHelper {

	//188 = ¼
	//189 = ½
	//190 = ¾

	//8531 = 1/3
	//8532 = 2/3

	//8533 = 1/5
	//8534 = 2/5
	//8535 = 3/5
	//8536 = 4/5

	//8537 = 1/6
	//8538 = 5/6

	//8539 = 1/8
	//8540 = 3/8
	//8541 = 5/8
	//8542 = 7/8

	var $_fractions = array(
		'250' => '&#188;',
		'500' => '&#189;',
		'750' => '&#190;',
		'125' => '&#8539;',
		'375' => '&#8540;',
		'625' => '&#8541;',
		'875' => '&#8542;'
	);


	function toFraction($number) {
		$parts = explode('.', $number);
		$frac = '';

		if (isset($this->_fractions[$parts[1]]))
			$frac = ' '.$this->_fractions[$parts[1]];

		return $parts[0].$frac;
	}

}?>