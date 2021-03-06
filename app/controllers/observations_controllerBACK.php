<?php
class ObservationsController extends AppController {

	var $name = 'Observations';
	var $layout = 'csv';
		
	function index() {
		$this->layout = 'default';
		$this->Observation->recursive = 0;
		$this->set('observations', $this->paginate());
		
	}

// Comment to test git on laptop

	function export()
	{	
		$this->layout = 'csv';
		ini_set('max_execution_time', 600); //increase max_execution_time to 10 min if data set is very large

		//create a file
		$filename = "export_".date("Y.m.d").".csv";
		$csv_file = fopen('php://output', 'w');

		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename="'.$filename.'"');

		//$sql = $this->Observation->query("SELECT * FROM observation");	// This is your sql query to pull that data you need exported
		$results = $this->Observation->find('all', array());

		// The column headings of your .csv file
		$header_row = array("name", "num", "date", "month", "station");
		fputcsv($csv_file,$header_row,',','"');

		// Each iteration of this while loop will be a row in your .csv file where each field corresponds to the heading of the column
		foreach($results as $result)
		{
			// Array indexes correspond to the field names in your db table(s)
			$row = array(
				$result['Observation']['name'],
				$result['Observation']['observation_num'],
				$result['Observation']['date_of'],
				$result['Observation']['month'],
				$result['Observation']['station'],
			);

			fputcsv($csv_file,$row,',','"');
		}

		fclose($csv_file);
	}

	function report()
	{	
		ini_set('max_execution_time', 600); //increase max_execution_time to 10 min if data set is very large

		//create a file
		$filename = "export_report".date("Y.m.d").".csv";
		$csv_file = fopen('php://output', 'w');

		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename="'.$filename.'"');

		//$sql = $this->Observation->query("SELECT * FROM observation");	// This is your sql query to pull that data you need exported
		$results = $this->Observation->find('all', array());

		// The column headings of your .csv file
		$header_row = array("name", "num", "date", "month", "station");
		fputcsv($csv_file,$header_row,',','"');
		$this->layout = 'csv';

		// Each iteration of this while loop will be a row in your .csv file where each field corresponds to the heading of the column
		foreach($results as $result)
		{
			// Array indexes correspond to the field names in your db table(s)
			$row = array(
				$result['Observation']['name'],
				$result['Observation']['observation_num'],
				$result['Observation']['date_of'],
				$result['Observation']['month'],
				$result['Observation']['station'],
			);

			fputcsv($csv_file,$row,',','"');
		}

		fclose($csv_file);
	}



	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid observation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('observation', $this->Observation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Observation->create();
			if ($this->Observation->save($this->data)) {
				$this->Session->setFlash(__('The observation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Observation->User->find('list');
		$employees = $this->Observation->Employee->find('list');
		$this->set(compact('users', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid observation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Observation->save($this->data)) {
				$this->Session->setFlash(__('The observation has been saved', true, array ('class'=>'ui-state-error')));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Observation->read(null, $id);
		}
		$users = $this->Observation->User->find('list');
		$employees = $this->Observation->Employee->find('list');
		$this->set(compact('users', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for observation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Observation->delete($id)) {
			$this->Session->setFlash(__('Observation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Observation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Observation->recursive = 0;
		$this->set('observations', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid observation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('observation', $this->Observation->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Observation->create();
			if ($this->Observation->save($this->data)) {
				$this->Session->setFlash(__('The observation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Observation->User->find('list');
		$employees = $this->Observation->Employee->find('list');
		$this->set(compact('users', 'employees'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid observation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Observation->save($this->data)) {
				$this->Session->setFlash(__('The observation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Observation->read(null, $id);
		}
		$users = $this->Observation->User->find('list');
		$employees = $this->Observation->Employee->find('list');
		$this->set(compact('users', 'employees'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for observation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Observation->delete($id)) {
			$this->Session->setFlash(__('Observation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Observation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>