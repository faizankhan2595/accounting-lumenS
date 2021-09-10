<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\A_Shard;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function loaderio()
    {
        return "loaderio-16a99a2b5a74ae129876936bbff43e96";
    }

    public function show()
    {
        return ["success" => true];
    }

    public function test122(Request $request)
    {
        $warehouses = A_Shard::shard($request)->table('users')->select('email')->get();

        return $warehouses;
    }

    //
}
