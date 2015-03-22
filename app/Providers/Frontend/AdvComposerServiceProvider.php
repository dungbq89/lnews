<?php

namespace App\Providers\Frontend;

use View;
use Illuminate\Support\ServiceProvider;

class AdvComposerServiceProvider extends ServiceProvider
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
        // Nhung vao 2 template: layout va default.home
        View::composer(['frontend.layout', 'frontend.default.home'], function ($view) {
            $leftAdvView = View::make('frontend.adv.list')
                ->with('boxName', 'Left ADV')
                ->with('advlist', self::getAdvByLocation('left'));

            $rightAdvView = View::make('frontend.adv.list')
                ->with('boxName', 'Right ADV')
                ->with('advlist', self::getAdvByLocation('right'));

            // Day ra template
            $view->with('leftAdvBox', $leftAdvView)
                ->with('rightAdvBox', $rightAdvView);
        });
    }

    /**
     * Ham tra ve ADV item theo Location
     * @param $locationId
     * @return string
     */
    private static function getAdvByLocation($locationId)
    {
        return 'ADV_' . $locationId;
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
