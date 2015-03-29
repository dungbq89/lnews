<?php

namespace App\Models\Admin;

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;

class Article extends SleepingOwlModel implements ModelWithImageFieldsInterface {

    protected $table = 'article';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'alttitle', 'header', 'body', 'category_id', 'is_active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function getImageFields() {
        return [
            'image' => 'images/uploads/article/',
            'photo' => '',
            'other' => ['images/uploads/article/', function($directory, $originalName, $extension) {
            return $originalName;
        }]
        ];
    }

}
