<?php
/* Announcement Test cases generated on: 2010-08-16 21:08:38 : 1282010378*/
App::import('Model', 'Announcement');

class AnnouncementTestCase extends CakeTestCase {
	var $fixtures = array('app.announcement', 'app.user', 'app.group', 'app.profile', 'app.observation', 'app.employee', 'app.comment', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Announcement =& ClassRegistry::init('Announcement');
	}

	function endTest() {
		unset($this->Announcement);
		ClassRegistry::flush();
	}

}
?>