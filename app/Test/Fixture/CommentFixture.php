<?php
/**
 * Comment Fixture
 */
class CommentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'network_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'comment' => 'sosa',
			'profile_id' => '3',
			'network_id' => '1'
		),
		array(
			'id' => '2',
			'comment' => 'commentaire',
			'profile_id' => '3',
			'network_id' => '8'
		),
		array(
			'id' => '3',
			'comment' => 'sa',
			'profile_id' => '3',
			'network_id' => '21'
		),
	);

}
