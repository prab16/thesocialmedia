<?php
/**
 * ProfilesActivity Fixture
 */
class ProfilesActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'id' => '1',
			'profile_id' => '3',
			'activity_id' => '2'
		),
		array(
			'id' => '2',
			'profile_id' => '3',
			'activity_id' => '3'
		),
	);

}
