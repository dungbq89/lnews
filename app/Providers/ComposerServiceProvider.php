<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

  /**
   * Register bindings in the container.
   *
   * @return void
   */
  public function boot() {
    // Using class based composers...
    View::composer('frontend.layout', 'App\Http\ViewComposers\MyTestComposer');
    View::composer('frontend.layout', 'App\Http\ViewComposers\FooterComposer');

    // Using Closure based composers...
//        View::composer('frontend.layout', function()
//        {
//          $menu = 'A|B|C'; 
//          $view->with('menus', $menus);
//        });
  }

  /**
   * Register
   *
   * @return void
   */
  public function register() {
    //
  }

}
