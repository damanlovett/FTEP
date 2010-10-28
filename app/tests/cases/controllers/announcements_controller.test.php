<?php
/* Announcements Test cases generated on: 2010-08-16 22:08:20 : 1282010420*/
App::import('Controller', 'Announcements');

class TestAnnouncementsController extends AnnouncementsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnnouncementsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.announcement', 'app.user', 'app.group', 'app.profile', 'app.observation', 'app.employee', 'app.comment', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Announcements =& new TestAnnouncementsController();
		$this->Announcements->constructClasses();
	}

	function endTest() {
		unset($this->Announcements);
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