<?php

namespace App\Console\Commands\Vehicle;

use Illuminate\Console\Command;
use App\Models\Vehicle\VehicleType;

class GetVehicleTypes extends Command
{
    protected $signature = 'get:vehicle-types';

    protected $description = 'Get vehicle types';

    public function handle()
    {
        $file_path = public_path() . '/files/vehiclesTypes.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        foreach ($response[0]->data as $index => $vehicle) {
            VehicleType::create([
                'external_id' => $vehicle->external_id,
                'name' => $vehicle->type
            ]);
        }
    }
}
