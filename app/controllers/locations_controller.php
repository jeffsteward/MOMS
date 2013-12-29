<?php
class LocationsController extends AppController {

	var $name = 'Locations';
	var $helpers = array('SnowglobeFormatter');
	var $components = array('RequestHandler');

	function index() {
		$this->Location->recursive = 0;
		$this->set('locations', $this->Location->find('all'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'location'));
			$this->redirect(array('action' => 'index'));
		}

		$this->Location->recursive = 2;
		$this->set('location', $this->Location->read(null, $id));
	}

	function mappoints() {
		$this->set('locations', $this->Location->find('all', array(
									'fields' => array('LocationID', 'Name', 'Latitude', 'Longitude'))));
	}
}
?>