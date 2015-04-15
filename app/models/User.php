<?php


class User extends Eloquent {

	//protected $table = 'users';

	public $timestamps = true;
	protected $fillable = array('email','password','user_type');

}
