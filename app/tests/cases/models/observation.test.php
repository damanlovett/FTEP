<?php
/* Observation Test cases generated on: 2010-08-13 09:08:18 : 1281706398*/
App::import('Model', 'Observation');

class ObservationTestCase extends CakeTestCase {
	var $fixtures = array('app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.comment', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Observation =& ClassRegistry::init('Observation');
	}

	function endTest() {
		unset($this->Observation);
		ClassRegistry::flush();
	}

}
?>