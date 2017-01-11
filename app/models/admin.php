<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class admin extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $hidden = array('Password', 'Remember_token');
    
    public function getAuthPassword() {
        return $this->password;
    }

}
