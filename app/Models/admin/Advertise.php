<?php

namespace App\Models\Admin;

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;

class Advertise extends SleepingOwlModel implements ModelWithImageFieldsInterface {

    protected $table = 'advertise';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image_path', 'location_type', 'link', 'priority', 'is_active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function getImageFields() {
        return [
            'image_path' => 'uploads/advertise/'
        ];
    }

    public static function boot() {
        parent::boot();
    }

}
