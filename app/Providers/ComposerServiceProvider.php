<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{

  /**
   * Register bindings in the container.
   *
   * @return void
   */
  public function boot() {
    // Using class based composers...
    View::composer('frontend.layout', 'App\Http\ViewComposers\FooterComposer');


    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('frontend.layout', 'App\Http\ViewComposers\FooterComposer');
        View::composer('frontend.layout', 'App\Http\ViewComposers\TopAdvertiseComposer');
        View::composer('frontend.default.home', 'App\Http\ViewComposers\RightAdvertiseComposer');
//        View::composer('frontend.default.home', 'App\Http\ViewComposers\SmallAdvertiseComposer');

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
