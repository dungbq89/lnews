<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Contracts\View\Factory;
use Config;

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
                ->paginate(10);
//        if (Request::ajax()) {
//            return Response::json(View::make('posts', array('posts' => $articles))->render());
//        }
        view()->share('articles', $articles);
        view()->share('category', $category);
        return view('frontend.category.index');
    }

}