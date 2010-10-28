<?php
/* Documentation Test cases generated on: 2010-08-13 09:08:08 : 1281706448*/
App::import('Model', 'Documentation');

class DocumentationTestCase extends CakeTestCase {
	var $fixtures = array('app.documentation', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.comment', 'app.plan');

	function startTest() {
		$this->Documentation =& ClassRegistry::init('Documentation');
	}

	function endTest() {
		unset($this->Documentation);
		ClassRegistry::flush();
	}

}
?>