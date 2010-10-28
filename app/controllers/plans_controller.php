<?php
class PlansController extends AppController {

	var $name = 'Plans';

	function index() {
		$this->Plan->recursive = 0;
		$this->set('plans', $this->paginate(array('Plan.user_id'=>$this->Auth->user('id'))));
	}

	function trainee() {
		$this->Plan->recursive = 0;
		$this->set('plans', $this->paginate(array('Plan.user_id'=>$this->Auth->user('id'))));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid plan', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('plan', $this->Plan->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Plan->create();
			if ($this->Plan->save($this->data)) {
				$this->Session->setFlash(__('The plan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.', true));
			}
		}
		$observations = $this->Plan->Observation->find('list', array('conditions'=> array('Observation.user_id'=>$this->Auth->user('id'))));
		$users = $this->Plan->User->find('list');
		$this->set(compact('observations', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid plan', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Plan->save($this->data)) {
				$this->Session->setFlash(__('The plan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Plan->read(null, $id);
		}
		$observations = $this->Plan->Observation->find('list');
		$users = $this->Plan->User->find('list');
		$this->set(compact('observations', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for plan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Plan->delete($id)) {
			$this->Session->setFlash(__('Plan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Plan was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Plan->recursive = 0;
		$this->set('plans', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid plan', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('plan', $this->Plan->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Plan->create();
			if ($this->Plan->save($this->data)) {
				$this->Session->setFlash(__('The plan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.', true));
			}
		}
		$observations = $this->Plan->Observation->find('list');
		$users = $this->Plan->User->find('list');
		$this->set(compact('observations', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid plan', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Plan->save($this->data)) {
				$this->Session->setFlash(__('The plan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Plan->read(null, $id);
		}
		$observations = $this->Plan->Observation->find('list');
		$users = $this->Plan->User->find('list');
		$this->set(compact('observations', 'users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for plan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Plan->delete($id)) {
			$this->Session->setFlash(__('Plan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Plan was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>