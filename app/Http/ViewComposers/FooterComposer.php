<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

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
    $recentPost = array(
        array(
            'title' => 'What is the worst could be the worst?',
            'published_time' => '2015-02-28 21:32:54',
            'image_path' => '/themes/ipress/images/assets/thumb4.jpg',
            'comment' => 3
        ), array(
            'title' => 'Praesent ipsum adipiscing mi eget ipsum',
            'published_time' => '2015-02-25 21:32:54',
            'image_path' => '/themes/ipress/images/assets/thumb5.jpg',
            'comment' => 1
        ), array(
            'title' => 'Paul Thomson on post with SoundCloud',
            'published_time' => '2015-02-24 21:32:54',
            'image_path' => '/themes/ipress/images/assets/thumb6.jpg',
            'comment' => 1
        ));
    $view->with('recentPost', $recentPost);
    $bestReview = array(
        array(
            'title' => 'What is the worst could be the worst?',
            'published_time' => '2015-02-28 21:32:54',
            'image_path' => '/themes/ipress/images/assets/thumb13.jpg',
            'comment' => 3
        ), array(
            'title' => 'Praesent ipsum adipiscing mi eget ipsum',
            'published_time' => '2015-02-25 21:32:54',
            'image_path' => '/themes/ipress/images/assets/thumb12.jpg',
            'comment' => 1
    ));
    $view->with('bestReview', $bestReview);
  }

}
