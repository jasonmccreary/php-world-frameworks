<?php
class HelloController extends \Phalcon\Mvc\Controller {
    public function indexAction() {
        $message = Message::findFirst(array('order' => 'RAND()'));

        $this->view->setVar('message', $message);
    }
}