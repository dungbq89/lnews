<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Category;
use App\Models\Article;

class FooterComposer {
//    protected $param;

    /**
     * Create a new  composer.
     * @return void
     */
    public function __construct() {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        // Code here
        $recentPost = Article::where('is_active', 2)
                ->where('published_time', '<', date('Y-m-d H:i:s', time()))
                ->orderBy('published_time')
                ->take(3)
                ->get();
        $view->with('recentPost', $recentPost);
        $bestReview = Article::where('article.is_active', 2)
                ->leftJoin('category', function($join) {
                            $join->on('article.category_id', '=', 'category.id');
                        })
                ->where('article.published_time', '<', date('Y-m-d H:i:s', time()))
                ->orderBy('article.hit_count')
                ->take(3)
                ->get();
        $view->with('bestReview', $bestReview);
    }

}
