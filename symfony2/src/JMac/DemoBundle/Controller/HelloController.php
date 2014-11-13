<?php

namespace JMac\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction()
    {
        $message = $this->getDoctrine()
            ->getRepository('JMacDemoBundle:Message')
            ->find(2);

        return $this->render('JMacDemoBundle:Hello:index.html.php', array('message' => $message));
    }
}
