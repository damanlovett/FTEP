<?php
/* Plans Test cases generated on: 2010-08-13 09:08:39 : 1281706779*/
App::import('Controller', 'Plans');

class TestPlansController extends PlansController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlansControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.plan', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.comment', 'app.documentation');

	function startTest() {
		$this->Plans =& new TestPlansController();
		$this->Plans->constructClasses();
	}

	function endTest() {
		unset($this->Plans);
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