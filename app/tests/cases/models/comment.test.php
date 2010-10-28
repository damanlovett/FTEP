<?php
/* Comment Test cases generated on: 2010-08-13 09:08:30 : 1281706530*/
App::import('Model', 'Comment');

class CommentTestCase extends CakeTestCase {
	var $fixtures = array('app.comment', 'app.observation', 'app.user', 'app.group', 'app.profile', 'app.employee', 'app.documentation', 'app.plan');

	function startTest() {
		$this->Comment =& ClassRegistry::init('Comment');
	}

	function endTest() {
		unset($this->Comment);
		ClassRegistry::flush();
	}

}
?>