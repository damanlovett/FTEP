<?php
class EmployeesController extends AppController {

	var $name = 'Employees';
	var $paginate = array('order'=>'last_name');


	function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate('Employee', array('Employee.group_id >'=>3)));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid employee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

	function my_view($id = null) {
		
		$this->set('employee', $this->Employee->read(null, $this->Auth->user('id')));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Employee->create();
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid employee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $id);
		}
	}

	function my_edit($id = null) {
		
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('Your Account has been saved', true));
				$this->redirect(array('action' => 'my_view'));
			} else {
				$this->Session->setFlash(__('Your Account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $this->Auth->user('id'));
		}
	}

	function my_password($id = null) {
		

		if (!empty($this->data)) {
		$this->data['Employee']['password'] = $this->Auth->password($this->data['Employee']['password']);
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('Your Password has been saved', true));
				$this->redirect(array('action' => 'my_view'));
			} else {
				$this->Session->setFlash(__('Your Password could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $this->Auth->user('id'));
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for employee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employee->delete($id)) {
			$this->Session->setFlash(__('Employee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid employee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Employee->create();
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid employee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for employee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employee->delete($id)) {
			$this->Session->setFlash(__('Employee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>