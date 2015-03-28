<?php namespace App\Models\Admin;
use SleepingOwl\Models\SleepingOwlModel;
class Contact extends  SleepingOwlModel {

protected $table = 'contact';
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['name', 'email', 'message'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $hidden = [];

}
