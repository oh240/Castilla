<?php
App::uses('AppController', 'Controller');

/**
 * Rooms Controller
 *
 */
class RoomsController extends AppController
{

    public $uses = ['User', 'Room', 'Voice'];

    public function beforeFilter()
    {
        parent::beforeFilter();
        $rooms = $this->Room->find('all');
        $this->set(compact('rooms'));
    }

    /**
     * インデックスページ
     */
    public function index()
    {

    }

    /**
     * ルームの追加処理
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->_postadd($this->request->data);
        }
    }

    private function _postadd($data)
    {
        $data['Room']['user_id'] = $this->Session->read('Auth.User.id');

        if ($this->Room->save($data)) {
            $this->Session->setFlash('ルームの作成に成功しました');
        } else {
            $this->Session->setFlash('ルームの作成に失敗しました');
        }

        $this->redirect([
            'action' => 'index'
        ]);
    }

    /**
     * 各ルーム画面
     * @param $room_id
     */
    public function view($room_id = null)
    {
        if (!$room_id) {
            $current_room = $this->Room->find('first', [
                'conditions' => [
                    'Room.id' => 1,
                ],
                'recursive' => -1,
            ]);
        } else {
            $current_room = $this->Room->find('first', [
                'conditions' => [
                    'Room.id' => $room_id,
                ],
                'recursive' => -1,
            ]);
        }

        $voices = $this->Voice->find('all', [
            'conditions' => [
                'Voice.room_id' => $current_room['Room']['id']
            ]
        ]);

        $this->set(compact('current_room', 'voices'));

    }

    /**
     * 編集画面
     * @param $room_id
     */
    public function edit($room_id)
    {

    }

}
