<?php

namespace App\Console\Commands\Tech;

use Illuminate\Console\Command;
use App\Models\Tech\Operation\TechOperation;

class GetTechOperations extends Command
{
    protected $signature = 'get:tech-operations';

    protected $description = 'Get all technical operations';

    public function handle()
    {
        $file_path = public_path() . '/files/techOperations.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );

        $bar = $this->output->createProgressBar(count($response[0]->data));
        $bar->start();

        foreach ($response[0]->data as $index => $operation) {
            TechOperation::create([
                'tech_operation_type_id' => $this->filterType($operation->type),
                'title' => $operation->title,
                'isDeleted' => $operation->del,
                'isHarvested' => $operation->isHarvest
            ]);

            $bar->advance();
        }

        $bar->finish();
        $this->output->write("\n");
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
