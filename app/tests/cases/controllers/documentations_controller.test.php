<?php
/* Documentations Test cases generated on: 2010-08-13 09:08:05 : 1281706685*/
App::import('Controller', 'Documentations');

class TestDocumentationsController extends DocumentationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DocumentationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.documentation', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.comment', 'app.plan');

	function startTest() {
		$this->Documentations =& new TestDocumentationsController();
		$this->Documentations->constructClasses();
	}

	function endTest() {
		unset($this->Documentations);
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