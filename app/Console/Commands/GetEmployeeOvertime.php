<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GetEmployeeOvertime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:employee-overtime';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // api to get employee overtime
        $url = 'https://api.example.com/employee/overtime';

        Log::info('Started getting employee overtime');

        // data received from api

        Log::info('Finished getting employee overtime', ['data' => []]);

    }
}
