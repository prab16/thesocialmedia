<?php

App::uses('AppController', 'Controller');

/**
 * States Controller
 *
 * @property State $State
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class StatesController extends AppController {

    /**
     * Components
     *[Profile][crountry_id] 
     * [Profile][state_id]
     * @var array
     */
    public function getByCountry() {
        $country_id = $this->request->data['Profile']['country_id'];

        $states = $this->State->find('list', array(
            'conditions' => array('State.country_id' => $country_id),
            'recursive' => -1
        ));

        $this->set('states', $states);
        $this->layout = 'ajax';
    }

}
