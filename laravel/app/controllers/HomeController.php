<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function showHello()
    {
        $message = Hello::find(2);

        return View::make('message', compact('message'));
    }

}
