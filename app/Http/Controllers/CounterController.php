<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class CounterController extends Controller
{
    /**
     * Increment count.
     *
     * @return \Illuminate\Http\Response
     */
    public function incrementCount() {
        DB::table('counters')
        ->update([
            'count' => DB::raw('count + 1'),
        ]);
        return response('Count Incremented', 200);
    }

    /**
     * Fetch count.
     *
     * @return Integer
     */
    public function getCount() {
        $count = DB::table('counters')->select('count')->get();
        return $count;
    }
}
