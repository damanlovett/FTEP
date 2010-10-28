<?php
/* Plan Test cases generated on: 2010-08-13 09:08:26 : 1281706586*/
App::import('Model', 'Plan');

class PlanTestCase extends CakeTestCase {
	var $fixtures = array('app.plan', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.comment', 'app.documentation');

	function startTest() {
		$this->Plan =& ClassRegistry::init('Plan');
	}

	function endTest() {
		unset($this->Plan);
		ClassRegistry::flush();
	}

}
?>