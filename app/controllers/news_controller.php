<?php
class NewsController extends AppController {

	var $name = 'News';
	var $helpers = array('Text', 'Time', 'Paginator');
	var $components = array('RequestHandler');
	var $paginate = array('limit' => 10,
							'order' => array('News.NewsDate' => 'desc'));

	function index() {
		//$this->set('news', $this->News->find('all',
		//	array('conditions' => array('Active' => 1),
		//			'order' => 'NewsDate DESC')));

		$this->set('news', $this->paginate('News',
									array('Active' => 1)));

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'newsitem'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('newsitem', $this->News->read(null, $id));
	}

	function category($cat = null) {
		if (!$cat) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'newsitem'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('news', $this->News->find('all',
			array('conditions' => array('Category LIKE' => '%'.$cat.'%'),
					'order' => 'NewsDate DESC')));

	}
}
?>