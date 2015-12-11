<?php
/**
 * Network Fixture
 */
class NetworkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'title' => 'facebook'
		),
		array(
			'id' => '2',
			'title' => 'gmail'
		),
		array(
			'id' => '3',
			'title' => 'myspace'
		),
		array(
			'id' => '5',
			'title' => 'Tencent QQ'
		),
		array(
			'id' => '6',
			'title' => 'Tencent Qzone'
		),
		array(
			'id' => '7',
			'title' => 'Google+'
		),
		array(
			'id' => '8',
			'title' => 'Skype'
		),
		array(
			'id' => '9',
			'title' => 'Twitter'
		),
		array(
			'id' => '10',
			'title' => 'Line'
		),
		array(
			'id' => '11',
			'title' => 'RenRen'
		),
	);

}
