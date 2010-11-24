<?php
class MyFilesController extends AppController {

	var $name = 'MyFiles';
	var $helpers = array('Html', 'Form', 'Time');

	function beforeFilter(){
        parent::beforeFilter();
        $this->__expiredSession();
        $this->Auth->allow('*');
    }
          
    function index() {
		$this->MyFile->recursive = 0;
		$this->set('myFiles', $this->paginate());
		$count = $this->MyFile->find('count', array('conditions' => array('MyFile.user_id'=>$this->Auth->user('id'))));
		$this->set('total', $count);
	}
          
    function fto() {
    	if($this->Auth->user('group_id') > 3 ) {
    		
		$this->redirect(array('controller'=>'my_files', 'action' => 'index'));
    		
		} else {

		$this->MyFile->recursive = 0;
		$this->set('myFiles', $this->paginate());
		$count = $this->MyFile->find('count', array('conditions' => array('MyFile.fto'=>1)));
		$this->set('total', $count);
	}
}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MyFile.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('myFile', $this->MyFile->read(null, $id));
	}

	function add() {
        if (!empty($this->data) &&
             is_uploaded_file($this->data['MyFile']['File']['tmp_name'])) {
            $fileData = fread(fopen($this->data['MyFile']['File']['tmp_name'], "r"),
                                     $this->data['MyFile']['File']['size']);

            $this->data['MyFile']['name'] = $this->data['MyFile']['File']['name'];
            $this->data['MyFile']['type'] = $this->data['MyFile']['File']['type'];
            $this->data['MyFile']['size'] = $this->data['MyFile']['File']['size'];
            $this->data['MyFile']['data'] = $fileData;

            $this->MyFile->save($this->data);

            $this->redirect(array('action'=>'index'));
        }
    }

function download($id) {
    Configure::write('debug', 0);
    $file = $this->MyFile->findById($id);

    header('Content-type: ' . $file['MyFile']['type']);
    header('Content-length: ' . $file['MyFile']['size']); // some people reported problems with this line (see the comments), commenting out this line helped in those cases
    header('Content-Disposition: attachment; filename="'.$file['MyFile']['name'].'"');
    echo $file['MyFile']['data'];

    exit();
}
function downloadresume($id) {
    Configure::write('debug', 0);
    $file = $this->MyFile->findByUser_id($id);

    header('Content-type: ' . $file['MyFile']['type']);
    header('Content-length: ' . $file['MyFile']['size']); // some people reported problems with this line (see the comments), commenting out this line helped in those cases
    header('Content-Disposition: attachment; filename="'.$file['MyFile']['name'].'"');
    echo $file['MyFile']['data'];

    exit();
}


	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MyFile', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MyFile->save($this->data)) {
				$this->Session->setFlash(__('The MyFile has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MyFile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MyFile->read(null, $id);
		}
		$users = $this->MyFile->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MyFile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MyFile->del($id)) {
			$this->Session->setFlash(__('MyFile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->MyFile->recursive = 0;
		$this->set('myFiles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MyFile.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('myFile', $this->MyFile->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MyFile->create();
			if ($this->MyFile->save($this->data)) {
				$this->Session->setFlash(__('The MyFile has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MyFile could not be saved. Please, try again.', true));
			}
		}
		$users = $this->MyFile->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MyFile', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MyFile->save($this->data)) {
				$this->Session->setFlash(__('The MyFile has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MyFile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MyFile->read(null, $id);
		}
		$users = $this->MyFile->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MyFile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MyFile->del($id)) {
			$this->Session->setFlash(__('MyFile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>