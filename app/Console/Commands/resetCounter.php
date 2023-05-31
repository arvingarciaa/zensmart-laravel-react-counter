<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Counter;

class resetCounter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'counter:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset counter every midnight';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('counters')
        ->update([
            'count' => 0,
        ]);
    }
}
