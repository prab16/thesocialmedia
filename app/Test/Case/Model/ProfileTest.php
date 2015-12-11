<?php

App::uses('Profile', 'Model');

/**
 * Profile Test Case
 */
class ProfileTest extends CakeTestCase {

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
        $this->Profile = ClassRegistry::init('Profile');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Profile);

        parent::tearDown();
    }

    public function testProcessImageUploadWithImage() {
        $valide = $this->Profile->processImageUpload(7);
        $this->assertTrue($valide);
    }

    public function testIsOwnedByUserOwnProfile() {
        $valide = $this->Profile->isOwnedBy(7, 3);

        // debug($fixtures);die();
        $this->assertTrue($valide);
    }

    public function testIsOwnedByUserNotOwnProfile() {
        $valide = $this->Profile->isOwnedBy(7, 4);

        // debug($fixtures);die();
        $this->assertFalse($valide);
    }



    public function testValidationEmailPasValide() {
        $postData = array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'infojamesfairhurst.co.uk',
            'user_id' => '3',
        );
        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();

        $this->assertFalse($result);
    }

    public function testValidationEmailValide() {
        $postData = array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' =>''
        );

        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();
        // il faut modifier les dates, les mettre à jour de la date d'aujourd'hui
        $this->assertEqual($result, array('Profile' => array(
                'name' => 'James Fairhurst',
                'lastName' => 'James Fairhurst',
                'email' => 'info@jamesfairhurst.co.uk',
                'user_id' => '3',
                'modified' => '2015-12-11',
                'created' => '2015-12-11',
                'id' => '8',
            'avatar' =>''
    )));
    }

    public function testValidationNomPasvide() {
        $postData = array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' =>''
        );

        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();

        $this->assertEqual($result, array('Profile' => array(
                'name' => 'James Fairhurst',
                'lastName' => 'James Fairhurst',
                'email' => 'info@jamesfairhurst.co.uk',
                'user_id' => '3',
                'modified' => '2015-12-11',
                'created' => '2015-12-11',
                'id' => '8',
            'avatar' =>''
        )));
    }

    public function testValidationNomvide() {
        $postData = array(
            'name' => '',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' =>''
        );
        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();

        $this->assertFalse($result);
    }

    public function testValidationCategoryValide() {
        $postData = array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' =>'',
            'category_id' => '1'
        );

        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();

        $this->assertEqual($result, array('Profile' => array(
                'name' => 'James Fairhurst',
                'lastName' => 'James Fairhurst',
                'email' => 'info@jamesfairhurst.co.uk',
                'category_id' => '1',
                'user_id' => '3',
                'modified' => '2015-12-11',
                'created' => '2015-12-11',
                'id' => '8',
            'avatar' =>''
        )));
    }

    public function testValidationCategoryVide() {
        $postData = array(
            'name' => '',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' =>'',
            'category_id' => ''
        );
        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();

        $this->assertFalse($result);
    }

    public function testValidationCategoryNonValide() {
        $postData = array(
            'name' => '',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' =>'',
            'category_id' => 'a'
        );
        $result = $this->Profile->save($postData);
        $invalidFields = $this->Profile->invalidFields();

        $this->assertFalse($result);
    }
    
        public function testFormWithEmptyFile() {
        // Build the data to save along with an empty file

        $data = array('Profile' =>array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' => array(
                'name' => '',
                'type' => '',
                'tmp_name' => '',
                'error' => 4,
                'size' => 0,
            )
        ));




        $anciendata = array('Contact' => array(
                'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
                'modified' => '2015-11-27',
                'created' => '2015-11-27',
                'id' => '8',
                'avatar' => array(
                    'name' => '',
                    'type' => '',
                    'tmp_name' => '',
                    'error' => 4,
                    'size' => 0,
                )
        ));

        // Attempt to save
        $result = $this->Profile->save($data);
        
        

        // Test successful insert
        $this->assertArrayHasKey('Profile', $result);
//debug($result); /*debug($entryCount);*/ die();
        // Get the count in the DB
        $result = $this->Profile->find('count', array(
            'conditions' => array(
                 'Profile.name' => 'James Fairhurst',
                'Profile.lastName' => 'James Fairhurst',
                'Profile.email' => 'info@jamesfairhurst.co.uk',
                'Profile.user_id' => '3',
                'Profile.modified' => '2015-12-3',
                'Profile.created' => '2015-12-3',
                'Profile.id' => '8',
            ),
        ));

        // Test DB entry
        $this->assertEqual($result, 1);
    }

    public function testFormWithValidFile() {
        // Create a stub for the Contact Model class
        $stub = $this->getMockForModel('Profile', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->once())
                ->method('is_uploaded_file')
                ->will($this->returnValue(TRUE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->once())
                ->method('move_uploaded_file')
                ->will($this->returnCallback('copy'));

          $data = array('Profile' =>array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' => array(
                    'name' => 'TestFile.jpg',
                    'type' => 'image/jpeg',
// modified with windows DS backslash
                    'tmp_name' => 'F:\UniformServer\UniServerZ\tmp\TestFile.jpg',
// original from tutorial
//    				'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.jpg',
                    'error' => (int) 0,
                    'size' => (int) 845941
                )
        ));
        
        
        
        // Build the data to save along with a sample file
       $Anciandata = array('Contact' => array(
                'name' => 'James Fairhurst',
                'email' => 'info@jamesfairhurst.co.uk',
                'message' => 'Test File Upload',
                'filename' => array(
                    'name' => 'TestFile.jpg',
                    'type' => 'image/jpeg',
// modified with windows DS backslash
                    'tmp_name' => 'F:\UniformServer\UniServerZ\tmp\TestFile.jpg',
// original from tutorial
//    				'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.jpg',
                    'error' => (int) 0,
                    'size' => (int) 845941
                )
        ));

        // Attempt to save
        $result = $stub->save($data);
debug($result);die();
        // Test successful insert
        $this->assertArrayHasKey('Profile', $result);

        // Get the count in the DB
        $entryCount = $this->Profile->find('count', array(
            'conditions' => array(
                'Profile.name' => 'James Fairhurst',
                'Profile.lastName' => 'James Fairhurst',
                'Profile.email' => 'info@jamesfairhurst.co.uk',
                'Profile.user_id' => '3',
                'Profile.modified' => '2015-12-3',
                'Profile.created' => '2015-12-3',
                'Profile.id' => '8',
                'avatar' => 'uploads/TestFile.jpg'
            )
        ));
// debug($result); debug($entryCount); die();
        // Test DB entry
        $this->assertEqual($entryCount, 1);

        // Test uploaded file exists
        $this->assertFileExists(WWW_ROOT . 'uploads' . DS . 'TestFile.jpg');
    }

    public function testFormWithInvalidFile() {
        // Create a stub for the Contact Model class
        $stub = $this->getMock('Profile', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())
                ->method('is_uploaded_file')
                ->will($this->returnValue(TRUE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())
                ->method('move_uploaded_file')
                ->will($this->returnCallback('copy'));

        // Build the data to save along with a sample file
        $data = array('Profile' =>array(
            'name' => 'James Fairhurst',
            'lastName' => 'James Fairhurst',
            'email' => 'info@jamesfairhurst.co.uk',
            'user_id' => '3',
            'avatar' => array(
                    'name' => 'TestFile.txt',
                    'type' => 'text/plain',
                    'tmp_name' => 'F:\UniformServer\UniServerZ\tmp\TestFile.txt',
                    'error' => 0,
                    'size' => 19,
                )
        ));

        // Attempt to save
        $result = $stub->save($data);

        // Test failure
        $this->assertFalse($result);

        // Test uploaded file does not exists
        $this->assertFileNotExists(WWW_ROOT . 'uploads' . DS . 'TestFile.txt');
    }

}
