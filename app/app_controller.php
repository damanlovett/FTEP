<?php

class AppController extends Controller {
	
		var $components = array('Auth','Session');
		var $helpers = array('Html', 'Form', 'Javascript', 'Switches','Time','Session','Menu');
		//var $layout = 'default';
		
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
		
	if ($this->Auth->user('group_id') > '4') {
			$this->layout = 'trainee';
		} else {
			$this->layout = 'default';
		}
    }
	
    function isAuthorized() {
        if ($this->action == 'edit') {
            if ($this->Auth->user('group_id') < '4') {
                return true;
            } else {
                $this->Session->setFlash('You are not authorized to edit records.'); 
                return false;
            }
        }
        
    //
    //    if ($this->params['controller'] == 'observations') {
    //        if ($this->Auth->user('group_id') > '4') {
    //            $this->Session->setFlash('You are not authorized to edit records.'); 
    //            return false;
    //        } else {
    //            return true;
    //        }
    //    }
        
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
	
/** Record Activity
	
		function recordActivity()
		{
		
		// The following line makes this script work for CakePHP installations that use either mod_rewrite or CakePHP's own URL shortening tricks. 
		$pages = str_replace("/index.php",'', $_SERVER['PHP_SELF']);
		$pages = explode("/", $pages);
		
		// You will probably all reconise this, we are just getting all the values we need to store and assigning them to CakePHP. 
		$this->data['Home']['model'] = $pages[2];
		$this->data['Home']['action'] = $pages[3];
		$this->data['Home']['user_ip'] = $_SERVER['REMOTE_ADDR'];
		$this->data['Home']['user_browser'] = $_SERVER['HTTP_USER_AGENT'];
		$this->data['Home']['clicked_from'] = $_SERVER['HTTP_REFERER'];
		
		// $this->data['Home']['user_accessed'] = date("Y-m-d H:i:s");
		// In the original tutorial we manually added the date of the activity but I have sinced changed the DB schema.
		// Previously the datetime field we had was named 'user_activity'. It is now named 'created'. 
		// CakePHP knows to populate this field automatically by the name.
		
		// O.K, now we just need to call the insert query:
		$this->Home->save($this->data);
		
		// The following line is a fix by Termnial13 (thanks). It removes tracker stuffs from $this->data as it was causing some users issues.
		unset($this->data['Tracker']);
		
		}
*/


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