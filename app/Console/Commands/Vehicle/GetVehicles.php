<?php

namespace App\Console\Commands\Vehicle;

use App\Models\Vehicle\Vehicle;
use Illuminate\Console\Command;

class GetVehicles extends Command
{
    protected $signature = 'get:vehicles';

    protected $description = 'Get all vehicles';

    public function handle()
    {
        $file_path = public_path() . '/files/vehiclesBrands.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        foreach ($response[0]->data as $index => $vehicle) {
            Vehicle::create([
                'external_id' => $vehicle->external_id,
                'name' => $vehicle->brand
            ]);
        }
    }
}
