<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

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
        return Response::json(['success' => $result], 200);
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
