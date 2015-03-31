<?php

namespace App\Models\Admin;

use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use Illuminate\Support\Str;

class Category extends SleepingOwlModel implements ModelWithImageFieldsInterface {

    //
    protected $table = 'category';

    public function getImageFields() {
        return [
            'image_path' => 'uploads/category/'
        ];
    }

    protected $fillable = ['name_vi', 'description', 'is_active', 'code'];

    public static function boot() {
        parent::boot();

        static::creating(function($post) {
            //$post->code = 
            $slug = Str::slug($post->name_vi);
            $slugCount = count(static::whereRaw("code REGEXP '^{$slug}(-[0-9]*)?$'")->get());

            $post->code = ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
            return $post;
        });
    }

}
