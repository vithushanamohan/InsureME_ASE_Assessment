<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class UserDetail extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'userdetails';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','date of birth','role','department'
    ];
}