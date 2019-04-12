<?php

namespace App\Console\Commands\Tech\Params;

use Illuminate\Console\Command;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\Params\TechOperationParam;

class GetTechOperationParams extends Command
{
    protected $signature = 'get:tech-operation-params';

    protected $description = 'Get all technical operations params';

    public function handle()
    {
        $this->importParams();
        $this->attachParamType();
    }

    protected function importParams()
    {
        $file_path = public_path() . '/files/techOperationsParams.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        foreach ($response[0]->data as $index => $param) {
            TechOperationParam::create([
                'title' => $param->title,
                'slug' => $param->alias,
                'unit' => $param->units
            ]);
        }
    }

    protected function attachParamType()
    {
        $file_path = public_path() . '/files/techOperationsParamsTypes.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        foreach ($response[0]->data as $index => $param_type) {
            $this->filterType($param_type->type)->tech_operation_params()->attach(
                TechOperationParam::where('id', $param_type->techOperationsParams_id)->first()
            );
        }
    }

    protected function filterType($name)
    {
        switch ($name) {
            case 'field':
                return TechOperationType::where('en', 'field')->first();
                break;

            case 'transafer':
                return TechOperationType::where('en', 'transafer')->first();
                break;

            case 'time':
                return TechOperationType::where('en', 'time')->first();
                break;

            default:
                return TechOperationType::where('en', 'field')->first();
        }
    }
}
