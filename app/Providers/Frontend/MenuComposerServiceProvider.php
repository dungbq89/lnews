<?php

namespace App\Providers\Frontend;

use App\Models\Advertise;
use App\Models\Category;
use View;
use Illuminate\Support\ServiceProvider;

class MenuComposerServiceProvider extends ServiceProvider
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
        View::composer(['frontend.layout'], function ($view) {
            $category = Category::getMenu(6);
            $navView = View::make('frontend.menu.menuNav')
                ->with('categories', $category);

            // Day ra template
            $view->with('navView', $navView);
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
