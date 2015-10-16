<?php

App::uses('AppController', 'Controller');

/**
 * Networks Controller
 *
 * @property Network $Network
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NetworksController extends AppController {

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
       
            $this->Network->recursive = 1;
            $this->set('networks', $this->paginate());
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Network->exists($id)) {
            throw new NotFoundException(__('Invalid network'));
        }
        $options = array('conditions' => array('Network.' . $this->Network->primaryKey => $id));
        $this->set('network', $this->Network->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Network->create();
            $this->request->data['Profile']['user_id'] = $this->Auth->user('id');
            if ($this->Network->save($this->request->data)) {
                $this->Session->setFlash(__('The network has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The network could not be saved. Please, try again.'), 'flash/error');
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Network->id = $id;
        if (!$this->Network->exists($id)) {
            throw new NotFoundException(__('Invalid network'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Network->save($this->request->data)) {
                $this->Session->setFlash(__('The network has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The network could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Network.' . $this->Network->primaryKey => $id));
            $this->request->data = $this->Network->find('first', $options);
        }
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
        $this->Network->id = $id;
        if (!$this->Network->exists()) {
            throw new NotFoundException(__('Invalid network'));
        }
        if ($this->Network->delete()) {
            $this->Session->setFlash(__('Network deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Network was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

}
