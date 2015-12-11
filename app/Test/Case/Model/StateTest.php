<?php
App::uses('State', 'Model');

/**
 * State Test Case
 */
class StateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state',
		'app.country',
		'app.profile',
		'app.category',
		'app.user',
		'app.comment',
		'app.network',
		'app.activity',
		'app.profiles_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->State = ClassRegistry::init('State');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->State);

		parent::tearDown();
	}
        
        public function testGetStatesByCountryAndTwoHits() {
        $result = $this->State->getStatesByCountry(2);
//            debug($result); die();
        $expected = array(
            (int) 6 => 'Kentucky',
            (int) 7 => 'Virginia'
        );
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }
    public function testGetStatesByCountryAndNoHit() {
        $result = $this->State->getStatesByCountry(3);
//            debug($result); die();
        $expected = array();
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }
     public function testGetStatesByCountryWithNothing() {
        $result = $this->State->getStatesByCountry();
//            debug($result); die();
        $expected = array();
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }

}
