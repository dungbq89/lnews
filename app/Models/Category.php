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
    //lay danh sach the loai cho admin
    public static function getList() {
        $category =  Category::where('is_active', '=', 1)
            ->orderBy('priority', 'desc')
            ->get();
        $return = array();
        foreach($category as $cat) {
            $return[$cat->id] = $cat->name_vi;
        }
        return $return;
    }

//    public static function findById($id){
//        return Category::findById($id);
//    }
}   
