<?php
class ObservationsController extends AppController {

	var $name = 'Observations';
	var $paginate = array('order'=>'Employee.last_name');
	
	function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('content_title',"<span class='ss_sprite ss_page_edit'></span>&nbsp;&nbsp;Daily Observation Report");
		
	}
		
	function index() {
		if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('action' => 'trainee'));
		} else {
		$this->Observation->recursive = 1;
		$this->set('observations', $this->paginate(array('Observation.archive'=>'0')));
		}
		$users = $this->Observation->User->find('list', array('conditions'=>array('User.group_id >'=>3),'order'=>array('User.name ASC')));
		$this->set(compact('users'));
	}
		
	function export_xls($id=null) {
		//$this->data['Observation']['month'] = 'January';
		if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('action' => 'trainee'));
		} else {
		$this->Observation->recursive = 1;
		$data = $this->Observation->find('all', array('conditions'=>array('Observation.month'=>$this->data['Observation']['month'])));
		
		$this->set('rows',$data);
		$this->render('export_xls','export_xls');
		}
		$users = $this->Observation->User->find('list', array('conditions'=>array('User.group_id >'=>3),'order'=>array('User.name ASC')));
		$this->set(compact('users'));
	}
	
	
	
			
	function month($id=null) {
		if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('action' => 'trainee'));
		} else {
		$this->Observation->recursive = 1;
		//$this->set('observations', $this->paginate(array('Observation.month'=>$id)));
		$this->set('observations', $this->paginate(array('Observation.month'=>$this->data['Observation']['id'])));
				
		}
		$users = $this->Observation->User->find('list', array('conditions'=>array('User.group_id >'=>3),'order'=>array('User.name ASC')));
		$this->set(compact('users'));


	}
			
	function user($id=null) {
		if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('action' => 'trainee'));
		} else {
		$this->Observation->recursive = 1;
		//$this->set('observations', $this->paginate(array('Observation.month'=>$id)));
		$this->set('observations', $this->paginate(array('Observation.employee_id'=>$this->data['Observation']['user'])));

		}
		$users = $this->Observation->User->find('list', array('conditions'=>array('User.group_id >'=>3),'order'=>array('User.name ASC')));
		$employees = $this->Observation->User->find('first', array('conditions'=>array('User.id'=>$this->data['Observation']['user'])));
		$this->set(compact('users','employees'));

	}


	function archive() {
		if($this->Auth->user('group_id') > 3 ) {
		$this->redirect(array('action' => 'trainee'));
		} else {
		$this->Observation->recursive = 1;
		$this->set('observations', $this->paginate());
		}
	
	}
	function pre_index() {
		$this->Observation->recursive = 0;
		$this->set('observations', $this->paginate(array('Observation.user_id'=>$this->Auth->user('id'))));
	}
	
	function trainee() {
		$this->Observation->recursive = 0;
		$this->set('observations', $this->paginate(array('Observation.employee_id'=>$this->Auth->user('id'))));
	}

	function export($id = null) 
	{	
		$this->layout = 'csv';
		ini_set('max_execution_time', 600); //increase max_execution_time to 10 min if data set is very large

		//create a file
		$filename = "export_".date("Y.m.d").".csv";
		$csv_file = fopen('php://output', 'w');

		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		
		
		
		
		
		

		$sql = $this->Observation->query("SELECT employees.last_name, employees.first_name, Observations.observation_num, Observations.date_of, Observations.month, Observations.station, Observations.nw, Observations.lost_day, Observations.1, Observations.2, Observations.3, Observations.4t, Observations.4p, Observations.5t, Observations.5p, Observations.6t, Observations.6p, Observations.7t, Observations.7p, Observations.8t, Observations.8p, Observations.9t, Observations.9p, Observations.10, Observations.11, Observations.12, Observations.13, Observations.14, Observations.15, Observations.16, Observations.17, Observations.18, Observations.19, Observations.20, Observations.21, Observations.22, Observations.23, Observations.24, Observations.25, Observations.26, Observations.27, Observations.28, Observations.29, Observations.30, Observations.31, Observations.32, Observations.33, Observations.comments, Observations.created, Observations.modified, Documentations.doc_area, Documentations.most_satisfactory, Documentations.least_satisfactory, Documentations.comments, Documentations.e_comments, Documentations.ob_date, Users.last_name, Users.first_name
FROM Users INNER JOIN ((employees INNER JOIN Observations ON employees.id = Observations.employee_id) INNER JOIN Documentations ON Observations.id = Documentations.observation_id) ON Users.id = Observations.user_id;

");	// This is your sql query to pull that data you need exported
		
		
		
		
		
		
		
		$results = $this->Observation->find('first', array('id'=>$id));

		// The column headings of your .csv file
		$header_row = array("name", "num", "date", "month", "station");
		fputcsv($csv_file,$header_row,',','"');

		// Each iteration of this while loop will be a row in your .csv file where each field corresponds to the heading of the column
		foreach($sqls as $sql)
		{
			// Array indexes correspond to the field names in your db table(s)
			$row = array(
				$sql['name'],
				$sql['observation_num'],
				$sql['date_of'],
				$sql['month'],
				$sql['station'],
			);

			fputcsv($csv_file,$row,',','"');
		}

		fclose($csv_file);
	}


	function view($id = null) {
		if($this->Auth->user('group_id') > 3 ) { $this->redirect(array('action' => 'trainee')); }

		if (!$id) {
			$this->Session->setFlash(__('Invalid observation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('observation', $this->Observation->read(null, $id));
	}

	function trainee_view($id = null) {
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
		
		$employees = $this->Observation->Employee->find('list',array('conditions'=>array('Employee.group_id > '=>'4'), 'order'=>array('Employee.name ASC')));
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
