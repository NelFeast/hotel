<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

function userAuthInfo($relations = [])
{
    static $info = null;
    if ($info === null && Auth::user()) {
        $query = User::where('id', auth()->guard('web')->user()->id);
        if (!empty($relations)) {
            $query->with($relations);
        }
        $info = $query->first();
    }
    return $info;
}