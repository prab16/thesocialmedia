<?php

App::uses('AppController', 'Controller');

/**
 * Profiles Controller
 *
 * @property Profile $Profile
 * @property PaginatorComponent $Paginator
 */
class ProfilesController extends AppController {

    public $helpers = array('Js');
    
    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Profile->recursive = 1;
        $this->set('profiles', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Profile->exists($id)) {
            throw new NotFoundException(__('Invalid profile'));
        }
        $options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
        $this->set('profile', $this->Profile->find('first', $options));
        $profile = $this->Profile->find('first', $options);
        $stateId = $profile['Profile']['state_id'];
        $stateSelected = $this->Profile->State->findById($stateId);
        $countryId = $stateSelected['State']['country_id'];
        $countrySelected = $this->Profile->State->Country->findById($countryId);
        //debug($countrySelected);die();
        $countryName = $countrySelected['Country']['name'];
        $this->set('country', $countryName);
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Profile->create();
            $this->request->data['Profile']['user_id'] = $this->Auth->user('id');
            $data = $this->request->data['Profile'];
            if($data['state_id'] == 0){
                $data['state_id'] = null;
            }
            if (!$data['avatar']['name']){
                unset($data['avatar']);
            }
            if ($this->Profile->save($data)) {
                $this->Session->setFlash(__('The profile has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The profile could not be saved. Please, try again.'), 'flash/error');
            }
        }
        $categories = $this->Profile->Category->find('list');
        $users = $this->Profile->User->find('list');
        $activities = $this->Profile->Activity->find('list');
        $countries = $this->Profile->State->Country->find('list');
        $states = array('choisir categorie');
        $this->set(compact('categories', 'users', 'activities', 'countries', 'states'));
      
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {

        $this->Profile->id = $id;
        if (!$this->Profile->exists($id)) {
            throw new NotFoundException(__('Invalid profile'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $data = $this->request->data['Profile'];
            if (!$data['avatar']['name']){
                unset($data['avatar']);
            }
            if ($this->Profile->save($data)) {
                $this->Session->setFlash(__('The profile has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The profile could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
            $this->request->data = $this->Profile->find('first', $options);
        }
        $categories = $this->Profile->Category->find('list');
        $users = $this->Profile->User->find('list');
        $activities = $this->Profile->Activity->find('list');
        $countries = $this->Profile->State->Country->find('list');
        $states = $this->Profile->State->find('list');
        $stateId = $this->request->data['Profile']['state_id'];
        $stateSelected = $this->Profile->State->findById($stateId);
        $countryId = $stateSelected['State']['country_id'];
        $countrySelected = $this->Profile->State->Country->findById($countryId);
        $this->set(compact('categories', 'users', 'activities', 'countries','countrySelected', 'states'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Profile->id = $id;
        if (!$this->Profile->exists()) {
            throw new NotFoundException(__('Invalid profile'));
        }
        if ($this->Profile->delete()) {
            $this->Session->setFlash(__('Profile deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Profile was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete')) ) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Profile->isOwnedBy($postId, $user['id'])) {
               if ($this->Session->read('Auth.User.confirm') == "1") {
                return true;
               }
            }
        }

        return parent::isAuthorized($user);
    }

}
