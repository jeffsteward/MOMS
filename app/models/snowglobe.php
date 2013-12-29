<?php
class Snowglobe extends AppModel {

	var $name = 'Snowglobe';
	var $useTable = 'Snowglobes';
	var $primaryKey = 'SnowglobeID';
	var $displayField = 'Name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'PrimaryImage' => array(
			'className' => 'Image',
			'foreignKey' => 'SnowglobeID',
			'dependent' => false,
			'conditions' => array('PrimaryImage.PrimaryImage' => '1'),
			'fields' => array('FileName','Description'),
			'order' => ''
		)
	);

	var $belongsTo = array(
		'Donor' => array(
			'className' => 'Donor',
			'foreignKey' => 'DonorID',
			'fields' => array('DisplayName')),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'PurchaseLocationID',
			'fields' => array('Name','Latitude','Longitude','City','State','Country','Continent','Region','FullLocation'))
	);

	var $hasMany = array(
		'Images' => array(
			'className' => 'Image',
			'foreignKey' => 'SnowglobeID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	function getStaffPicks() {
		return $this->find('all', array('conditions' => array('Snowglobe.StaffPick' => 1)));
	}

	function getOnView() {
		return $this->find('all', array('conditions' => array('Snowglobe.OnView' => 1)));
	}

}
?>