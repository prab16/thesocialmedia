<?php
/**
 * State Fixture
 */
class StateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 'Quebec',
			'country_id' => '1'
		),
		array(
			'id' => '2',
			'name' => 'Ontario',
			'country_id' => '1'
		),
		array(
			'id' => '3',
			'name' => 'Alberta',
			'country_id' => '1'
		),
		array(
			'id' => '4',
			'name' => 'Brirtish-Colombia',
			'country_id' => '1'
		),
		array(
			'id' => '5',
			'name' => 'Manitoba',
			'country_id' => '1'
		),
		array(
			'id' => '6',
			'name' => 'Kentucky',
			'country_id' => '2'
		),
		array(
			'id' => '7',
			'name' => 'Virginia',
			'country_id' => '2'
		),
		
	);

}
