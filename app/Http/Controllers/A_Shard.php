<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class A_Shard extends Controller {
    
    public static function shard(Request $request) {
        Redis::set('org_7', 2);
        $org_id = Redis::get('org_7');
        $org_id = 2;
        switch ($org_id) {
            case 1:  $DB = DB::connection('mysql');break;
            case 2:  $DB = DB::connection('mysql1');break;
            case 3:  $DB = DB::connection('mysql');break;
            default: $DB = DB::connection('mysql');break;
        }

        return $DB;
    }
}


