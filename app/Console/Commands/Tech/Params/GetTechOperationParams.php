<?php

namespace App\Console\Commands\Tech\Params;

use Illuminate\Console\Command;
use App\Models\Tech\Operation\Params\TechOperationParam;

class GetTechOperationParams extends Command
{
    protected $signature = 'get:tech-operation-params';

    protected $description = 'Get all technical operations params';

    public function handle()
    {
        // $this->importParams();
        $this->attachParamType();
    }

    protected function importParams()
    {
        $file_path = public_path() . '/files/techOperationsParams.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        $bar = $this->output->createProgressBar(count($response[0]->data));
        $bar->start();

        foreach ($response[0]->data as $index => $param) {
            TechOperationParam::create([
                'title' => $param->title,
                'slug' => $param->alias,
                'unit' => $param->units
            ]);

            $bar->advance();
        }

        $bar->finish();
        $this->output->write("\n");
    }

    protected function attachParamType()
    {
        $file_path = public_path() . '/files/techOperationsParamsTypes.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        $bar = $this->output->createProgressBar(count($response[0]->data));
        $bar->start();

        foreach ($response[0]->data as $index => $type) {
            // dump($type);
            // TechOperationParam::create([
            //     'title' => $param->title,
            //     'slug' => $param->alias,
            //     'unit' => $param->units
            // ]);

            $bar->advance();
        }
    }

    protected function filterType($name)
    {
        switch ($name) {
            case 'field':
                return 1;
                break;

            case 'transafer':
                return 2;
                break;

            case 'time':
                return 3;
                break;

            default:
                return 1;
        }
    }
}
