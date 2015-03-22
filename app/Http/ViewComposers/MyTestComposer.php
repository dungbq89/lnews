<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class MyTestComposer {
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
    $viewdata= $view->getData();
    $view->with('testVariable', 'Value from MyTest Composer');
  }

}
