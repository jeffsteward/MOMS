<?php
class ImagesController extends AppController {

	var $name = 'Images';
	var $helpers = array('Html');
	var $components = array('RequestHandler');

	function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Image', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('image', $this->Image->read(null, $id));
	}

}
?>