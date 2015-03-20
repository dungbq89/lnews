<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{

    protected $table = 'advertise';

    //get advertise by type

    public static function getAdvertiseByType($type)
    {
        return Advertise::where('location_type', '=', $type)
            ->where('is_active', '=', 1)
            ->orderBy('priority', 'asc')
            ->first();
    }

    //get advertise detail by type

    public static function getAdvertiseLimitAdvertise($type, $limit)
    {
        return Advertise::where('location_type', '=', $type)
            ->where('is_active', '=', 1)
            ->orderBy('priority', 'asc')
            ->take($limit)
            ->offset($limit)
            ->get();
    }

}
