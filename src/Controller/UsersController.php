<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public $components = [
        //'Auth',
    ];
    public function initialize1()
    {
        //$this->viewBuilder()->layout(false);
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Groups']
        ];
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Countries', 'Groups', 'Orders']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $countries = $this->Users->Countries->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'countries', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $countries = $this->Users->Countries->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'countries', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

     /**
     * login page
     * @return redirect to dashboard
     */
    public function login()
    {//debug($this->request);die();
        /*if (!$this->Auth->identify ()) {
            $this->redirect('#core/login');
        }*/
        /*$routes->redirect(
            '/home/*',
            ['controller' => 'Users', 'action' => ''],
            ['persist' => true]
            // Or ['persist'=>['id']] for default routing where the
            // view action expects $id as an argument.
        );
        die();*/
        /*$this->set('title_for_layout', 'Users Login');
        
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Email or password is incorrect'), 'default', [], 'auth');
            }
        }
        
        if ($this->Auth->user()) {
            if ($this->Session->read(SESS_KEY_APP_PREFIX . '.' . 'User.urlRedirect')) {
                $urlRedirect = $this->Session->read(SESS_KEY_APP_PREFIX . '.' . 'User.urlRedirect');
                $this->Session->delete(SESS_KEY_APP_PREFIX . '.' . 'User.urlRedirect');
                return $this->redirect($urlRedirect);
            } else {
                return $this->redirect($this->Auth->redirectUrl());
            }
        }*/
        //$this->viewBuilder()->layout('false');
        $this->set('login', true);
        //$this->render("/Pages/home");
        
    }
}
