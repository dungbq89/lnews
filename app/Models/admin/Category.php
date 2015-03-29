<?php

namespace App\Models\Admin;

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;

class Category extends SleepingOwlModel implements ModelWithImageFieldsInterface {

    //
    protected $table = 'category';

    public function getImageFields() {
        return [
            'image' => 'monuments/',
            'photo' => '',
            'other' => ['other_images/', function($directory, $originalName, $extension) {
            return $originalName;
        }]
        ];
    }

    protected $fillable = ['name_vi', 'description', 'is_active'];

}
