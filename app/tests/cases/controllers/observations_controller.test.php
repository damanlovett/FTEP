<?php
/* Observations Test cases generated on: 2010-08-13 09:08:15 : 1281706755*/
App::import('Controller', 'Observations');

class TestObservationsController extends ObservationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ObservationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.comment', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Observations =& new TestObservationsController();
		$this->Observations->constructClasses();
	}

	function endTest() {
		unset($this->Observations);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>