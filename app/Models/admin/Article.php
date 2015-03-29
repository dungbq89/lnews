<?php

namespace App\Models\Admin;

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class Article extends SleepingOwlModel implements ModelWithImageFieldsInterface {
    use ModelWithImageOrFileFieldsTrait;
    protected $table = 'article';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'alttitle', 'header', 'body', 'category_id', 'is_active', 'image_path'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];


    public function getImageFields() {
        return []; 
        
    }

}
