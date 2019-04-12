<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;

class ImportData extends Command
{
    protected $signature = 'import';

    protected $description = 'Import Data from DB';

    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed');
        Artisan::call('get:tech-operations');
        Artisan::call('get:tech-operation-params');

        Artisan::call('get:vehicles');
        Artisan::call('get:vehicle-categories');
        Artisan::call('get:vehicle-types');
    }
}
