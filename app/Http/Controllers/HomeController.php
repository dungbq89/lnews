<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Contracts\View\Factory;
use Config;
use \Cache;

class HomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
//		$this->middleware('auth');
    }

    public function home() {
        if (!Cache::has('home_articleByCat')) {
            $category = Category::where('is_active', 1)
                    ->orderBy('created_at')
                    ->take(Config::get('constants.CAT_NUMBER_HOMEPAGE', 4))
                    ->get();
            $articleByCat = array();
            foreach ($category as $cat) {
                $articleByCat[$cat->name_vi] = Article::where('category_id', $cat->id)
                        ->where('is_active', 2)
                        ->where('published_time', '<', date('Y-m-d H:i:s', time()))
                        ->orderBy('published_time')
                        ->take(9)
                        ->get();
            }
            Cache::put('home_articleByCat', $articleByCat, Config::get('constants.CACHE_TIME', 3));
        } else {
            $articleByCat = Cache::get('home_articleByCat', array());
        }
        view()->share('articleByCat', $articleByCat);
        return view('frontend.default.home');
    }

}
