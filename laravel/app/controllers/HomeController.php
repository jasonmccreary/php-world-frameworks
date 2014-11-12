<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function showHello()
    {

        $message = Hello::getRandomMessage();
        $messageString = $message[0]->message;

        return View::make('message', compact('messageString'));
    }

}
