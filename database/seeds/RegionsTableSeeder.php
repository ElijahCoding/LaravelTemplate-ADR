<?php

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    public function run()
    {
        $regions = ['Неварь' => 'Nevar', 'Рязань' => 'Ryazan'];

        foreach ($regions as $name => $slug) {
            Region::create([
                'name' => $name,
                'slug' => $slug
            ]);
        }
    }
}
