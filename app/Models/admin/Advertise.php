<?php namespace App\Models\Admin;
use SleepingOwl\Models\SleepingOwlModel;
class Advertise extends  SleepingOwlModel {

protected $table = 'advertise';
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['name', 'location_type', 'is_active'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $hidden = [];

}
