<?php
/* Comment Fixture generated on: 2010-08-13 09:08:30 : 1281706530 */
class CommentFixture extends CakeTestFixture {
	var $name = 'Comment';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'observation_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'employee_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'month' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25),
		'comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4c654a22-631c-461e-a71c-1f1cfd7837ec',
			'observation_id' => 'Lorem ipsum dolor sit amet',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'employee_id' => 'Lorem ipsum dolor sit amet',
			'month' => 'Lorem ipsum dolor sit a',
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2010-08-13 09:35:30',
			'modified' => '2010-08-13 09:35:30'
		),
	);
}
?>