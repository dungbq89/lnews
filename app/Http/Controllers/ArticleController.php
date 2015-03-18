<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
class ArticleController extends Controller {
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

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function detail($code) {
        $article = Article::getArticleByCode($code);
        if($article){
            return view('frontend.article.detail', array('article'=>$article));
        }
        else{
            return Redirect::route('error404');
        }
        
    }

}
