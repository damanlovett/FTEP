<?php

class AppController extends Controller {
	
		var $components = array('Auth','Session');
		var $helpers = array('Html', 'Form', 'Javascript', 'Switches','Time','Session');
		var $layout = 'default';
		
    function beforeFilter(){
        $this->Auth->allow(array('display'));
        $this->Auth->logoutRedirect = '/announcements';
        $this->Auth->loginRedirect = array('controller'=>'announcements');
        $this->Auth->authError = sprintf(__('You are not authorized to access this page.',true),$this->name);
        $this->Auth->authorize = 'controller';
        //$this->Auth->userScope = array('User.active = 1');
        $this->set('Auth',$this->Auth->user());
	if ($this->Auth->user('role') == '1') {
			$this->layout = 'admin';
		}
    }
	
    function isAuthorized() {
        if ($this->action == 'edit') {
            if ($this->Auth->user('group_id') < '5') {
                return true;
            } else {
                $this->Session->setFlash('You are not authorized to edit records.'); 
                return false;
            }
        }
        
        if ($this->action == 'delete') {
            if ($this->Auth->user('group_id') < '3') {
                return true;
            } else {
                $this->Session->setFlash('You are not authorized to delete records.'); 
                return false;
            }
        }
        
        if ($this->action == 'add') {
            if ($this->Auth->user('group_id') > '0') {
                return true;
            } else {
                $this->Session->setFlash('You are not authorized to add records.'); 
                return false;
            }
        }

        return true;
    }
	
    
/** Menu
	*/
	
	function layoutMenu(){
		
		if ($this->Auth->user('group_id') == 1) {
			$this->layout = "trainee";
		} else {
			$this->layout = "default";
		}
		
	}

	function menuAdmin() {
		
    	
    	switch ($this->Auth->user('group_id')) {
    	
    	case '1' ;
    		$this->set("menu","echo $this->element('menuSuper')") ;
    		break;
    	case '2' ;
    		$this->set("menu","echo $this->element('menuCoordinator')")  ;
    		break;
    	case '3';
    		$this->set("menu","echo $this->element('menuFTO')" );
    		break;
    	case '4' ;
    		$this->set("menu","echo $this->element('menuPreceptor')") ;
    		break;
    			
    	case '5' ;
    		$this->set("menu","echo $this->element('menuTrainee')" );
    		break;
    			

    	}	
    	
    
	}
/** Check for expired Sessions
* 
*/
    function __expiredSession(){
        
        if($this->Session->check('Auth.User.id') == false) 
            { 
                $this->redirect('/'); 
                $this->Session->setFlash('Your session has expired.'); 
            } 
    }
}
?>