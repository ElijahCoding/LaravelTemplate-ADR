<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RegionsTableSeeder::class);
        $this->call(TechOperationTypesTableSeeder::class);
    }
}
