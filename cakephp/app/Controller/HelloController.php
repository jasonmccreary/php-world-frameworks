<?php
App::uses('Controller', 'Controller');

class HelloController extends Controller {
    public $uses = array('Message');

    public function index() {
        $message = $this->Message->find('first', array('order' => 'RAND()'));

        $this->set('message', $message);
    }
}