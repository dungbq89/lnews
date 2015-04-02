<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'article';

    //get article detail by code

    public static function getArticleByCode($code) {
        return Article::where('code', '=', $code)
                        ->where('is_active', '=', 1)
                        ->first();
    }

    //lay danh sach bai viet random
    public static function getArticleRandom($limit){
        return Article::where('is_active', '=', 1)
            ->limit($limit)
            ->get();
    }
    
}
