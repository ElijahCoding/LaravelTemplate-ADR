<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(TechOperationTypesTableSeeder::class);
    }
}
