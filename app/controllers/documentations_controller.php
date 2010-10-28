<?php
class DocumentationsController extends AppController {

	var $name = 'Documentations';
	
	function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('content_title',"<span class='ss_sprite ss_folder_edit'></span>&nbsp;&nbsp;Documentation Manager");
		
	}

	function index() {
				if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('controller'=>'observations', 'action' => 'trainee'));
		} else {
		$this->Documentation->recursive = 0;
		$this->set('documentations', $this->paginate(array('Documentation.user_id'=>$this->Auth->user('id'))));
		}
	}

	function trainee() {
		$this->Documentation->recursive = 0;
		$this->set('documentations', $this->paginate(array('Documentation.employee_id'=>$this->Auth->user('id'))));
	}

	function view($id = null) {
		if($this->Auth->user('group_id') > 3 ) { $this->redirect(array('controller'=>'observations', 'action' => 'trainee')); }

		if (!$id) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('documentation', $this->Documentation->read(null, $id));
	}

	function trainee_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documentation', $this->Documentation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Documentation->create();
			if ($this->Documentation->save($this->data)) {
				$this->Session->setFlash(__('The documentation has been saved', true));
				$this->redirect(array('controller'=>'observations', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentation could not be saved. Please, try again.', true));
			}
		}
		$observations = $this->Documentation->Observation->find('list', array('conditions'=> array('Observation.user_id'=>$this->Auth->user('id'))));
		$this->set(compact('observations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documentation->save($this->data)) {
				$this->Session->setFlash(__('The documentation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Documentation->read(null, $id);
		}
		$observations = $this->Documentation->Observation->find('list');
		$this->set(compact('observations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for documentation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Documentation->delete($id)) {
			$this->Session->setFlash(__('Documentation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Documentation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Documentation->recursive = 0;
		$this->set('documentations', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documentation', $this->Documentation->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Documentation->create();
			if ($this->Documentation->save($this->data)) {
				$this->Session->setFlash(__('The documentation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentation could not be saved. Please, try again.', true));
			}
		}
		$observations = $this->Documentation->Observation->find('list');
		$this->set(compact('observations'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documentation->save($this->data)) {
				$this->Session->setFlash(__('The documentation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Documentation->read(null, $id);
		}
		$observations = $this->Documentation->Observation->find('list');
		$this->set(compact('observations'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for documentation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Documentation->delete($id)) {
			$this->Session->setFlash(__('Documentation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Documentation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>