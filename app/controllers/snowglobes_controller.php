<?php
class SnowGlobesController extends AppController {

	var $name = 'Snowglobes';
	var $helpers = array('Html','GoogleStaticMap','GoogleQRCode','Number','Fraction','SnowglobeFormatter');
	var $components = array('RequestHandler');
	var $paginate = array();

	function index() {
		$this->set('title_for_layout', 'The Collection');

		if (($snowglobes = Cache::read('snowglobes')) === false) {
			$snowglobes = $this->Snowglobe->find('all', array('order' => 'Snowglobe.Name ASC'));
			Cache::write('snowglobes', $snowglobes);
		}

		//Using params['requested'] to determine if the action is called through requestAction
		if (isset($this->params['requested'])) {
			return $snowglobes;
		} elseif ($this->MobileDeviceDetect->isMobile == true) {
			//paginate if the visitor is on a mobile device
		} else {
			$this->set(compact('snowglobes'));
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Snowglobe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('snowglobe', $this->Snowglobe->read(null, $id));
	}

	function story($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Snowglobe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('snowglobe', $this->Snowglobe->read(null, $id));
	}

	function favorites() {
		$this->set('title_for_layout', 'Staff Favorites');
		$this->set('snowglobes', $this->Snowglobe->getStaffPicks());
	}

	function onView() {
		$this->set('title_for_layout', 'On View');
		$this->set('snowglobes', $this->Snowglobe->getOnView());
	}

	function recentAcquisitions() {
		$this->set('title_for_layout', 'Recent Acquisitions');
		$this->set('snowglobes', $this->Snowglobe->find('all', array('order' => 'Snowglobe.DateAcquiredSort DESC', 'limit' => '6')));

	}

	function search() {

	}
}
?>