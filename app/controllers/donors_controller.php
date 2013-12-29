<?php
class DonorsController extends AppController {

	var $name = 'Donors';
	var $helpers = array('Html','SnowglobeFormatter','Number');
	var $components = array('RequestHandler');

	function index() {
		$this->set('donors', $this->Donor->find('all'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Donor', true));
			$this->redirect(array('action' => 'index'));
		}

		// Look in to using containable instead of recursive to reduce overhead
		// during these requests.
		// http://book.cakephp.org/view/1323/Containable
		// http://mark-story.com/posts/view/reducing-requestaction-use-in-your-cakephp-sites-with-fat-models

		$this->Donor->recursive = 2;
		$this->set('donor', $this->Donor->read(null, $id));
	}

	function details($id = null) {
		if (!$id) {
			$this->redirect(array('action' => 'index'));
		}

		$this->Donor->recursive = 2;
		$this->set('donor', $this->Donor->read(null, $id));
	}
}
?>