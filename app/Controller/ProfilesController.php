<?php

App::uses('AppController', 'Controller');

/**
 * Profiles Controller
 *
 * @property Profile $Profile
 * @property PaginatorComponent $Paginator
 */
class ProfilesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

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
            if (!$data['avatar']['name']){
                unset($data['avatar']);
            }
            if ($this->Profile->save($this->request->data)) {
                $this->Session->setFlash(__('The profile has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The profile could not be saved. Please, try again.'), 'flash/error');
            }
        }
        $categories = $this->Profile->Category->find('list');
        $users = $this->Profile->User->find('list');
        $activities = $this->Profile->Activity->find('list');
        $this->set(compact('categories', 'users', 'activities'));
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
            if ($this->Profile->save($this->request->data)) {
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
        $this->set(compact('categories', 'users', 'activities'));
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
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Profile->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

}
