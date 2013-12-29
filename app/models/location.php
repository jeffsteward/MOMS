<?php
class Location extends AppModel {

	var $name = 'Location';
	var $useTable = 'Locations';
	var $primaryKey = 'LocationID';
	var $displayField = 'Name';
	var $virtualFields = array(
		'FullLocation' => 'CONCAT_WS(", ", Location.Name, Location.City, Location.State, Location.Region, Location.Country, Location.Continent)'
	);

	var $hasMany = array(
		'Snowglobes' => array(
			'className' => 'Snowglobe',
			'foreignKey' => 'PurchaseLocationID'
		)
	);

}
?>