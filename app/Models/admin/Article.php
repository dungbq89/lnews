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
    protected $fillable = ['title', 'alttitle', 'header', 'body', 'category_id', 'is_active', 'image_path'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function getImageFields() {
        return [
            'image_path' => 'uploads/articles/'
        ];
    }

    public function setImage($field, $image) {
        parent::setImage($field, $image);
        $file = $this->$field;
        if (!$file->exists())
            return;
        $path = $file->getFullPath();

        // you can use Intervention Image package features to change uploaded image
        Image::make($path)->resize(10, 10)->save();
    }

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
