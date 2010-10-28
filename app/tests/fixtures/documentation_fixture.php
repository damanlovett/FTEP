<?php
/* Documentation Fixture generated on: 2010-08-13 09:08:08 : 1281706448 */
class DocumentationFixture extends CakeTestFixture {
	var $name = 'Documentation';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'observation_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'doc_area' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'most_satisfactory' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'least_satisfactory' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'e_comments' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'ob_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4c6549d0-3314-47e0-a123-1d24fd7837ec',
			'observation_id' => 'Lorem ipsum dolor sit amet',
			'doc_area' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'most_satisfactory' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'least_satisfactory' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'e_comments' => 'Lorem ipsum dolor sit amet',
			'ob_date' => '2010-08-13',
			'created' => '2010-08-13 09:34:08',
			'modified' => '2010-08-13 09:34:08'
		),
	);
}
?>