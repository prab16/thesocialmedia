<?php
App::uses('Network', 'Model');

/**
 * Network Test Case
 */
class NetworkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.network'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Network = ClassRegistry::init('Network');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Network);

		parent::tearDown();
	}

/**
 * testGetNetworkNames method
 *
 * @return void
 */
	

        public function testGetNetworkNamesWithOneLetterAndThreeHits() {
                $testNetworkNames = $this->Network->getNetworkNames("T");
              //  debug($testNetworkNames);die();
                $this->assertEqual($testNetworkNames, array("5" => "Tencent QQ", "6" => "Tencent Qzone", "9" => "Twitter"));
	}
           public function testGetNetworkNamesWithOneLetterAndOneHit() {
                $testNetworkNames = $this->Network->getNetworkNames("S");
              //  debug($testNetworkNames);die();
                $this->assertEqual($testNetworkNames, array("8" => "Skype"));
	}
         public function testGetNetworkNamesWithWrongLetterAndZeroHit() {
                $testNetworkNames = $this->Network->getNetworkNames("D");
                //debug($testNetworkNames);die();
                  $this->assertEqual($testNetworkNames, array());
	}
         public function testGetNetworkNamesWithTwoLetterAndOneHit() {
                $testNetworkNames = $this->Network->getNetworkNames("fa");
              //  debug($testNetworkNames);die();
                $this->assertEqual($testNetworkNames, array("1" => "facebook"));
	}
        public function testGetNetworkNamesWithNoLetterAndZeroHit() {
                $testNetworkNames = $this->Network->getNetworkNames("");
               // debug($testNetworkNames);die();
                $this->assertFalse($testNetworkNames);
	}
}
