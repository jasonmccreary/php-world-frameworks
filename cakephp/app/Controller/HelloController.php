<?php
App::uses('Controller', 'Controller');

class HelloController extends Controller {
    public $uses = array('Message');

    public function index() {
        $message = $this->Message->findById(2);

        $this->set('message', $message);
    }
}