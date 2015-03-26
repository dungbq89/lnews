<?php

namespace App\Providers\Frontend;

use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use View;
use Illuminate\Support\ServiceProvider;

class ArticleComposerServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...

        // Using Closure based composers...
        // Nhung menu vao layout
        View::composer(['frontend.default.home'], function ($view) {
            $articles = Article::getArticleRandom(3);
            $randomPost = View::make('frontend.article.randomPost')
                ->with('articles', $articles);

            // Day ra template
            $view->with('randomPost', $randomPost);
        });
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
