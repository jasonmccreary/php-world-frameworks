<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Hello extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

    public static function getRandomMessage()
    {
        return Hello::orderByRaw("RAND()")->take(1)->get();
    }


}
