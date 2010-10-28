<?php
/* Comments Test cases generated on: 2010-08-13 09:08:36 : 1281706656*/
App::import('Controller', 'Comments');

class TestCommentsController extends CommentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CommentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.comment', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Comments =& new TestCommentsController();
		$this->Comments->constructClasses();
	}

	function endTest() {
		unset($this->Comments);
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