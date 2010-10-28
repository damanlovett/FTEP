<?php
/* Employee Test cases generated on: 2010-08-13 00:08:15 : 1281672195*/
App::import('Model', 'Employee');

class EmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.documentation');

	function startTest() {
		$this->Employee =& ClassRegistry::init('Employee');
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
?>