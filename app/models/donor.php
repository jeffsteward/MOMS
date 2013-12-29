<?php
class Donor extends AppModel {

	var $name = 'Donor';
	var $useTable = 'Donors';
	var $primaryKey = 'DonorID';
	var $displayField = 'DisplayName';

	var $hasMany = array(
		'Snowglobes' => array(
			'className' => 'Snowglobe',
			'foreignKey' => 'DonorID'
		)
	);
}
?>