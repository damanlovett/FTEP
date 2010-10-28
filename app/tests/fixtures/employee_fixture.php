<?php
/* Employee Fixture generated on: 2010-08-13 00:08:15 : 1281672195 */
class EmployeeFixture extends CakeTestFixture {
	var $name = 'Employee';
	var $table = 'users';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'group_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
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
			'id' => '4c64c403-6af0-44ac-8cc5-0270fd7837ec',
			'group_id' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'admin' => 1,
			'created' => '2010-08-13 00:03:15',
			'modified' => '2010-08-13 00:03:15',
			'first_name' => 'Lorem ipsum dolor ',
			'last_name' => 'Lorem ipsum dolor '
		),
	);
}
?>