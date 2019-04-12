<?php

namespace App\Console\Commands\Vehicle;

use Illuminate\Console\Command;
use App\Models\Vehicle\VehicleCategory;

class GetVehicleCategories extends Command
{
    protected $signature = 'get:vehicle-categories';

    protected $description = 'Get vehicle categories';

    public function handle()
    {
        $file_path = public_path() . '/files/vehiclesCategories.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        foreach ($response[0]->data as $index => $vehicle) {
            VehicleCategory::create([
                'external_id' => $vehicle->external_id,
                'name' => $vehicle->category
            ]);
        }
    }
}
