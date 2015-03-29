<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Contracts\View\Factory;
use Config;
use \Request;

class CategoryController extends Controller {

    public function index($code) {
        $category = Category::where('code', $code)
                ->where('is_active', 1)
                ->find(1);
        if(!$category) {
          //rediect 404  
        }
        //lay danh sach bai viet cua chuyen muc phan trang
        $articles = Article::where('category_id', $category->id)
                ->where('is_active', 2)
                ->orderBy('published_time')
                ->paginate(3);
        view()->share('articles', $articles);
        view()->share('category', $category);
        if (Request::ajax()) {
            return view('frontend.category.articleList');
        }
        return view('frontend.category.index');
    }

}