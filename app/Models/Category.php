<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
    protected $table = 'category';

    //get menu

    public static function getMenu($limit)
    {
        return Category::where('is_active', '=', 1)
            ->orderBy('priority', 'desc')
            ->limit($limit)
            ->get();
    }
}   
