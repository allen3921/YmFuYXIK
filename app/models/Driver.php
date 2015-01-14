<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class Driver extends Eloquent implements RemindableTrait{

    use RemindableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'driver';
    protected $hidden = array('password');
    protected $fillable = array('username','email','password','active');

    public function getRememberToken(){
            return $this->rememberToken ;
    }
    public function setRememberToken($value){
        $this->rememberToken = $value ;
    }
    public function getRememberTokenName(){
        return $this->reminder ;
    }
}
