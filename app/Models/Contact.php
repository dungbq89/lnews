<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

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
