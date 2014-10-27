<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    /**
     *
     */
    public function index()
    {
        $users = $this->paginate();
        $this->set(compact('users'));
    }

    /**
     *
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->_postadd($this->request->data);
        }

    }

    /**
     * @param $data
     */
    private function _postadd($data)
    {

        if ($this->User->save($data)) {
            $this->Session->setFlash('ユーザーの保存に成功しました。');
        } else {
            $this->Session->setFlash('ユーザーの保存に失敗しました。');
        }

        $this->redirect([
            'action' => 'login'
        ]);
    }

    /**
     *
     */
    public function login()
    {
        if ($this->request->is('post')) {
            $this->_postlogin($this->request->data);
        }
    }

    private function _postlogin($data)
    {
        if ($this->Auth->login($data)) {
            //ログイン完了
            $this->redirect('/');
        }

        //ログイン失敗
        $this->Session->setFlash('ログインに失敗しました。再度ログインを試してください。');
    }

    public function logout()
    {
        if ($this->request->is('post')) {
            $this->_postlogout($this->request->data);
        }
    }

    private function _postlogout($data)
    {
        $this->Auth->logout($data);
        $this->redirect([
            'action' => 'login'
        ]);
    }

    /**
     *
     */
    public function profile()
    {

    }

    /**
     *
     */
    public function edit()
    {

    }

}
