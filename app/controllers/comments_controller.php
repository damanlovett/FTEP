<?php
class CommentsController extends AppController {

	var $name = 'Comments';

	function index() {
				if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('action' => 'trainee'));
		} else {
			
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate(array('Comment.user_id'=>$this->Auth->user('id'))));
	}
		
	}

	function trainee() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate(array('Comment.employee_id'=>$this->Auth->user('id'))));
	}

	function view($id = null) {
		if ($this->Auth->user('group_id') > 3 ) { $this->redirect(array('action'=>'trainee'));}
		if (!$id) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	function trainee_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.', true));
			}
		}
		$observations = $this->Comment->Observation->find('list', array('conditions'=> array('Observation.user_id'=>$this->Auth->user('id'))));
		$users = $this->Comment->User->find('list');
		$employees = $this->Comment->Employee->find('list', array('conditions'=>array('group_id'=>'5')));
		$this->set(compact('observations', 'users', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
		$observations = $this->Comment->Observation->find('list');
		$users = $this->Comment->User->find('list');
		$employees = $this->Comment->Employee->find('list');
		$this->set(compact('observations', 'users', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash(__('Comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.', true));
			}
		}
		$observations = $this->Comment->Observation->find('list');
		$users = $this->Comment->User->find('list');
		$employees = $this->Comment->Employee->find('list');
		$this->set(compact('observations', 'users', 'employees'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
		$observations = $this->Comment->Observation->find('list');
		$users = $this->Comment->User->find('list');
		$employees = $this->Comment->Employee->find('list');
		$this->set(compact('observations', 'users', 'employees'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash(__('Comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>