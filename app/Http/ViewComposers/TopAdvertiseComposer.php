<?php

namespace App\Http\ViewComposers;

use App\Models\Advertise;
use Illuminate\Contracts\View\View;

class TopAdvertiseComposer
{
//    protected $param;

    /**
     * Create a new  composer.
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $advertise = Advertise::getAdvertiseByType('top');
        $view->with('advertise', $advertise);
    }

}
