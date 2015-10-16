<?php

App::uses('AppModel', 'Model');

/**
 * Comment Model
 *
 * @property Profile $Profile
 * @property Network $Network
 */
class Comment extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'comment';
    
     public Function beforeSave($options = array()) {
       $resulat = $this->Network->findByTitle('networkName');
        if (isset($resulat->data[$this->alias]['id'])) {
        
        }
    }

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'comment' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'profile_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'network_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
//        'getNetworksNames' => array(
//               'rule' => 'getNetworkNames',
//               'message' => 'Something went wrong processing your file',
//               // 'allowEmpty' => TRUE,
//           ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Profile' => array(
            'className' => 'Profile',
            'foreignKey' => 'profile_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Network' => array(
            'className' => 'Network',
            'foreignKey' => 'network_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    
     public function getNetworkNames($term = null) {
        if (!empty($term)) {
            $networkNames = $this->Network->find('list', array(
                'conditions' => array(
                    'title =' => trim($term) 
                )
            ));
                     
        return true;
        }
        return false;
    }

    

}
