<?php
/* Group Test cases generated on: 2010-08-16 21:08:17 : 1282009337*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.profile', 'app.observation', 'app.employee', 'app.comment', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
?>