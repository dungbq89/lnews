<?php

namespace App\Providers\Frontend;

use App\Models\Advertise;
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
            $topAdvView = View::make('frontend.advertise.top')
                ->with('advertise', self::getAdvByLocation('top'));

            $rightAdvView = View::make('frontend.advertise.right')
                ->with('advertise', self::getAdvByLocation('right'));

            // Day ra template
            $view->with('topAdvBox', $topAdvView)
                ->with('rightAdvBox', $rightAdvView);
        });
    }

    /**
     * Ham tra ve ADV item theo Location
     * @param $locationId
     * @return string
     */
    private static function getAdvByLocation($locationType)
    {
        $advertise = Advertise::getAdvertiseByType($locationType);
        return $advertise;
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
