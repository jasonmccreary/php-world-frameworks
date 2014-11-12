<?php
class HelloController extends \Phalcon\Mvc\Controller {
    public function indexAction() {
        $message = Message::findFirst(2);

        $this->view->setVar('message', $message);
    }
}