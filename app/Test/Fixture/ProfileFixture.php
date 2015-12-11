<?php
/**
 * Profile Fixture
 */
class ProfileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lastName' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'avatar' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		//'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		//'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '7',
			'name' => 'sosa',
			'lastName' => 'sosa',
			'email' => 'sosa@sosa.com',
			'avatar' => 'uploads/index.png',
			//'category_id' => '1',
			'user_id' => '3',
			'created' => '2015-10-08',
			'modified' => '2015-10-23'//,
			//'state_id' => '2'
		),
		/**array(
			'id' => '15',
			'name' => 'd',
			'lastName' => 'd',
			'email' => 'dd@dd.com',
			'avatar' => '',
			'category_id' => '1',
			'user_id' => '3',
			'created' => '2015-10-23',
			'modified' => '2015-10-23',
			'state_id' => '8'
		),
		array(
			'id' => '16',
			'name' => 's',
			'lastName' => 's',
			'email' => 's@s.com',
			'avatar' => '',
			'category_id' => '2',
			'user_id' => '3',
			'created' => '2015-10-30',
			'modified' => '2015-10-30',
			'state_id' => '9'
		),
		array(
			'id' => '17',
			'name' => 's',
			'lastName' => 's',
			'email' => 's@s.com',
			'avatar' => 'uploads/Desert.jpg',
			'category_id' => '1',
			'user_id' => '3',
			'created' => '2015-10-30',
			'modified' => '2015-10-30',
			'state_id' => '6'
		),*/
	);

}
