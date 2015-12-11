<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'confirm' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'id' => '3',
			'username' => 'admin',
			'password' => '$2a$10$ND9oKB4xAIvdtpmOg0pSZeYorJiI5rAPLuIbgIc0W/RmTkpN0lVSq',
			'role' => 'admin',
			'email' => 'admin@admin.com',
			'created' => '2015-09-10',
			'modified' => '2015-09-10',
			'confirm' => ''
		),
		array(
			'id' => '4',
			'username' => 'profile1',
			'password' => '$2a$10$7z0cBE2unN0EvAVtM/JvJuQS32w4a1pME8koylSW.X38TXD9UXpoi',
			'role' => 'admin',
			'email' => 'profile1@profile1.com',
			'created' => '2015-09-10',
			'modified' => '2015-09-10',
			'confirm' => ''
		),
		array(
			'id' => '5',
			'username' => 'profile2',
			'password' => '$2a$10$hNy/MQdcHjV691BgQAU0q.JfZQ6Wgu0yz1J2Oe7rk.48vjmc45ve6',
			'role' => 'profile',
			'email' => 'profile2@profile2.com',
			'created' => '2015-09-10',
			'modified' => '2015-09-10',
			'confirm' => ''
		),
		array(
			'id' => '6',
			'username' => 'profile4',
			'password' => '$2a$10$4oqhhud.aVNsiZlvMfWLH.zLJSXGwGeKJyYLdLnRFpzbSej6Xuhu.',
			'role' => 'profile',
			'email' => 'profile4@profile4.com',
			'created' => '2015-09-10',
			'modified' => '2015-09-10',
			'confirm' => ''
		),
		array(
			'id' => '7',
			'username' => 'sosa',
			'password' => '$2a$10$5EgGZDh5Cr2xBCY6mEvOROWRSSOHVkHXNsCeMomU4y0BN6sxWyMmG',
			'role' => 'profile',
			'email' => 'sosa@sosa.com',
			'created' => '2015-09-17',
			'modified' => '2015-09-17',
			'confirm' => ''
		),
		array(
			'id' => '10',
			'username' => 's',
			'password' => '$2a$10$lKsC35ZG7vj06ZRSH91k6.mIExevAcWOWB33z5mmUhxm4zgR4qHVa',
			'role' => 'profile',
			'email' => 's@s.com',
			'created' => '2015-10-23',
			'modified' => '2015-10-23',
			'confirm' => '0'
		),
		array(
			'id' => '11',
			'username' => 'h',
			'password' => '$2a$10$QDITmLIRErS0A3WQjjrOFeCoB4fNecdQaXaKPTqjfB8HlBix0RRE.',
			'role' => 'utilisateur',
			'email' => 'prab16@gmail.com',
			'created' => '2015-10-23',
			'modified' => '2015-10-23',
			'confirm' => '1'
		),
		array(
			'id' => '12',
			'username' => 'y',
			'password' => '$2a$10$CAv3QzYbHCBH/gUFU.gfe.DQEXrhZSp4kHInP.ymwwNm.i1M6VPD.',
			'role' => 'utilisateur',
			'email' => 'prab16@gmail.com',
			'created' => '2015-10-23',
			'modified' => '2015-10-23',
			'confirm' => '0'
		),
		array(
			'id' => '13',
			'username' => 's',
			'password' => '$2a$10$yPNRSGz6SAto2JWYFLVOmecasTH6IYnKXQWIKLwJrKPkRJj1jswxm',
			'role' => 'utilisateur',
			'email' => 's@sp.com',
			'created' => '2015-10-30',
			'modified' => '2015-10-30',
			'confirm' => '0'
		),
		array(
			'id' => '14',
			'username' => 'x',
			'password' => '$2a$10$iHzelLoCTBFDpeHJCvLAwuDict3dRfFNRT63nCs1rqret/z9lZm/a',
			'role' => 'utilisateur',
			'email' => 'prab16@gmail.com',
			'created' => '2015-10-30',
			'modified' => '2015-10-30',
			'confirm' => '0'
		),
	);

}
