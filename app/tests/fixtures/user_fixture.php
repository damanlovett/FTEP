<?php
/* User Fixture generated on: 2010-07-25 17:07:31 : 1280091631 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'admin' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4c4ca5ef-2634-4fdc-b512-19c0fd7837ec',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'admin' => 1,
			'created' => '2010-07-25 17:00:31',
			'modified' => '2010-07-25 17:00:31',
			'first_name' => 'Lorem ipsum dolor ',
			'last_name' => 'Lorem ipsum dolor '
		),
	);
}
?>